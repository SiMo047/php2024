<?php

$primera =rand(0,10); 
$segunda =rand(0,$primera); 




$diferencia=$primera-$segunda;
$division = $primera/$segunda;

echo "primer numero ". $primera ."<br>". "segundo numero". $segunda ."<br>" ;
echo "<br> La diferencia es ". $diferencia ."<br>"; 
echo "La division es ". $division;



?>