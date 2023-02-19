<?php
function isArm($num){
    $test=0;
        if($num >0){
            $a =$num%10;
            $test+= $a**3;
            $num1=(int)($num/10);
            $a =$num1%10;
            $test+= $a**3;
            $num1=(int)($num1/10);
            $a =$num1%10;
            $test+= $a**3;
            $num1=(int)($num1/10);
            
           if($test==$num)
            echo"\n it's Armestrong \n";
           else echo "\n It's Not Armestrong \n";

        
        }




}
isArm(153)

?>