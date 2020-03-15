<?php

// interface Payment {
//     public function paynow() ; 
// }

class Card
{
    public function paynow() {
        echo  "Hellow" ; 
    }
}


$show = new Card; 
echo  $show  ->  paynow() ; 

?>