<?php
include "cabecera.php";

?>


<main class="container">
  
        <h3 class="mb-3"> PRODUCTOS </h3>

            <?php

            //Creo un array con los productos de compra (para almacenar los datos ) 

            $product = array(
                array("nombre"=> "Jordan SKY","precio"=>120,"cantidad"=>2,
                        "img"=>"./img/zp1.jpg","ivaR"=>0),
                array("nombre"=> "Jordan Purple","precio"=>190,"cantidad"=>1,
                        "img"=>"./img/zp2.jpg","ivaR"=>1),
                array("nombre"=> "Jordan High Blue","precio"=>250,"cantidad"=>1,
                        "img"=>"./img/zp3.jpg","ivaR"=>1),
                array("nombre"=> "Nike Dunk Panda","precio"=>130,"cantidad"=>2,
                        "img"=>"./img/zp4.jpg","ivaR"=>0),


            );


            //Ahora dentro de php escribimos html con echo
            

        echo '<div class="container-fluid row   mt-4 ms-2 ">';

            foreach($product as $linea){
               
                echo '<div class=" ms-4" style="width: 22%;">
                        <img src="'.$linea["img"].'" class="card-img-top rounded-2" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">'.$linea["nombre"].' </h5>
                                <p class="card-text">'.$linea["precio"].'$</p>
                                <div class="d-flex">
                                <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                    </div>'; 


            }
        echo '</div>';
            
            
            
            ?>






    
</main>
