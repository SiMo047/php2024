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


    public static function nuevaIncidencia($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id){
      
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();
         //Los nombres deben ser igual a la base de datos 
        $consulta = $conexion->prepare(" INSERT INTO Incidencias (latitud,longitud,ciudad,direccion,solucion,estado,id_cliente) VALUES (?,?,?,?,?,?,?)");
        $consulta -> bindValue(1,$latitud);
        $consulta -> bindValue(2,$longitud);
        $consulta -> bindValue(3,$ciudad);
        $consulta -> bindValue(4,$direccion);
        $consulta -> bindValue(5,$solucion);
        $consulta -> bindValue(6,$estado);
        $consulta -> bindValue(7,$id);
        $consulta -> execute();

        $conexionObject -> cerrarConexion();
    }

    public static function modificarI($id){


        
        $conexionObject = new ConexionBaseDeDatos();
        $conexion = $conexionObject->getConexion();

        $consulta = $conexion->prepare("SELECT * FROM Incidencias WHERE id = ?");
        $consulta -> bindValue(1, $id);
        $consulta -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Fibra\modelos\Incidencia'); //Nombre de la clase
        $consulta -> execute();

        $incidencia = $consulta->fetch();

        $conexionObject -> cerrarConexion();

        return $incidencia;



    }
}
