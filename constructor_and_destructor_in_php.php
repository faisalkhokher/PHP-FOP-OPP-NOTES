<?php

// class A {

//     private $name ; 
//     private $num  ; 

//     // initialize 

//     function __construct($client_name , $client_num)
//     {
//         $this -> name = $client_name ; 
//         $this -> num = $client_num ; 
//     }

//     // Call

//    public function contects(){
//         echo "Name is". $this -> name  ; 
//         echo "<br/>" ; 
//         echo "Num is". $this -> num  ; 
//     }


// }

// // ! values passing in Class
// // ! Reuse code 

// $c1 = new A('faisal' , '03025599') ; 
// $c2 = new A('javed' , '000000') ; 
// echo $c1 -> contects() ; 
// echo $c2 -> contects() ; 


class A {
    function __construct()
    {
        echo "My name is faisal" ; 
    }

}

$call = new A ; 

?>