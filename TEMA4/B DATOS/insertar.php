<?php
$dbh = null;

define('DB_NAME', 'first');  //nombre de base de datos
define('DB_USER', 'root');
define('DB_PASSWORD', 'jaroso'); // contraseña de mysql 
define('DB_HOST', '172.17.0.2:3306'); //La IP del contenedor Mysql, y el puerto interno del contenedor

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo $e->getMessage();
}



//inserta usuario 

$consulta = $dbh -> prepare ("INSERT INTO  usuarios (nombre,email,password) VALUES(?,?,?)");
$consulta -> bindValue (1,"Luisa");
$consulta -> bindValue (2,"Luisa@gmail.com");
$consulta -> bindValue (3,"1234");

$consulta -> execute();

echo"insertado";

?>