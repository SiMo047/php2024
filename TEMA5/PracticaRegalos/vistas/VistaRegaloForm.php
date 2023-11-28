<?php

namespace Regalos\vistas;

class VistaRegaloForm{

    public static function form($id){

        echo "<div class='container'";
?>



<form id="formRegalo" action="index.php" method="post">
              
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="nombre" class="col-form-label">Nombre</label>
                  </div>
                  <div class="col-8">
                      <input type="text" id="nombre" name="nombre" value="<?=$id->getNombre()?>" class="form-control" required>
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="destinatario" class="col-form-label">Destinatario</label>
                  </div>
                  <div class="col-8">
                      <input type="text" id="destinatario" name="destinatario" value="<?=$id->getDestinatario()?>"class="form-control" required>
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="precio" class="col-form-label">Precio</label>
                  </div>
                  <div class="col-8">
                      <input type="number" id="precio" name="precio" value="<?=$id->getPrecio()?>"class="form-control" >
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="estado" class="col-form-label">Estado</label>
                  </div>
                  <div class="col-8">
                      <select  id="estado" name="estado" value="<?=$id->getEstado()?>">
                          <option value="pediente">Pendiente</option>
                          <option value="comprado">Comprado</option>
                          <option value="envuelto">Envuelto</option>
                          <option value="entregado">Entegado</option>
                      </select>
                  </div>
              </div>
              <div class="row g-3 align-items-center mb-2">
                  <div class="col-4">
                      <label for="year" class="col-form-label">Year</label>
                  </div>
                  <div class="col-8">
                      <input type="year" id="year" name="year" value="<?=$id->getYear()?>">
                  </div>
              </div>
              <input type="hidden" id="id_usuario" name="id_usuario" value="<?=$id->getId()?>">
              <div class="mb-3 row w-25 float-end">
        <button class='btn btn-success' type="submit" name="accion" value="recibirFormModi">Modificar</button>
    </div>
          </form>       

            

<?php
    }   //continuarrr
}
?>