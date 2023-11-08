<?php
    session_start();

    if (!isset($_SESSION['project'])) {
        $_SESSION['project'] = array();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CLOUD</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Logo -->
            <a class="navbar-brand ps-3" href="index.html">CLOUD</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Barra Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Barra  LOG Y LOG OUT-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="register.html">Registrarse</a></li>
                        <li><a class="dropdown-item" href="login.html">Iniciar Sesion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
       
       
       
       
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        
                        <!--Menu izquierdo-->
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">INTERFAZ</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Proyectos
                            </a>
                            <div class="sb-sidenav-menu-heading">Opciones</div>
                           
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Editar Proyectos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" data-bs-toggle="modal" data-bs-target="#addProducto" aria-expanded="false" aria-controls="pagesCollapseAuth"  href="#">
                                        Añadir Proyectos
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                
                                    <a class="nav-link collapsed"  data-bs-toggle="modal" data-bs-target="#borraProducto" aria-expanded="false" aria-controls="pagesCollapseError" href="#">
                                        Borrar Proyectos
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                  
                                </nav>
                            </div>
                       
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logueado como:</div>
                        Nombre de usuario
                    </div>
                </nav>
            </div>

            <!--Centro-->

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Proyectos</h1>
                        
                       
                       
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               PROYECTOS
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Dias</th>
                                            <th>Porcentaje</th>
                                            <th>Importancia</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Dias</th>
                                            <th>Porcentaje</th>
                                            <th>Importancia</th>
                                        </tr>
                                    </tfoot>
                                    <tbody> <!--Aqui pintaremos los datos introducidos del modal -->
                                        <?php
                                            foreach($_SESSION['proyectos'] as $proyecto) {
                                                echo "<tr>";
                                                echo "  <td>".$proyecto['nombre']."</td>";
                                                echo "  <td>".$proyecto['fechaI']."</td>";
                                                echo "  <td>".$proyecto['fechaF']."</td>";
                                                echo "  <td>".$proyecto['dias']."</td>";
                                                echo "  <td>".$proyecto['porcentaje']."</td>";
                                                echo "  <td>".$proyecto['importancia']."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CLOUDID 2023</div>
                            <div>
                                <a href="#">Privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<!-- Modal para AÑADIR PROYECTOS-->
<div class="modal fade" id="addProducto" tabindex="-1" aria-labelledby="addProdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProdLabel">Nuevo Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <p>
            <form id="formProyecto" action="controlador.php" method="POST">
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
                        <label for="fechaI" class="col-form-label">Fecha de Inicio</label>
                    </div>
                    <div class="col-8">
                        <input type="date" id="fechaI" name="fechaI" class="form-control" required>
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="fechaF" class="col-form-label">Fecha de Fin</label>
                    </div>
                    <div class="col-8">
                        <input type="date" id="fechaF" name="fechaF" class="form-control" >
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="porcentaje" class="col-form-label">% Realizado</label>
                    </div>
                    <div class="col-8">
                        <input type="number" id="porcentaje" name="porcentaje" class="form-control" min="1" max="100" placeholder="(1-100)">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-4">
                        <label for="importancia" class="col-form-label">Importancia (1 - 5) </label>
                    </div>
                    <div class="col-8">
                        <input type="range" id="importancia" name="importancia" class="form-control" min="1" max="5" required>
                    </div>
                </div>
            </form>
        </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" name="formProyecto" form="formProyecto" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>


<!--Modal para borrar -->

<div class="modal fade" id="borraProducto" tabindex="-1" aria-labelledby="addProdLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProdLabel">Borrar Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                           
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Proyecto</th>
                                            <th>Porcentaje</th>
                                            <th>Importancia</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody> <!--Aqui pintaremos los datos introducidos del modal -->
                                        <?php
                                            foreach($_SESSION['proyectos'] as $proyecto) {
                                                echo "<tr>";
                                                echo "  <td>".$proyecto['nombre']."</td>";
                                                echo "  <td>".$proyecto['porcentaje']."</td>";
                                                echo "  <td>".$proyecto['importancia']."</td>";
                                                echo "<td><a href='controlador.php?accion=borrarProyecto&nombreProyecto=".$proyecto['nombre']."'><button class='btn btn-danger'>X</button></a></td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                       
                                    </tbody>
                                </table>
                           
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
