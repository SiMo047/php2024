<?php

namespace Fibra\vistas;

class VistaClientes{

public static function mostrarClientes($clientes){
 
 
    include "cabecera.php";

echo'<main class="px-3">';
?>
        <form action="index.php" method="post" class=" mb-5">
            <input class="col-8 p-2"  type="text" name="cliente" id="cliente" placeholder="Buscar DNI/Nombre" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-lg-0" type="submit"name="accion" value="buscarCliente">Buscar</button>
        </form>

<?php
        
echo  '<i class="fas fa-table ">CLIENTES</i>
           
    
     <div class="card-body d-flex justify-content-center ">
    <table class="table table-secondary " id="datatablesSimple ">
        <thead>
            <tr>
                <th >Nombre</th>
                <th>Direccion </th>
                <th>Localidad </th>
                <th>Movil </th>
                <th>DNI </th>
                <th>Accion </th>
              
                
            </tr>
        </thead>
        
  
        <tbody>';

        foreach($clientes as $cliente) {
            echo "<tr>";
            echo " <td>".$cliente->getNombre()."</td>";
            echo " <td>".$cliente->getDireccion()."</td>";
            echo " <td>".$cliente->getLocalidad()."</td>";
            echo " <td>".$cliente->getMovil()."</td>";
            echo " <td>".$cliente->getDni()."</td>";
            echo " <td><a href='index.php?accion=añadirIC&id=" . $cliente -> getId() ."'><button class='btn btn-primary'>+</button></td>";
        
   
           echo "</tr>";
        }
   
        echo' </tbody>';
   echo' </table>';
   echo' </div>';
    echo'</main>';

include "footer.php";

    }
}


?>