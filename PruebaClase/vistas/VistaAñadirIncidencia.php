<?php

namespace Fibra\vistas;


class VistaAñadirIncidencia{

public static function añadirIncidencia($id){

   include "cabecera.php";
  
 ?> 
 <!--Cerramos php para poder trabajar sin echo y con html -->
  <div class="container">
   
  <h4 class="mt-5 mb-4">FORM Añadir Incidencias</h5>
  <form action="index.php" method="post" class="mt-2">
        
        <div>
            <label for="latitud">Latitud:</label><br>
            <input class="col-6 mt-3" type="number" name="latitud" id="latitud"/>
        </div>
        <br/>
        <div>
            <label for="longitud">Longitud:</label><br>
            <input class="col-6 mt-3" type="number" name="longitud" id="longitud"/>
        </div>
        <br/>
        <div>
            <label for="ciudad">Ciudad:</label><br>
            <input class="col-6 mt-3" type="text" name="ciudad" id="ciudad" required />
        </div>
        <br/>
        <div>
            <label for="direccion">Direccion:</label><br>
            <input class="col-6 mt-3" type="text" name="direccion" id="direccion" required />
        </div>
        <br/>
        <div>
            <label for="solucion">Solucion:</label><br>
            <input class="col-6 mt-3" type="text" name="solucion" id="solucion"/>
        </div>
        <br/>
        <div>
            <label for="estado">Estado:</label><br>
            <select class="form col-6 text-center mt-3" name="estado" id="estado" aria-label="Default select example">
                <option value="Apuntado">Apuntado</option>
                <option value="Comprado"selected>En proceso</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>
        <br/>
        <?php
        echo '<input type="hidden" name="id" value=" ' . $id . ' ">';
        ?>
        <div class="mt-3">
           <a href="http://localhost:8080/PruebaClase/index.php?accion=a%C3%B1adirIC&id=1&id2=3"><button type="reset" class="btn btn-primary">Resetear Formularios</button></a> 
            <button type="submit" class="btn btn-primary col-2" name="accion" value="enviarAñadirIncidencia">Añadir</button>
        </div>
        
    </form>














  </div>

<?php
  
   include "footer.php";

}

}

?>