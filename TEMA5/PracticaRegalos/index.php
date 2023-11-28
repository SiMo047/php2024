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
              //  $years=$_REQUEST['years'];
              //  $id_usuario=$_REQUEST['id_usuario'];

              //  $nuevoR= new Regalo(nombre:$nombre,destinatario:$destinatario,precio:$precio,estado:$estado,years:$years,id_usuario:$id_usuario);

              //  ControladorRegalos::insertarRegalo($nuevoR);
           // }

              

            //Borrar Regalo
            if (strcmp($_REQUEST['accion'],'borrarRegalo') == 0) {
                
                $id_regalo = $_REQUEST['id'];
                $id_usuario =$_REQUEST['id_user'];
                ControladorRegalos::borrarRegalo($id_regalo,$id_usuario);
              
               
            }

            //Mostrar Formulario para modifcar el  Regalo
            if (strcmp($_REQUEST['accion'],'modificarRegalo') == 0) {
                $id_regalo = $_REQUEST['id'];
                ControladorRegalos::mostrarForm($id_regalo);
             }

             if (strcmp($_REQUEST['accion'],'recibirFormModificar') == 0) {
                
                  

                $nombre = $_REQUEST['nombre'];
                $destinatario = $_REQUEST['destinatario'];
                $precio = $_REQUEST['precio'];
                $estado = $_REQUEST['estado'];
                $years = $_REQUEST['years'];
                $id = $_REQUEST['id'];
                $id_user = $_REQUEST['id_usuario'];

                
                


               $regalo = new Regalo(id:$id,nombre: $nombre,destinatario:$destinatario,precio:$precio,estado:$estado,years:$years,
               id_usuario:$id_user);

                
           //ControladorRegalos::modificarRegalo($id,$nombre,$destinatario,$precio,$estado,$years,$id_user);

                
                
                
             }




        } else {
            //Mostrar inicio
            ControladorRegalos::mostrarInicio();
        }
    }





?>