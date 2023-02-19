<?php

function swap($a ,$b){
    $c=$a;
    $a=$b;
    $b=$c;

    echo "swapping  First variable =  " . $a . " \n second variable = " . $b . " \n";

}
$var1 = 32;
$var2 = 45;

swap($var1 ,$var2 );


?>