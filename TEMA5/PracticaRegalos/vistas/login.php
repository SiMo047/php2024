
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Inicio Sesion GIFT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <!--Action index.php (lleva el formulario al index) (metodo POST para llevar los datos ) -->
  <form action="index.php" method="post">
    <img class="mb-4" src="./vistas/img/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

        <!-- name=Email -->
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required/>
      <label for="floatingInput">Email</label>
    </div>
   
      <!-- name=Password -->
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required/>
      <label for="floatingPassword">Contraseña</label>
    </div>


  
      <!--  submit para enviar // name=accion -->
    <button type="submit" class="w-100 btn btn-lg btn-primary"  name="accion" value="loginUsuario">Iniciar Sesion</button>
   
  </form>
</main>


    
  </body>
</html>
