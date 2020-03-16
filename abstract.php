<?php

abstract class Abs {
    abstract function cnic() ; 
}

class Bank extends Abs {
     function cnic() {
         echo "501236-569896-01" ; 
     }
}



$obj = new Bank ; 
echo $obj -> cnic() ; 





?>