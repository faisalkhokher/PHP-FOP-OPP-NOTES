<?php

class ClassA {
    public function Test() {
        echo "This is Test class" ; 
    }
    public function Call() {
        echo "This is Call class" ; 
    }
}

class B extends ClassA 
{

   public function Bfun() {
    Echo "CLASS B" ; 
    echo parent::Test(); 
   }
    
}

Class C extends B {
    public function Cfun() {
        echo "CLASS C EXTENDS" ; 
    }
}


$show =  new C  ; 
echo $show -> Test( ); 



?>