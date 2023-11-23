<?php

namespace Regalos\vistas;



class VistaRegalos {



    public static function mostrar($regalos){

        include "cabecera.php";
     
     
      echo' <div class="card-body">
        <table class="table table-secondary" id="datatablesSimple">
            <thead>
                <tr>
                    <th >Nombre</th>
                    <th>Destinatario </th>
                    <th>Precio </th>
                    <th>Estado </th>
                    <th>Year </th>
                    
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