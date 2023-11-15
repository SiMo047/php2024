<?php

    namespace Regalos\controladores;
    use Regalos\modelos\ModeloUsuario;    
    use Regalos\vistas\VistaLogin;
    use Regalos\vistas\VistaInicio;
 

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
         * Metodo que comprueba el email y la contraseña
         */
        public static function checklogin($email,$password){
           
           
            $usuario = ModeloUsuario::checkloginM($email,$password);
        
            if ($usuario==false){
                echo "usuario no existe ";
            } else {
                echo "Correecto";
            }
  
      }

    }



?>