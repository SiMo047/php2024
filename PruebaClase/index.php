<?php
//Nombre del espacio 
namespace Fibra;
//nombre espacio + nombre carpeta :
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

            ControladorFibra::añadirIncidencia();
            
        }
          //Enseña la vista con la tabla con los botones en rojo
          if (strcmp($_REQUEST['accion'],'borrarIncidencia') == 0) {

           ControladorFibra::borrarIncidencia();
        }

            //Eliminar Incidencia 
            if (strcmp($_REQUEST['accion'],'eliminar') == 0) {
                $id = $_REQUEST['id'];
                ControladorFibra::eliminarIncidencia($id);
            }
          //Modificar Incidencia
          if (strcmp($_REQUEST['accion'],'modificarIncidencia') == 0) {


            ControladorFibra::modificarIncidencia();



        }


         //Metodo para buscar por estado o ciudad 
         if (strcmp($_REQUEST['accion'],'buscarIncidencia') == 0) {
            $incidencia = $_REQUEST['incidencia'];

            ControladorFibra::buscarIncidencia($incidencia);
        }

        //Metodo para buscar por dni o nombre 
        if (strcmp($_REQUEST['accion'],'buscarCliente') == 0) {
            
            $cliente=$_REQUEST['cliente'];

            ControladorFibra::buscarCliente($cliente);

        }

        //Metodo que muestra un form para añadir una nueva incidencia 
        if (strcmp($_REQUEST['accion'],'añadirIC') == 0) {

            $id=$_REQUEST['id'];
          
            ControladorFibra::añadirInciForm($id);
        }


        //Metodo que añade la incidencia viene del form con los datos 
          if (strcmp($_REQUEST['accion'],'enviarAñadirIncidencia') == 0) {
            $latitud = floatval($_REQUEST['latitud']);
            $longitud = floatval($_REQUEST['longitud']);
            $ciudad =$_REQUEST['ciudad'];
            $direccion=$_REQUEST['direccion'];
            $solucion=$_REQUEST['solucion'];
            $estado=$_REQUEST['estado'];
            $id=$_REQUEST['id'];

            ControladorFibra::nuevaIncidencia($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id);

          }

          if (strcmp($_REQUEST['accion'],'modificar') == 0) {
            
            
            $id=$_REQUEST['id'];

            ControladorFibra::modificarI($id);



          }




    } else {
        //Mostrar inicio
        ControladorFibra::mostrarInicio();
    }
}

?>