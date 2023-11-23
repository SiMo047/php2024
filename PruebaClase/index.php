<?php

namespace Fibra;

use Fibra\controladores\ControladorFibra;

 //Autocargar las clases --------------------------
 spl_autoload_register(function ($class) {
    //echo substr($class, strpos($class,"\\")+1);
    $ruta = substr($class, strpos($class,"\\")+1);
    $ruta = str_replace("\\", "/", $ruta);
    include_once "./" . $ruta . ".php"; 
});
//Fin Autcargar ----------------------------------



if (isset($_REQUEST)) {
    //Tratamiento de botones, forms, ...
    if (isset($_REQUEST["accion"])) {

        //Mostrar las incidencias
        if (strcmp($_REQUEST['accion'],'mostrarIncidencias') == 0) {

            ControladorFibra::mostrarIncidencias();
        }

          //Añadir Inicidencia
          if (strcmp($_REQUEST['accion'],'añadirIncidencia') == 0) {

            
        }
          //Enseña la vista con la tabla con los botones en rojo
          if (strcmp($_REQUEST['accion'],'borrarIncidencia') == 0) {

           ControladorFibra::borrarIncidencia();
        }

            //Eliminar
            if (strcmp($_REQUEST['accion'],'eliminar') == 0) {
                $id = $_REQUEST['id'];
                ControladorFibra::eliminarIncidencia($id);
            }
          //Modificar Incidencia
          if (strcmp($_REQUEST['accion'],'modificarIncidencia') == 0) {

        }


    } else {
        //Mostrar inicio
        ControladorFibra::mostrarInicio();
    }
}

?>