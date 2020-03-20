<?php

$num1 = 0 ; 
$num2 = 1 ; 

for ($i=0; $i<=10 ; $i++) { 
    # Foboniici
    $result = $num1 + $num2 ; 
    $num1 = $num2 ; 
    $num2 = $result ; 
    echo $result ; 
}


?>