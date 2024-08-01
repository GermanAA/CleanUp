<?php

function conexion ($tabla, $usuario, $pass){

    $db_host = '107.180.48.193';

    try{
        //$conexion = new PDO("mysql:host=localhost:33065;dbname=$tabla", $usuario, $pass);
        $conexion = new PDO("mysql:host=$db_host;dbname=$tabla", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {

        return false;
    }
}



?>