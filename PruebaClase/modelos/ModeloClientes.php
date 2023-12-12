<?php

    namespace  Fibra\modelos;
    use Fibra\modelos\ConexionBaseDeDatos;
    use \PDO;

    class ModeloClientes {

        public static function mostrarClientes(){
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Cliente");
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Fibra\modelos\Cliente'); //Nombre de la clase
            $consulta -> execute();

            $clientes = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $clientes;
        }

        public static function buscarCliente($cliente){

            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Cliente WHERE dni = ? OR nombre LIKE '%$cliente%'");
            $consulta -> bindValue(1,$cliente);
            $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Fibra\modelos\Cliente'); //Nombre de la clase
            $consulta -> execute();

            $cliente = $consulta->fetchAll();

            $conexionObject -> cerrarConexion();

            return $cliente;
        }
  
    }


?> 