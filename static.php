<?php

class A 
{
    static $age = 25893 ; 
    static $fullname = "Faisal Javed" ; 
}

function view () 
{
    echo $this -> age ; 
}

class B extends A 
{
    function view () {
        echo $this -> fullname ; 
    }
    
}


// calling 
echo A::$age ; 
echo "<br/> ";
echo B::$fullname ; 


?>


 