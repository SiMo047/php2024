<?php
    namespace Regalos;
    use Regalos\controladores\ControladorRegalos;
    use Regalos\modelos\Regalo;

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

            //Nuevo Regalo
           //if (strcmp($_REQUEST['accion'],'nuevoRegalo') == 0) {
             //   $nombre=$_REQUEST['nombre'];
              //  $destinatario=$_REQUEST['destinatario'];
              //  $precio=$_REQUEST['precio'];
              //  $estado=$_REQUEST['estado'];
              //  $year=$_REQUEST['year'];
              //  $id_usuario=$_REQUEST['id_usuario'];

              //  $nuevoR= new Regalo(nombre:$nombre,destinatario:$destinatario,precio:$precio,estado:$estado,year:$year,id_usuario:$id_usuario);

              //  ControladorRegalos::insertarRegalo($nuevoR);
           // }

              

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