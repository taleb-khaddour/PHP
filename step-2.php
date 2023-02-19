<?php

function greaterFn($num){
    if($num <30){
        if ($num <20){
            if ($num <10)
                echo $num . "  is greater than 10 \n";
                
                else  echo $num . "  is less than 10 \n";
                
            }
            else echo $num ."  is greater than 20 \n";
           

    }
    else echo $num . " is greater than 30 \n";
    
    return 'string';
  }
  greaterFn(40); // 40 is greater than 30
  greaterFn(21); // 21 is greater than 20
  greaterFn(12); // 12 is greater than 10

  greaterFn(8);  // 8 is less than 10

?>