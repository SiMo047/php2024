<?php
include "cabecera.php";


?>


<main class="container">

    <h3 class="mt-3 mb-4">Novelas Negra</h4>

        <?php
         $libros = array(
            array("isbn"=>"05", "titulo"=> "Holly","autor"=>"Stephen King","categoria"=>"Novela Negra","img"=>"./img/ll1.jpg",
            "precio"=>15
                    ),
            array("isbn"=>"06","titulo"=> "La Babilonia","autor"=>"Martin Gijon","categoria"=>"Novela Negra","img"=>"./img/ll2.jpg",
            "precio"=>21
                    ),
            array("isbn"=>"07","titulo"=> "La Carne Del Cisne","autor"=>"Teresa Cardona","categoria"=>"Novela Negra","img"=>"./img/ll3.jpg",
            "precio"=>18
                    ),
            array("isbn"=>"08","titulo"=> "Pirineo Noir","autor"=>"Maria Perez Heredia","categoria"=>"Novela Negra","img"=>"./img/ll4.jpg",
            "precio"=>12),
                );


         echo '<div class="container-fluid row   mt-4 ms-2 ">';
         
         foreach($libros as $linea){
                     
                    
             echo ' <div class="card me-4 mb-4" style="width: 22%;">
                 <img class="card-img-top w-100 h-150" src="'.$linea["img"].'" alt="Card image cap">
                 <div class="card-body">
                 <h6 class="card-title">'.$linea["titulo"].'</h5>
                 <p class="card-text">De '.$linea["autor"].'</p>
                 <a href="#" class="btn btn-primary">'.$linea["precio"].'€</a>
                 </div>
             </div>'; 
              }
         
         echo'</div>';

        ?>




</main>