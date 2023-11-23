<?php

    namespace Regalos\controladores;
    use Regalos\modelos\ModeloUsuario;  
    use Regalos\modelos\ModeloRegalo;   
    use Regalos\vistas\VistaLogin;
    use Regalos\vistas\VistaInicio;
    use Regalos\vistas\VistaRegalos;
 

    class ControladorRegalos {

        /**
         * Método que muestra la página principal de bienvenida (inicio)
         */
        public static function mostrarInicio() {
            VistaInicio::inicio();
        }
        /**
         * Método que muestra el login 
         */
        public static function mostrarLogin(){
            VistaLogin::login();
        }

        /**
         * Metodo que comprueba el email y la contraseña que has recogido del login 
         */
        public static function checklogin($email,$password){
           
           
            //objeto usuario
            $usuario = ModeloUsuario::checkloginM($email,$password);
            
              $emaill= $usuario->getEmail();
            
            if ($usuario==false){
                echo "USUARIO NO EXISTENTE ";
            } else {
               
            $regalos= ModeloRegalo::Regalos($usuario->getId());
                
              VistaRegalos::mostrar($regalos);

        }
  
      }

      public static function insertarRegalo($nuevoR){

        ModeloRegalo::insertar($nuevoR);

        $regalos= ModeloRegalo::Regalos($usuario->getId());
                
        VistaRegalos::mostrar($regalos);
      

      }

    }



?>