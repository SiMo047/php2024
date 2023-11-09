<?php

    namespace Regalos\controladores;
    
    
    
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


     
  

      

    }



?>