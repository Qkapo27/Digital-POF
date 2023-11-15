<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','escuela');

// 000WEBHOST
// define('SERVIDOR','localhost');
// define('USUARIO','id21470286_pof');
// define('PASSWORD','#Promo23');
// define('BD','id21470286_escuela');

$servidor = "mysql:dbname=".BD."; host=".SERVIDOR;

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // echo "<script>alert(' conexion a la base de datos correcta')</script>";
} catch (PDOException $e) {
    echo "<script>alert('Error en la conexion a la base de datos')</script>";
}

//Localmente
$URL='http://localhost/PP-DB/';

?>