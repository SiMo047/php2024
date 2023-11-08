<?php
include "cabecera.php";

?>

<main class="container" >

    <h2 class="mt-3 mb-4">Libros Recientes</h2>


            <?php

                /*Creo un array con los libros (para almacenar los datos ) 
                ISBN, título, autor, categoría, editorial, foto, precio.*/
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
                                /*novela negra*/
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
                                "precio"=>12
                                        ),
                    
    
    
                );

                    /*Aqui escribimos lo que tenemos en el array , utlizo floatval() para interpretar el precio a float*/
                    echo '<div class="container-fluid row   mt-4 ms-2 ">';
                  
                        echo'<h4>Novelas Historicas</h4>';
                        foreach($libros as $linea){
                                if($linea["categoria"]=="Novela Historica"){
                               
                        echo ' <div class="card me-4 mb-4" style="width: 22%;">
                            <img class="card-img-top" src="'.$linea["img"].'" alt="Card image cap">
                            <div class="card-body">
                            <h6 class="card-title">'.$linea["titulo"].'</h5>
                            <p class="card-text">De '.$linea["autor"].'</p>
                            <a href="#" class="btn btn-primary">'.$linea["precio"].'€</a>
                            </div>
                        </div>'; 
                         }
                    }
                                /*---------corregir esto-------------*/
                    echo'<h4>Novelas Negra</h4>';
                    foreach($libros as $linea){
                                if($linea["categoria"]=="Novela Negra"){
                               
                        echo ' <div class="card me-4 mb-4" style="width: 22%;">
                            <img class="card-img-top" src="'.$linea["img"].'" alt="Card image cap">
                            <div class="card-body">
                            <h6 class="card-title">'.$linea["titulo"].'</h5>
                            <p class="card-text">De '.$linea["autor"].'</p>
                            <a href="#" class="btn btn-primary">'.$linea["precio"].'€</a>
                            </div>
                        </div>'; 
                         }
                    }
                
                    echo '</div>';

            ?>









</main>