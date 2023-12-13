<?php

namespace Fibra\controladores;

use Fibra\vistas\VistaInicio;
use Fibra\vistas\VistaIncidencias;
use Fibra\vistas\VistaClientes;
use Fibra\vistas\VistaAñadirIncidencia;
use Fibra\modelos\ModeloIncidencias;
use Fibra\modelos\ModeloClientes;


class ControladorFibra{

     /**
         * Método que muestra la página principal de bienvenida (inicio)
         */
        public static function mostrarInicio() {
            VistaInicio::inicio();
        }

        /**
         * Metodo que muestra las incidencias
         */
        public static function mostrarIncidencias(){

            $incidencias=ModeloIncidencias::incidencias();

            VistaIncidencias::mostrarIncidencias($incidencias);

        }

        //Esta funcion solo pone los botones en rojo
        public static function borrarIncidencia(){
            $incidencias=ModeloIncidencias::incidencias();

            VistaIncidencias::borrarIncidencias($incidencias);
        }
         //Esta funcion elimina la incidencia
        public static function eliminarIncidencia($id){
            ModeloIncidencias::eliminarIncidencia($id);
            $incidencias=ModeloIncidencias::incidencias();

            VistaIncidencias::mostrarIncidencias($incidencias);
        }


        //Buscar por incidencia 
        public static function buscarIncidencia($incidencia){

            $incidencias = ModeloIncidencias::buscarIncidencia($incidencia);

            VistaIncidencias::mostrarIncidencias($incidencias);

        }
     
        //Metodo que añade incidencia (muetra los clientes )
        public static function añadirIncidencia(){

            $clientes = ModeloClientes::mostrarClientes();

            VistaClientes::mostrarClientes($clientes);

        }

           //Buscar por Cliente
           public static function buscarCliente($cliente){

            $cliente = ModeloClientes::buscarCliente($cliente);
            VistaClientes::mostrarClientes($cliente);

        }

        //Metodo que muestra form para añadir una nueva incidencia 
        public static function añadirInciForm($id){

            VistaAñadirIncidencia::añadirIncidencia($id);

        }


        public static function nuevaIncidencia($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id){

            ModeloIncidencias::nuevaIncidencia($latitud, $longitud, $ciudad, $direccion, $solucion, $estado, $id);

            
            $incidencias=ModeloIncidencias::incidencias();

            VistaIncidencias::mostrarIncidencias($incidencias);


        }


        public static function modificarIncidencia(){

            $incidencias=ModeloIncidencias::incidencias();

            VistaIncidencias::modificarIncidencia($incidencias);
        }

        public static function modificarI($id){
            
            
            $incidencia = ModeloIncidencias::modificarI($id);
            VistaIncidencias::modiform($incidencia);


        }
}


?>