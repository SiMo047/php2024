<?php
include "cabecera.php";

?>

<main class="container">

   <div class="bg-light p-5 mt-5 rounded">
    <h3 class="mb-3"> CARRO DE COMPRA </h3>


        <!--Abrimos php -->

        <?php

          $carro= array(
            array("nombre"=> "Jordan SKY","precio"=>120,"cantidad"=>2,
            "img"=>"./img/zp1.jpg","ivaR"=>0),
            array("nombre"=> "Jordan Purple","precio"=>190,"cantidad"=>1,
            "img"=>"./img/zp2.jpg","ivaR"=>1),
            array("nombre"=> "Jordan High Blue","precio"=>250,"cantidad"=>1,
            "img"=>"./img/zp3.jpg","ivaR"=>1),
             array("nombre"=> "Nike Dunk Panda","precio"=>130,"cantidad"=>2,
            "img"=>"./img/zp4.jpg","ivaR"=>0),
          );  

          //Pintar carro de compra 
          echo '<table>';

          //cabecera de la tabla 
             
            echo '  <thead>';
            echo '    <tr>';
            echo '        <th scope="col" class="col-2">COD PRODUCT</th>';
            echo '        <th scope="col" class="col-2">IMAGEN</th>';
            echo '        <th scope="col" class="col-6">NOMBRE</th>';
            echo '        <th scope="col" class="col-2">PRECIO</th>';
            echo '        <th scope="col" class="col-1">CANTIDAD</th>';
            echo '    </tr>';
            echo '  </thead>';

            //Cuerpo de la tabla(contenido)
            echo '<tbody>';
          //Variables
            $num=1;
            $totalConIva=0; 
            $totalSinIva=0;
           
            foreach($carro as $linea){
                echo '  <tr>
                            <th scope="row">'.$num++.'</th>
                            <td><img src="'.$linea["img"].'" class="img-thumbnail" width="80px"></td>
                            <td>'.$linea["nombre"].'</td>
                            <td>'.$linea["precio"].'€</td>
                            <td>'.$linea["cantidad"].'</td>
                        </tr>';
                    //aqui se calcula el total sin iva
                $totalSinIva+=$linea["precio"]*$linea["cantidad"];
                    // aqui se calcula el total con iva 
                    if ($linea["ivaR"]==0){
                        $totalConIva += ($linea["precio"] * 1.08) * $linea["cantidad"];
                    } else {
                        $totalConIva += ($linea["precio"] * 1.21) * $linea["cantidad"];
                    }
            }
            echo '</tbody>';

            //tabla del total 

            echo '<tfoot>';
            echo '    <td scope="col" class="col-8 fw-bold" colspan="3">Total:</td>';
            echo '    <td scope="col" class="col-4" colspan="2"><span class="fw-bold">'.$totalConIva.'€</span><span class="p-3">Sin Iva: '.$totalSinIva.'€</span></td>';
            echo '</tfoot>';

            echo '</table>';

        ?>
    </div>
                <br><br>
</main>
