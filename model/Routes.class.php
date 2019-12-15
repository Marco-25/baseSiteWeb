<?php 

class Routes{
    static $pag;
    static $pasta_controller = 'controller/';
    static $pasta_view       = 'view/';


    //rotas do site
    static function get_siteHOME(){
        return Config::SITE_URL . DIRECTORY_SEPARATOR . Config::SITE_PASTA;
    }  
    
    static function get_siteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . Config::SITE_PASTA;
    }
    
    static function get_siteTEMA(){
        return self::get_siteHOME() . DIRECTORY_SEPARATOR . self::$pasta_view;
    }
    
    static function pag_teste01(){
        return self::get_siteHOME() . DIRECTORY_SEPARATOR . 'teste01';
    }
    
    static function pag_teste02(){
        return self::get_siteHOME() . DIRECTORY_SEPARATOR . 'teste02';
    }


    //estruturar paginas para serem chamadas em uma determinada parte do site
    static function get_Pagina(){

        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);

                $pagina = self::$pasta_controller . self::$pag[0] . '.php';
                // $pagina = self::$pasta_controller . $_GET['pag'] . '.php';
                // echo '<center>'.$pagina.'</center>';
                if(file_exists($pagina)){

                    include $pagina;

                }else{

                include 'erro.php';
            }

        }


    }



}

?>