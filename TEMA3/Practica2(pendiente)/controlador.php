<?php
    session_start();

    if ($_POST) {
        if (isset($_POST['nombre'])) {

            $nombre = $_POST["nombre"];
            $fechaI = $_POST["fechaI"];
            $fechaF = $_POST["fechaF"];
            $porcentaje = $_POST["porcentaje"];
            $importancia = $_POST["importancia"];

            $proyecto = array("nombre" => $nombre,
                               "fechaI" => $fechaI,
                               "fechaF" => $fechaF,
                               "dias" => 0,
                               "porcentaje" => $porcentaje,
                               "importancia" => $importancia);

            array_push($_SESSION['proyectos'], $proyecto);

            header("Location: index.php");
            die();

        }

    }



    if (isset($_GET['accion'])) {
        if (strcmp($_GET['accion'],"borrarProyecto") == 0) {

            $nombreProyecto = $_GET['nombreProyecto'];

            $posicion = array_search($nombreProyecto, array_column($_SESSION['proyectos'], 'nombre'));

            if ($posicion !== FALSE) {
                /*
                unset($_SESSION['carro'][$posicion]);
                //Reestructura índices del array
                $_SESSION['carro'] = array_values($_SESSION['carro']);
                */

                //Elimina el elemento de la posición y reconstruye el array, se pierden los índices, los rehace
                array_splice($_SESSION['proyectos'],$posicion,1);
            }

            //Redirigir a ver el carro de la compra
            header("Location: index.php");
            die(); 
        }
    }
    
















?>