<?php

    namespace Regalos\modelos;
    use Regalos\modelos\ConexionBaseDeDatos;
    use \PDO;

    class ModeloRegalo {

            //Funcion que devuelve regalos segun el id del usuario  
        public static function Regalos($id_usuario) {

            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM regalos where id_usuario=?");
            $consulta->bindValue(1,$id_usuario);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalos\modelos\Regalo'); //Nombre de la clase 
            $consulta->execute();
    
            $resultados = $consulta->fetchAll();//feachAll para devolver todos los datos de array y fetch solo es para devolver un solo elemento 

            $conexionObject->cerrarConexion();

         return $resultados;// devuelve los regalos segund el id usuario

        }


        //Funcion para insertar un nuevo regalo en la base de datos 
        public static function insertar(Regalo $nuevoR){
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("INSERT INTO regalos (nombre,destinatario,precio,estado,year,id_usuario) VALUES (?,?,?,?,?,?)");
            $consulta->bindValue(1, $nuevoR->getNombre());
            $consulta->bindValue(2, $nuevoR->getDestinatario());
            $consulta->bindValue(3, $nuevoR->getPrecio());
            $consulta->bindValue(4, $nuevoR->getEstado());
            $consulta->bindValue(5, $nuevoR->getYear());
            $consulta->bindValue(6, $nuevoR->getId_usuario());
            $consulta->execute();

            $conexionObject->cerrarConexion();

        }



        // eliminar regalo
        public static function eliminarRegalo($id_regalo) {
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("DELETE FROM regalos WHERE id=?");
            $consulta->bindValue(1, $id_regalo);
            $consulta->execute();

            $conexionObject->cerrarConexion();
        }



        //get regalo
        public static function getRegalo($id_regalo){
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM regalos WHERE id=?");
            $consulta->bindValue(1,$id_regalo);
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalos\modelos\Regalo'); //Nombre de la clase
            $consulta->execute();
    
            $resultados = $consulta->fetch();
            $conexionObject->cerrarConexion();

            return $resultados;



        }


        //Modificar Regalo
         //Funcion para insertar un nuevo regalo en la base de datos 
         public static function modificarRegalo($nuevoR){
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("UPDATE regalos SET nombre=?, destinatario=?, precio=?, estado=?, year=? WHERE id=?");
            $consulta->bindValue(1, $nuevoR->getNombre());
            $consulta->bindValue(2, $nuevoR->getDestinatario());
            $consulta->bindValue(3, $nuevoR->getPrecio());
            $consulta->bindValue(4, $nuevoR->getEstado());
            $consulta->bindValue(5, $nuevoR->getYear());
            $consulta->bindValue(6, $nuevoR->getId());
            $consulta->execute();

            $conexionObject->cerrarConexion();

        }




    }