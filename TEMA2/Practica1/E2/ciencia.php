<?php
include "cabecera.php";


?>


<main class="container">
<h3 class="mt-3 mb-4">Ciencia</h4>

    <?php
          $libros = array(
            array("isbn"=>"09", "titulo"=> "DIOS-La ciencia-Las pruebas ","autor"=>"OLIVER BONNASSIES
            ,
            MICHEL YVES BOLLORE","categoria"=>"Ciencia","img"=>"./img/c1.jpg",
            "precio"=>17
                    ),
            array("isbn"=>"10","titulo"=> "Planta Sapiens","autor"=>"Paco Calvo","categoria"=>"Ciencia","img"=>"./img/c2.jpg",
            "precio"=>29
                    ),
                    array("isbn"=>"11","titulo"=> "La Recivilizacion","autor"=>"Fernando Valladares","categoria"=>"Ciencia","img"=>"./img/c3.jpg",
            "precio"=>26
                    ),
            array("isbn"=>"12","titulo"=> "¿De que nos sirve ser tan Listos?","autor"=>"Manuel Martin Loeches","categoria"=>"Ciencia","img"=>"./img/c4.jpg",
            "precio"=>10
                    ),
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
                    
             echo '</div>';
    ?>


</main>