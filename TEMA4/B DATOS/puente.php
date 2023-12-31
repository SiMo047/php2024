<?php

    $dbh = null;

    define('DB_NAME', 'first');  //nombre de base de datos
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'jaroso'); // contraseña de mysql 
    define('DB_HOST', 'mariadb:3306'); //La IP del contenedor Mysql, y el puerto interno del contenedor

    try {
        $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e){
        echo $e->getMessage();
    }


    $stmt = $dbh->prepare("SELECT * FROM usuarios");
    // Especificamos el fetch mode antes de llamar a fetch()
    // fetch_assco devuelve los datos en un array asociativo
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Ejecutamos
    $stmt->execute();
    //cada vez que llamamos a fetch nos devuelve una fila 
    // las claves del array
    while($row = $stmt->fetch()){
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    }
    

?>