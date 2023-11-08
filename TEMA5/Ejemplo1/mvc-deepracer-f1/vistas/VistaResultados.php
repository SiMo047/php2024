<?php
    namespace DeepRacer\vistas;

    class VistaResultados {

        public static function render($resultados) {

            include "cabeceraPrincipal.php";
            
            echo "<div class='container'>";
            echo "
            
            <table class='table table-dark'>
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Corredor</th>
                        <th>Posicion</th>
                        <th>Tiempo</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>";
    
            foreach($resultados as $resultado) {
                echo "<tr>";
                echo " <td>".$resultado->getNombre_Corredor()"</td>";
                echo " <td>".$resultado->getPosicion()."</td>";
                echo " <td>".$resultado->getTiempo()."</td>";
                echo " <td>".$resultado->getPais()."</td>";
                echo "<td>";
                echo "<a href='index.php?accion=eliminarResultado&id=".$resultado->getId()."'><button class='btn btn-danger'>X</button>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>
            </table>";

            echo "</div>";

            include "piePrincipal.php";

        }


    }