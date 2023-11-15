<?php
    namespace Regalos;
    use Regalos\controladores\ControladorRegalos;

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
            
            //MOSTRAR EL LOGIN DE LA PAGINA 
            if (strcmp($_REQUEST['accion'],'login') == 0) {
                ControladorRegalos::mostrarLogin();
            }

            //Recoger form login
            if (strcmp($_REQUEST['accion'],'loginUsuario') == 0) {
                $email= $_REQUEST['email'];
                $password= $_REQUEST['password'];
                
                ControladorRegalos::checklogin($email,$password);
            
            }

              //MOSTRAR TABALA CON LOS REGALOS 
              //if (strcmp($_REQUEST['accion'],'iniciasesion') == 0) {
              
              //}


            //ELIMINAR UN RESULTADO
            if (strcmp($_REQUEST['accion'],'eliminarResultado') == 0) {
                $id = $_REQUEST['id'];
                ControladorRegalos::eliminarResultado($id);
            }



        } else {
            //Mostrar inicio
            ControladorRegalos::mostrarInicio();
        }
    }





?>