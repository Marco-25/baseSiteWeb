<?php 

class Connection extends Config{

    private $host, $user, $pass, $bank, $prefix;

   function __construct(){

        $this->host   = self::BD_HOST;
        $this->user   = self::BD_USER;
        $this->pass   = self::BD_PASS;
        $this->bank   = self::BD_NAME;
        $this->prefix = self::BD_PREFIX;

        try{

            if(self::conect() == null) self::conect();

        }catch(Exception $e){
            exit($e->getMessage(). '<h2>Erro na conexão!!</h2>');
        }

   }

   private function conect(){

    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    );

    $link = new PDO("mysql:host={$this->host};dbname={$this->bank}", $this->user, $this->pass, $options);

   }


}

?>