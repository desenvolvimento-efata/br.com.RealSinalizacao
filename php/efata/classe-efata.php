<?php 

    error_reporting(0);

    class efata {
        
        public $url = "";
        
        public $canonical = "";

        private $css_comprimido = "";

        private $js_comprimido = "";

        public function __construct($array_urls) {
            $this->url = $this->setUrl($array_urls);
            $this->canonical = $this->setCanonical();
        }
        
        private function setUrl($urls) {
            $url = $urls[1];
            if(strpos($_SERVER["SERVER_NAME"], "localhost") !== false) {
                $url = $urls[0];
            }
            return $url;
        }
        
        private function setCanonical() {
            $pag = $_SERVER["PHP_SELF"];
            $url_pagina = end((explode("/", $pag)));
            if($url_pagina == "index.php" || $url_pagina == "index" || $url_pagina == "") {
                $url_pagina = str_replace("index.php", "", $url_pagina);
                $url_canonical = $this->url.$url_pagina;
            } else {
                $url_pagina = str_replace(".php", "", $url_pagina);
                $url_canonical = $this->url.$url_pagina;
            }
            return $url_canonical;
        }

        public function formatStringToURL($string) {
            $str   = trim($string);
            $str_a = strtolower($str);
            $str_b = strip_tags($str_a);
            $str_c = preg_replace_callback('!\s+!',
            function($m){
                return "-";
            }, $str_b);
            $array_a = array('.', '!', '@', '#', '$', '%', '&', '*', '+', '=', '(', ')', '[', ']', '{', '}', '<', '>', '\'');
            $array_b = array('-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');
            $str_d = str_replace($array_a, $array_b, $str_c);
            $array_1 = array(',', ';', ':', '/', '~', '?', '!', 'á', 'é', 'í', 'ó', 'ú', 'â', 'ê', 'î', 'ô', 'û', 'à', 'è', 'ì', 'ò', 'ù', 'ã', 'õ', 'ç', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Â', 'Ê', 'Î', 'Ô', 'Û', 'À', 'È', 'Ì', 'Ò', 'Ù', 'Ã', 'Õ', 'Ç', 'Ñ', 'ä', 'Ä', 'ë', 'Ë', 'ï', 'Ï', 'ö', 'Ö', 'ü', 'Ü');
            $array_2 = array('', '', '', '-', '-', '', '', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
            $str_e = str_replace($array_1, $array_2, $str_d);
            $str_f = preg_replace_callback('/[-]+/',
            function($m){
                return "-";
            }, $str_e);
            $url = trim($str_f, "-");
            return $url;
        }

        public function subMenu($array, $set_options = null) {
            $html = "";
            $options = array(
                "id" => empty($set_options["id"]) ? "" : $set_options["id"],
                "class" => empty($set_options["class"]) ? "" : $set_options["class"],
                "random" => empty($set_options["random"]) ? false : true,
                "limit" => empty($set_options["limit"]) ? 9999 : $set_options["limit"]
            );
            $class = !empty($options["class"]) ? " class=\"" . $options["class"] . "\"" : "";
            if($options["random"] == true){
                shuffle($array);
            }
            $i = 1;
            foreach ($array as $chave => $valor) {
                $palavra = $valor;
                if(!is_numeric($chave)){
                    $palavra = $chave;
                }
                if($i <= $options["limit"]){
                    $url_palavra = $this->formatStringToURL($palavra);
                    if(!empty($this->url_extension))
                    {
                        $url_palavra .= $this->url_extension;
                    }
                    $html .= "<li" . (!empty($options["id"]) ? " id=\"" . $options["id"] . "-" . $i . "\" " : "") . $class . ">";
                    $html .= "<a href=\"" . $this->url . $url_palavra . "\" title=\"" . $palavra . "\">" . $palavra . "</a></li>\n";
                    $i++;
                }
            }
            return $html;
        }

        public function listaThumbs($array, $set_options = null) {
            $html = "";
            $options = array(
                "id" => empty($set_options["id"]) ? "" : $set_options["id"],
                "class_div" => empty($set_options["class_div"]) ? "col-md-3" : $set_options["class_div"],
                "class_section" => empty($set_options["class_section"]) ? "" : $set_options["class_section"],
                "class_img" => empty($set_options["class_img"]) ? "img-responsive" : $set_options["class_img"],
                "title_tag" => empty($set_options["title_tag"]) ? "h2" : $set_options["title_tag"],
                "folder_img" => empty($set_options["folder_img"]) ? "img/thumbs/" : $set_options["folder_img"],
                "extension" => empty($set_options["extension"]) ? "jpg" : $set_options["extension"],
                "limit" => empty($set_options["limit"]) ? 9999 : $set_options["limit"],
                "random" => empty($set_options["random"]) ? false : true,
                "text" => empty($set_options["text"]) ? false : true,
                "headline_text" => empty($set_options["headline_text"]) ? "Veja Mais" : $set_options["headline_text"],
            );
            if($options["random"] === true) {
                $nova_array = array();
                foreach ($array as $chave => $valor) {
                    $nova_array[] = array("chave" => $chave, "valor" => $valor);
                }
                shuffle($nova_array);
                $array = array();
                foreach ($nova_array as $valor) {
                    $array[$valor["chave"]] = $valor["valor"];
                }
            }
            $class_div = !empty($options["class_div"]) ? " class=\"" . $options["class_div"] . "\"" : "";
            $class_section = !empty($options["class_section"]) ? " class=\"" . $options["class_section"] . "\"" : "";
            $class_img = !empty($options["class_img"]) ? " class=\"" . $options["class_img"] . "\"" : "";
            $img_folder = $options["folder_img"];
            $i = 1;
            foreach ($array as $chave => $valor) {
                $palavra = $valor;
                $text = "";
                if(!is_numeric($chave)) {
                    $palavra = $chave;
                    $text = $valor;
                }
                if($i <= $options["limit"]) {
                    $src_img = $this->verificaImagem($this->url . $img_folder . $this->formatStringToURL($palavra) . "." . $options["extension"]);
                    $url_page = $this->url . $this->formatStringToURL($palavra);
                    if(!empty($this->url_extension)) {
                        $url_page .= $this->url_extension;
                    }
                    $html .= "<div" . (!empty($options["id"]) ? " id=\"".$options["id"] . "-" . $i . "\" " : "") . $class_div . ">\n";
                    $html .= "<section". $class_section .">\n";
                    $html .= "<a rel=\"nofollow\" href=\"" . $url_page . "\" title=\"" . $palavra . "\">\n";
                    $html .= "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                    $html .= "</a>\n";
                    $html .= "<" . $options["title_tag"] . ">\n";
                    $html .= "<a href=\"". $url_page . "\" title=\"" . $palavra . "\">" . $palavra . "</a>\n";
                    $html .= "</" . $options["title_tag"] . ">\n";
                    $html .= "</section>\n";
                    $html .= "</div>\n";
                    $i++;
                }
            }
            return $html;
        }

        public function breadcrumb($array) {
            $html = "";
            $n_array = count($array);
            $link_home = $this->url;
            if(!empty($this->breadcrumb_url_home)) {
                $link_home = $this->breadcrumb_url_home;
            }
            $html .= "<div id=\"breadcrumb\">\n";
            $html .= "Você está aqui: ";
            $html .= "<a rel=\"home\" href=\"" . $link_home . "\" title=\"Página Inicial\"><span>Página Inicial</span></a> / ";
            $i = 1;
            foreach($array as $string) {
                $html .= $this->setBreadcrumb($i, $n_array, $string);
                if($i < $n_array) {
                    $html .= " / ";
                }
                $i++;
            }
            for ($index = 1; $index < $i; $index++) {
                $html .= "</div>\n";
            }
            $html .= "</div>\n";
            return $html;
        }

        private function setBreadcrumb($n, $total, $string) {
            $convert_string_to_url = $this->formatStringToURL($string);
            $url_breadcrumb = $this->url . $convert_string_to_url;
            if(!empty($this->url_extension)) {
                $url_breadcrumb .= $this->url_extension;
            }
            $html  = "<div>\n";
            $html .= "<a href=\"" . $url_breadcrumb . "\" title=\"" . $string . "\">\n";
            $html .= $n == $total ? "<strong>" : "";
            $html .= "<span class=\"page\">" . $string . "</span>";
            $html .= $n == $total ? "</strong>" : "";
            $html .= "\n</a>\n";
            return $html;
        }
        
        private function verificaImagem($src) {
            $new_img = $this->url . "img/sem-imagem.jpg";
            if(strpos($this->url, "localhost") == true) {
                $file = str_replace($this->url, "", $src);
                if(file_exists($file)) {
                    $new_img = $src;
                }
            } else {
                $new_img = $src;
            }
            return $new_img;
        }

        public function listaGaleria($palavra = null, $quantidade = null) {
            $html = "";
            try {
                if(empty($palavra)) {
                    throw new Exception("Palavra chave não definida", 1);
                }
                if(empty($quantidade)) {
                    throw new Exception("Quantidade não definida", 2);
                }
                $html .= "<div class=\"lista-galeria-fancy row\">";
                $url_palavra = $this->formatStringToURL($palavra);
                $src_default = $this->url."img/".$url_palavra."/";
                for ($i = 1; $i <= $quantidade; $i++) {
                    $img_big   = $src_default.$url_palavra."-".$i.".jpg";
                    $img_small = $src_default.$url_palavra."-thumb-".$i.".jpg";
                    $html .= "<div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">";
                    $html .= "<a href=\"".$img_big."\" title=\"".$palavra." - ".$i."\" data-fancybox-group=\"".$url_palavra."\">";
                    $html .= "<img src=\"".$img_small."\" alt=\"".$palavra." - ".$i."\" title=\"".$palavra." - ".$i."\" class=\"img-responsive\">";
                    $html .= "</a>";
                    $html .= "</div>";
                }
                $html .= "</div>";
                $html .= "<p class=\"font-12\">Clique nas imagens para ampliar.</p>";
                return $html;
            } catch (Exception $e) {
                switch ($e->getCode())
                {
                    case 1:
                        return "<p style=\"text-align:center\">".$e->getMessage()."</p>";
                        break;
                    case 2:
                        return $html;
                        break;
                    default:
                        break;
                }
            }
        }
        
        public function CSS($array_files = null) {
            $diretorio = dir("css/");
            while($arquivo = $diretorio->read()) {
                if(!in_array($arquivo, array(".", ".."))) {
                     $this->css_comprimido .= $this->my_file_get_contents("css/".$arquivo);
                }
            }
            $this->css_comprimido = str_replace(array("\r", "\n"), '', $this->css_comprimido);
            $this->css_comprimido = preg_replace_callback('!/\*[^*]*\*+([^/][^*]*\*+)*/!',
            function($m){
                return "";
            }, $this->css_comprimido);
            $this->css_comprimido = str_replace('{ ','{', $this->css_comprimido);
            $this->css_comprimido = str_replace(' }', '}', $this->css_comprimido);
            $this->css_comprimido = str_replace('; ', ';', $this->css_comprimido);
            $this->css_comprimido = str_replace(["\r\n","\r","\n","\t",'  ','    ','     '], '', $this->css_comprimido);
            $this->css_comprimido = preg_replace_callback(['(( )+{)','({( )+)'],
            function($m){
                return "{";
            }, $this->css_comprimido);
            $this->css_comprimido = preg_replace_callback(['(( )+})','(}( )+)','(;( )*})'],
            function($m){
                return "}";
            }, $this->css_comprimido);
            $this->css_comprimido = preg_replace_callback(['(;( )+)','(( )+;)'],
            function($m){
                return ";";
            }, $this->css_comprimido);
            if(!empty($this->css_comprimido)) {
                echo $this->css_comprimido;
            }
        }
        
        public function JS($array_files = null) {
            $diretorio = dir("js/");
            $this->js_comprimido .= $this->my_file_get_contents("js/1-padrao.js");
            while($arquivo = $diretorio->read()) {
                if( !in_array($arquivo, array(".", "..", "1-padrao.js")) ) {
                    $this->js_comprimido .= $this->my_file_get_contents("js/".$arquivo);
                }
            }
            $this->js_comprimido = str_replace(array("\r", "\n"), '', $this->js_comprimido);
            $this->js_comprimido = str_replace(["\r\n","\r","\t","\n",'  ','    ','     '], '', $this->js_comprimido);
            $this->js_comprimido = preg_replace_callback(['(( )+\))','(\)( )+)'],
            function($m){
                return ")";
            }, $this->js_comprimido);
            $this->js_comprimido = preg_replace_callback('!/\*.*?\*/!s',
            function($m){
                return "";
            }, $this->js_comprimido);
            $this->js_comprimido = preg_replace_callback('/\n\s*\n/',
            function($m){
                return "\n";
            }, $this->js_comprimido);
            if(!empty($this->js_comprimido)) {
                echo $this->js_comprimido;
            }
        }
        
        private function my_file_get_contents($url) {
            $file_contents = file_get_contents($url);
            return $file_contents;
        }
        
        public function alerta($string) {
            header('Content-type: text/html; charset=utf-8');
            echo "<p style=\"text-align:center;font-size:26px;color:red;margin:32px 0px;\">".$string."</p>";
        }
        
    }