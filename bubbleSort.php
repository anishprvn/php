<?php
function bubbleSort($a,$n){
    for ($i=0; $i < $n-1; $i++) { 
        for ($j=0; $j <$n-$i-1 ; $j++) { 
            if ($a[$j]>$a[$j+1]) {
                $temp=$a[$j];
                $a[$j]=$a[$j+1];
                $a[$j+1]=$temp;
            }
        }
    }
    //print_r($a);
    return $a;
}

function bsWord($a,$n){
    for ($i=0; $i < $n-1; $i++) { 
        for ($j=0; $j <$n-$i-1 ; $j++) { 
            if (strcmp($a[$j],$a[$j+1])>0) {
                $temp=$a[$j];
                $a[$j]=$a[$j+1];
                $a[$j+1]=$temp;
            }
        }
    }
    //print_r($a);
    return $a;
}

?>