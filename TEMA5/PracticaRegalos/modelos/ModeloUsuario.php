<?php

    namespace Regalos\modelos;
    use Regalos\modelos\ConexionBaseDeDatos;
    use \PDO;

    class ModeloUsuario {

            //Funcion que comprueba el correo y la contraseña si estan en la basa de datos 
        public static function checkloginM($email,$password) {

            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM usuario where email=? and password=?");
            $consulta->bindValue(1,$email);
            $consulta->bindValue(2,$password);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalos\modelos\Usuario'); //Nombre de la clase
            $consulta->execute();
    
            $resultados = $consulta->fetch();

            $conexionObject->cerrarConexion();

         return $resultados;
        }

        public static function eliminarResultado($id) {
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("DELETE FROM resultados WHERE id=:id");
            $consulta->bindValue(":id", $id);
            $consulta->execute();

            $conexionObject->cerrarConexion();
        }



    }