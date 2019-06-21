<?php

namespace Code\DB;

class Conn{

    private static $instancia=null;

    private function __construct (){
    }

    public static function getInstancia(){
        if(is_null(self::$instancia)){
            self::$instancia = new \PDO('mysql:host=localhost;dbname=formacao_php','','');
        }

        return self::$instancia;
    }
}
