<?php
    namespace DeepRacer\modelos;

    class Resultado {

        private $id;
        private $nombre_Corredor;
        private $posicion;
        private $tiempo;
        private $pais;



        public function __construct($id="",$nom_Corredor="",$posicion="",$tiempo="",$pais="")
        {
            $this->id = $id;
            $this->nom_Corredor = $nom_Corredor;
            $this->posicion = $posicion;
            $this->tiempo = $tiempo;
            $this->pais = $pais;
        }



   


    }