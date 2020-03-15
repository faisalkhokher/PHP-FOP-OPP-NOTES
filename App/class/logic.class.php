<?php


class A {

    private $name ; 
    private $num  ; 

    // initialize 

    function __construct($client_name , $client_num)
    {
        $this -> name = $client_name ; 
        $this -> num = $client_num ; 
    }

    // Call

   public function contects(){
        echo "Name is". $this -> name  ; 
        echo "<br/>" ; 
        echo "Num is". $this -> num  ; 
    }


}


?>