
<?php
$a =6;
$b=4;
$c=2;



$d=($b**2)-(4*$a*$c);

    if($d>0) {
        $s1=(-$b+sqrt(($b**2)-4*$a*$C))/(2*$a);
        $s2=(-$b-sqrt(($b**2)-4*$a*$C))/(2*$a);
        echo "La ecuación ".$a."x^2 +".$b."x+".$c."=0 tiene dos soluciones:";
        echo "<br>" ;
        echo "x1= ".$s1." y x2 = ".$s2 ;
    }elseif ($d==0){
    $s=-$b/(2*$a);
    echo"La ecuación ".$a."x^2 +".$b."x+".$c."=0 tiene una solucion";
    }else{
        echo "La ecuación ".$a."x^2 +".$b."x+".$c."=0 no tiene solucion";
    }
   

?>