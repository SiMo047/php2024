<?php

namespace Fibra\vistas;

class VistaIncidencias{

    public static function mostrarIncidencias($incidencias){


            include "cabecera.php";

            echo'<main class="px-3">';
 ?>
                    <form action="index.php" method="post" class=" mb-5">
                        <input class="col-8 p-2"  type="text" name="incidencia" id="incidencia" placeholder="Buscar Ciudad/Estado" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-lg-0" type="submit"name="accion" value="buscarIncidencia">Buscar</button>
                    </form>
            
 <?php
                    
          echo  '<i class="fas fa-table ">INCIDECIAS</i>
                       
                
                 <div class="card-body d-flex justify-content-center ">
                <table class="table table-secondary " id="datatablesSimple ">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th>Latitud </th>
                            <th>Longitud </th>
                            <th>Ciudad </th>
                            <th>Direccion </th>
                            <th>Descripcion </th>
                            <th>Solucion </th>
                            <th>Estado </th>
                            
                        </tr>
                    </thead>
                    
              
                    <tbody>';
        
                    foreach($incidencias as $incidencia) {
                        echo "<tr>";
                        echo " <td>".$incidencia->getId()."</td>";
                        echo " <td>".$incidencia->getLatitud()."</td>";
                        echo " <td>".$incidencia->getLongitud()."</td>";
                        echo " <td>".$incidencia->getCiudad()."</td>";
                        echo " <td>".$incidencia->getDireccion()."</td>";
                        echo " <td>".$incidencia->getDescripcion()."</td>";
                        echo " <td>".$incidencia->getSolucion()."</td>";
                        echo " <td>".$incidencia->getEstado()."</td>";
               
                       echo "</tr>";
                    }
               
                    echo' </tbody>';
               echo' </table>';
               echo' </div>';
                echo'</main>';

            include "footer.php";
        

    }

    public static function borrarIncidencias($incidencias){

        include "cabecera.php";

        echo'<main class="px-3">

              
            <div class="card-header d-flex justify-content-center ">
                <i class="fas fa-table "> INCIDECIAS</i>
                   
            </div>
             <div class="card-body d-flex justify-content-center ">
            <table class="table table-secondary " id="datatablesSimple ">
                <thead>
                    <tr>
                        <th >ID</th>
                        <th>Latitud </th>
                        <th>Longitud </th>
                        <th>Ciudad </th>
                        <th>Direccion </th>
                        <th>Descripcion </th>
                        <th>Solucion </th>
                        <th>Estado </th>
                        <th>Acciones </th>
                        
                    </tr>
                </thead>
                
          
                <tbody>';
    
                foreach($incidencias as $incidencia) {
                    echo "<tr>";
                    echo " <td>".$incidencia->getId()."</td>";
                    echo " <td>".$incidencia->getLatitud()."</td>";
                    echo " <td>".$incidencia->getLongitud()."</td>";
                    echo " <td>".$incidencia->getCiudad()."</td>";
                    echo " <td>".$incidencia->getDireccion()."</td>";
                    echo " <td>".$incidencia->getDescripcion()."</td>";
                    echo " <td>".$incidencia->getSolucion()."</td>";
                    echo " <td>".$incidencia->getEstado()."</td>";
                    echo "<td>";
                    echo "<a href='index.php?accion=eliminar&id=".$incidencia->getId()."'><button class='btn btn-danger'>X</button>";
                   
                    echo "</td>";
           
                   echo "</tr>";
                }
           
                echo' </tbody>';
           echo' </table>';
           echo' </div>';
            echo'</main>';

        include "footer.php";
    

}


public static function modificarIncidencia($incidencias){

    include "cabecera.php";

    echo'<main class="px-3">

          
        <div class="card-header d-flex justify-content-center ">
            <i class="fas fa-table "> INCIDECIAS</i>
               
        </div>
         <div class="card-body d-flex justify-content-center ">
        <table class="table table-secondary " id="datatablesSimple ">
            <thead>
                <tr>
                    <th >ID</th>
                    <th>Latitud </th>
                    <th>Longitud </th>
                    <th>Ciudad </th>
                    <th>Direccion </th>
                    <th>Descripcion </th>
                    <th>Solucion </th>
                    <th>Estado </th>
                    <th>Acciones </th>
                    
                </tr>
            </thead>
            
      
            <tbody>';

            foreach($incidencias as $incidencia) {
                echo "<tr>";
                echo " <td>".$incidencia->getId()."</td>";
                echo " <td>".$incidencia->getLatitud()."</td>";
                echo " <td>".$incidencia->getLongitud()."</td>";
                echo " <td>".$incidencia->getCiudad()."</td>";
                echo " <td>".$incidencia->getDireccion()."</td>";
                echo " <td>".$incidencia->getDescripcion()."</td>";
                echo " <td>".$incidencia->getSolucion()."</td>";
                echo " <td>".$incidencia->getEstado()."</td>";
                echo "<td>";
                echo "<a href='index.php?accion=modificar&id=".$incidencia->getId()."'><button class='btn btn-warning'>Edit</button>";
               
                echo "</td>";
       
               echo "</tr>";
            }
       
            echo' </tbody>';
       echo' </table>';
       echo' </div>';
        echo'</main>';

    include "footer.php";
    
}

public static function modiform($incidencia){

    include "cabecera.php";

    foreach($incidencia as $incidencia) {

    ?>
                   <div class="container">
          
                   <h2 class="text-primary mt-3 mb-4">MODIFICAR INCIDENCIAS</h2>
                    <br>
                    <p>Latitud : <?= $incidencia->getLatitud() ?></p>
                    <p>Longitud : <?= $incidencia->getLongitud() ?></p>
                    <p>Ciudad : <?= $incidencia->getCiudad() ?></p>
                    <p>Direccion : <?= $incidencia->getDireccion() ?></p>

                    <form action="index.php" method="post" class="mt-2">
                   
                           <div>
                               <label for="solucion">Solucion: </label>
                               <input class="col-6 mt-3" type="text" name="solucion" id="solucion" value="<?= $incidencia->getSolucion() ?>" required />
                           </div>
                           <br/>
                           <div>
                                <label for="destinatario">Estado:</label>
                                <select class="form col-6 text-center mt-3" name="estado" id="estado" aria-label="Default select example">
                                    <option value="<?= $incidencia->getEstado() ?>"><?= $incidencia->getEstado() ?></option>
                                    <option value="Apuntado">Apuntado</option>
                                    <option value="pendiente">En Proceso</option>
                                    <option value="Finalizado">Finalizado</option>
                                </select>
                           </div>
<?php

                           echo '<input type="hidden" name="id" value="' . $incidencia -> getId() . '">';
                           
?>
                            <div class="col-6 text-end mt-3">
                                <button type="submit" class="btn btn-primary" name="accion" value="enviarModificarIncidencia">Enviar</button>
                            </div>
                           
                       </form>
                   </div>
<?php
           }  
}



}

?>
