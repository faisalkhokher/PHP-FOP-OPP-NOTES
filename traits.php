<?php

trait Test {
    function name() {
        echo "Myname" ; 
    }
}

Class A {
    use Test ; 

}

$call = new A; 
echo $call -> name(); 

?>