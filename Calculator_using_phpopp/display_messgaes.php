<?php

include('class/calculator.class.php') ; 

?>

<?php

$numone   = $_POST['num1'] ; 
$numtwo   = $_POST['num2'] ; 
$numthree = $_POST['op'] ; 

$call_class = new cal ((int)$numone , (int)$numtwo , $numthree) ; 

echo $call_class -> calculator() ; 

?>