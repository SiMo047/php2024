<?php

    namespace Fibra\modelos;
    use Fibra\modelos\ConexionBaseDeDatos;
    use \PDO;

    class ModeloIncidencias {


        //funcion que devuelve todas la incidencias 
        public static function incidencias() {
            $conexionObject = new ConexionBaseDeDatos();
            $conexion = $conexionObject->getConexion();

            $consulta = $conexion->prepare("SELECT * FROM Incidencias");
            
            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Fibra\modelos\Incidencia'); //Nombre de la clase 
            $consulta->execute();
    
            $incidencias= $consulta->fetchAll();//feachAll para devolver todos los datos de array y fetch solo es para devolver un solo elemento 

            $conexionObject->cerrarConexion();

         return $incidencias;
    }


    public static function eliminarIncidencia($id) {
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("DELETE FROM Incidencias WHERE id=?");
        $consulta->bindValue(1, $id);
        $consulta->execute();

    }


    public static function buscarIncidencia($incidencia){

        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Incidencias WHERE ciudad = ? OR estado LIKE '%$incidencia%'");
        $consulta -> bindValue(1,$incidencia);
        $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Fibra\modelos\Incidencia'); //Nombre de la clase
        $consulta -> execute();

        $incidencias = $consulta->fetchAll();

        $conexionObject -> cerrarConexion();

        return $incidencias;
    }
}
