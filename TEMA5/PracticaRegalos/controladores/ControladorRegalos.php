<?php

    namespace Regalos\controladores;
    use Regalos\modelos\ModeloUsuario;  
    use Regalos\modelos\ModeloRegalo;   
    use Regalos\vistas\VistaLogin;
    use Regalos\vistas\VistaInicio;
    use Regalos\vistas\VistaRegalos;
    use Regalos\vistas\VistaRegaloForm;
 

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

        $regalos= ModeloRegalo::Regalos($nuevoR->getId());
                
        VistaRegalos::mostrar($regalos);
      

      }
 
      public static function borrarRegalo($id_regalo,$id_usuario){
        ModeloRegalo::eliminarRegalo($id_regalo);
        $regalos= ModeloRegalo::Regalos($id_usuario);
        VistaRegalos::mostrar($regalos);
      }

      
      public static function mostrarForm($id_regalo){

        $regalo=ModeloRegalo::getRegalo($id_regalo);

        VistaRegaloForm::form($regalo);
      }


      public static function modificarRegalo($regalo){

        ModeloRegalo::modificarRegalo($regalo);
       //ModeloRegalo::modificarRegalo($id,$nombre,$destinatario,$precio,$estado,$years,$id_user);
        
       $regalos= ModeloRegalo::Regalos($regalo->getId());
                
        VistaRegalos::mostrar($regalos);

      }

    }



?>