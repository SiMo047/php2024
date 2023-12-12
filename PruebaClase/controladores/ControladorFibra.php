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
        //Buscar por Cliente
        public static function buscarCliente($cliente){

            $cliente = ModeloClientes::buscarCliente($cliente);
            VistaClientes::mostrarClientes($cliente);

        }

        //Metodo que añade incidencia (muetra los clientes )
        public static function añadirIncidencia(){

            $clientes = ModeloClientes::mostrarClientes();

            VistaClientes::mostrarClientes($clientes);

        }

        //Metodo que muestra form para añadir una nueva incidencia 
        public static function añadirInciForm($id){

            VistaAñadirIncidencia::añadirIncidencia($id);

        }
}


?>