<?php
include "cabecera.php";


?>


<main class="container">
<h3 class="mt-3 mb-4">Novelas Historica</h4>

    <?php
          $libros = array(
            array("isbn"=>"01", "titulo"=> "Yo, Claudio ","autor"=>"Robert Graves","categoria"=>"Novela Historica","img"=>"./img/l1.jpg",
            "precio"=>12
                    ),
            array("isbn"=>"02","titulo"=> "Sinuhé, el egipcio","autor"=>"Mika Waltari","categoria"=>"Novela Historica","img"=>"./img/l2.jpg",
            "precio"=>19
                    ),
                    array("isbn"=>"03","titulo"=> "Memorias de Adriano","autor"=>"Marguerite Yourcenar","categoria"=>"Novela Historica","img"=>"./img/l3.jpg",
            "precio"=>25
                    ),
            array("isbn"=>"04","titulo"=> "Capitán de mar y guerra","autor"=>"Patrick O'Brian","categoria"=>"Novela Historica","img"=>"./img/l4.jpg",
            "precio"=>13
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