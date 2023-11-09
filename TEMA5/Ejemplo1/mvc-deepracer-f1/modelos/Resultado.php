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



   



        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nombre_Corredor
         */
        public function getNombreCorredor()
        {
                return $this->nombre_Corredor;
        }

        /**
         * Set the value of nombre_Corredor
         */
        public function setNombreCorredor($nombre_Corredor): self
        {
                $this->nombre_Corredor = $nombre_Corredor;

                return $this;
        }

        /**
         * Get the value of posicion
         */
        public function getPosicion()
        {
                return $this->posicion;
        }

        /**
         * Set the value of posicion
         */
        public function setPosicion($posicion): self
        {
                $this->posicion = $posicion;

                return $this;
        }

        /**
         * Get the value of tiempo
         */
        public function getTiempo()
        {
                return $this->tiempo;
        }

        /**
         * Set the value of tiempo
         */
        public function setTiempo($tiempo): self
        {
                $this->tiempo = $tiempo;

                return $this;
        }

        /**
         * Get the value of pais
         */
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Set the value of pais
         */
        public function setPais($pais): self
        {
                $this->pais = $pais;

                return $this;
        }
    }