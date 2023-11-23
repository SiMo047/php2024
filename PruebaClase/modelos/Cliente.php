<?php

namespace Fibra\modelos;


class Cliente{

private $id; 
private $nombre; 
private $direccion; 
private $localidad; 
private $movil; 
private $dni; 



public function __contruct($id="",$nombre="",$direccion="",$localidad="",$movil="",$dni=""){
    $this->id=$id;
    $this->nombre=$nombre;
    $this->direccion=$direccion;
    $this->localidad=$localidad;
    $this->movil=$movil;
    $this->dni=$dni;
   
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
 * Get the value of nombre
 */
public function getNombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 */
public function setNombre($nombre): self
{
$this->nombre = $nombre;

return $this;
}

/**
 * Get the value of direccion
 */
public function getDireccion()
{
return $this->direccion;
}

/**
 * Set the value of direccion
 */
public function setDireccion($direccion): self
{
$this->direccion = $direccion;

return $this;
}

/**
 * Get the value of localidad
 */
public function getLocalidad()
{
return $this->localidad;
}

/**
 * Set the value of localidad
 */
public function setLocalidad($localidad): self
{
$this->localidad = $localidad;

return $this;
}

/**
 * Get the value of movil
 */
public function getMovil()
{
return $this->movil;
}

/**
 * Set the value of movil
 */
public function setMovil($movil): self
{
$this->movil = $movil;

return $this;
}

/**
 * Get the value of dni
 */
public function getDni()
{
return $this->dni;
}

/**
 * Set the value of dni
 */
public function setDni($dni): self
{
$this->dni = $dni;

return $this;
}
}


?>