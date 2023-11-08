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

	public private getId() {
		return this.$id;
	}

	public void setId(private $id) {
		this.$id = $id;
	}

	public private getNombre_Corredor() {
		return this.$nombre_Corredor;
	}

	public void setNombre_Corredor(private $nombre_Corredor) {
		this.$nombre_Corredor = $nombre_Corredor;
	}

	public private getPosicion() {
		return this.$posicion;
	}

	public void setPosicion(private $posicion) {
		this.$posicion = $posicion;
	}

	public private getTiempo() {
		return this.$tiempo;
	}

	public void setTiempo(private $tiempo) {
		this.$tiempo = $tiempo;
	}

	public private getPais() {
		return this.$pais;
	}

	public void setPais(private $pais) {
		this.$pais = $pais;
	}


   


    }