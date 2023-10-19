<?php
    class Conexion{     
        static public function conectar(){
            $link = new PDO("mysql:host=localhost:3308;dbname=4a_wedding", "soporte", "soporte");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>