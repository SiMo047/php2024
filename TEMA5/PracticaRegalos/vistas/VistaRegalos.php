<?php

namespace Regalos\vistas;



class VistaRegalos {



    public static function mostrar($regalos){

        include "cabecera.php";
     
     
      echo'  <div class="container-fluid px-4">
                <h1 class="mt-4">Lista Regalos</h1>
      
                 <div class="card mb-4">
                  <div class="card-header">
                   <i class="fas fa-table me-1"></i>
                      Regalos
                  </div> 
      
      
      
        <div class="card-body">
        <table class="table table-secondary" id="datatablesSimple">
            <thead>
                <tr>
                    <th >Nombre</th>
                    <th>Destinatario </th>
                    <th>Precio </th>
                    <th>Estado </th>
                    <th>Year </th>
                    <th>Acciones </th>
                    
                </tr>
            </thead>
            
      
            <tbody>';

            foreach($regalos as $regalo) {
                echo "<tr>";
                echo " <td>".$regalo->getNombre()."</td>";
                echo " <td>".$regalo->getDestinatario()."</td>";
                echo " <td>".$regalo->getPrecio()."</td>";
                echo " <td>".$regalo->getEstado()."</td>";
                echo " <td>".$regalo->getYear()."</td>";
                echo "<td>";
                echo "<a href='index.php?accion=borrarRegalo&id=".$regalo->getId()."&id_user=".$regalo->getIdUsuario()."'><button class='btn btn-danger'>X</button>";
                echo "<a href='index.php?accion=modificarRegalo&id=".$regalo->getId()."'><button class='btn btn-warning ms-1'>Modificar</button>";
                echo "</td>";
       
       
                echo "</tr>";
            }
        echo '</tbody>';
        echo'</table>';
        echo'</div>';


                       
    echo'</div>';
    echo'</div>';
    echo'</main>';

        
              
              
              
              
              
              
          include "footer.php";     

             

   }
   
 


}