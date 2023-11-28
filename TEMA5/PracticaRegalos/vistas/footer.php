
 
                
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                          
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="addregalo" tabindex="-1" aria-labelledby="addregalolabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addregalolabel">Nuevo Regalo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        
            <form id="formRegalo" action="index.php" method="post">
              
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="nombre" class="col-form-label">Nombre</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="destinatario" class="col-form-label">Destinatario</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="destinatario" name="destinatario" class="form-control" required>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="precio" class="col-form-label">Precio</label>
                    </div>
                    <div class="col-8">
                        <input type="number" id="precio" name="precio" class="form-control" >
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="estado" class="col-form-label">Estado</label>
                    </div>
                    <div class="col-8">
                        <select  id="estado" name="estado">
                            <option value="pediente">Pendiente</option>
                            <option value="comprado">Comprado</option>
                            <option value="envuelto">Envuelto</option>
                            <option value="entregado">Entegado</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="years" class="col-form-label">Year</label>
                    </div>
                    <div class="col-8">
                        <input type="years" id="years" name="years">
                    </div>
                </div>
                <input type="hidden" id="id_usuario" name="id_usuario" value="<?=$usuario->getId()?>">
            </form>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" name="accion" value="nuevoRegalo" form="formRegalo" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
