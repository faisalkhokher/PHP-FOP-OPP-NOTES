<?php

class cal
{
    // Properties 
    public $num1 ;
    public $num2 ;
    public $op ;

    // Call iniatalization __contructor and then call cal fun ..... 
    public function __construct(string $one , $two , $three) 
    {
        // Call
        $this -> num1 = $one ; 
        $this -> num2 = $two ; 
        $this -> op   = $three ; 

    }

    // Funtion . . . 
    public function calculator()  {
        switch ($this -> op) {
            case 'add':
               $result = $this -> num1 + $this -> num2 ; 
               return $result ; 
                break;

                case 'sub':
                    $result = $this -> num1 - $this -> num2 ; 
                    return $result ; 
                     break;

                     case 'did':
                        $result = $this -> num1 / $this -> num2 ; 
                        return $result ; 
                         break;

                         case 'mul':
                            $result = $this -> num1 * $this -> num2 ; 
                            return $result ; 
                             break;
            
            default:
                # code...
                echo "Error" ; 
                break;
        }
    }

        
}


?>