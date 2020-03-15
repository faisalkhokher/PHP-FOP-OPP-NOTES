<?php


class A
{
    const Name = "Faisal" ; 
    public static $color = "Blue" ; 
    
    public static function contacts(){
        echo "My age is 24th" ; 
    }


}

class B extends A {
    public static $value = "Salary is sstatic 5000" ; 
    const Num  = "03256987" ; 
    public static function show(){
        echo parent::Name ;
        echo "<br/>" ; 
        echo self::Num ; 
        echo "<br/>" ; 
        echo parent::$color ; 
    }
}


                                     // OUTPUT IN HTML // 

echo A::contacts() , "<br/>" ,  A::Name  ; 

echo  B::show()  ; 







?>