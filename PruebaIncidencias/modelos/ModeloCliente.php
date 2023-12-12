<?php

    namespace  Incidencias\modelos;

    use \PDO;

    class ModeloCliente {

        public static function mostrarClientes(){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Clientes");
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Incidencias\modelos\Cliente'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $regalos;
        }

        public static function buscarCliente($dni){

            $conexionObject = new conexionBBDD();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Clientes WHERE dni = ? OR nombre LIKE '%$dni%'");
            $consulta -> bindValue(1,$dni);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Incidencias\modelos\Cliente'); //Nombre de la clase
            $consulta -> execute();

            $regalos = $consulta->fetchAll();//fetch all para sacar todos los datos de la base de datos 

            $conexionObject -> cerrarConexion();

            return $regalos;
        }
  
    }


?> 