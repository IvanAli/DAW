<?php
    function merge(&$A, $p, $q, $r) {
        $n1 = $q - $p + 1;
        $n2 = $r - $q;
        $L = array();
        $R = array();
        /*$L[$n1 + 1] = 1000000000;
        $R[$n2 + 1] = 1000000000;*/
        for($i = 0; $i < $n1; $i++) array_push($L, $A[$i + $p]);
        for($j = 0; $j < $n2; $j++) array_push($R, $A[$j + $q + 1]);
        array_push($L, 1000000000);
        array_push($R, 1000000000);
        $i = 0; $j = 0;
        for($k = $p; $k <= $r; $k++) {
            if($L[$i] <= $R[$j]) {
                $A[$k] = $L[$i];
                $i = $i + 1;
            }
            else {
                $A[$k] = $R[$j];
                $j = $j + 1;
            }
        }
    }

    function merge_sort(&$A, $p, $r) {
        if($p < $r) {
            $q = ($p + $r) / 2;
            merge_sort($A, $p, $q);
            merge_sort($A, $q + 1, $r);
            merge($A, $p, $q, $r);
        }
    }
    $A = array(6,7,4,2,8,1,3);

 ?>
 <h2>Ordenamiento de un arreglo</h2>
 <p>Arreglo a ordenar:</p> <?php print_r($A) ?>
 <p>
     Arreglo ordenado:
 </p>
 <?php

     $lenA = count($A);
     merge_sort($A, 0, $lenA - 1);
     /*for($i = 0; $i < $lenA; $i++) {
         if($i) echo " ";
         echo $A[$i];
     }*/
     print_r($A);
  ?>
