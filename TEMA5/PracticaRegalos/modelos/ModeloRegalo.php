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

            $consulta = $conexion->prepare("INSERT INTO regalos (nombre, destinatario, precio,estado,year,id_usuario) VALUES (?,?,?,?,?,?)");
            $consulta->bindValue(1, $nuevoR->getModelo());
            $consulta->bindValue(2, $nuevoR->getPista());
            $consulta->bindValue(3, $nuevoR->getTiempo());
            $consulta->bindValue(4, $nuevoR->getColisiones());
            $consulta->bindValue(5, $nuevoR->getColisiones());
            $consulta->bindValue(6, $nuevoR->getColisiones());
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




    }