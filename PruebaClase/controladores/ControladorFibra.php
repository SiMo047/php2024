<?php

namespace Fibra\controladores;

use Fibra\vistas\VistaInicio;
use Fibra\vistas\VistaIncidencias;
use Fibra\modelos\ModeloIncidencias;


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
}


?>