<?php

namespace Regalos\vistas;

class VistaRegaloForm{

    public static function form($regalo){

        include "cabecera.php";
        echo "
        <div class='container-fluid px-5'>
        <h1 class='mt-4'>Modificar Regalo</h1>";

?>



<form id="formRegalo" action="index.php" method="post">
              
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="nombre" class="col-form-label">Nombre</label>
                  </div>
                  <div class="col-8">
                      <input type="text" id="nombre" name="nombre" value="<?=$regalo->getNombre()?>" class="form-control " required>
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="destinatario" class="col-form-label">Destinatario</label>
                  </div>
                  <div class="col-8">
                      <input type="text" id="destinatario" name="destinatario" value="<?=$regalo->getDestinatario()?>"class="form-control" required>
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="precio" class="col-form-label">Precio</label>
                  </div>
                  <div class="col-8">
                      <input type="number" id="precio" name="precio" value="<?=$regalo->getPrecio()?>"class="form-control" >
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="estado" class="col-form-label">Estado</label>
                  </div>
                  <div class="col-8">
                      <select  id="estado" name="estado" value="<?=$regalo->getEstado()?>">
                          <option value="pendiente" <?= ($regalo->getEstado() == 'pendiente') ? 'selected' : '' ?>>Pendiente</option>
                          <option value="comprado" <?= ($regalo->getEstado() == 'comprado') ? 'selected' : '' ?>>Comprado</option>
                          <option value="envuelto" <?= ($regalo->getEstado() == 'envuelto') ? 'selected' : '' ?>>Envuelto</option>
                          <option value="entregado" <?= ($regalo->getEstado() == 'entregado') ? 'selected' : '' ?>>Entregado</option>
                      </select>
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="years" class="col-form-label">Year</label>
                  </div>
                  <div class="col-8">
                      <input type="years" id="years" name="years" value="<?=$regalo->getYear()?>">
                  </div>
              </div>
              <input type="hidden" name="id" value="<?=$regalo->getId()?>">
              <input type="hidden" name="id_usuario" value="<?=$regalo->getIdUsuario()?>">
              <div class="mb-3 row w-25 float-end">
        <button class='btn btn-success' type="submit" name="accion" value="recibirFormModificar">Modificar</button>
    </div>
          </form>       

            

<?php

        echo"</div>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        include "footer.php";
    }   //continuarrr
}
?>