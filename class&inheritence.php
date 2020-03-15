<?php

class A {
    // Method=> Funs  and properties => Var 
    private $num  = "03025687" ; 
    public $name  = "Faisal" ; 

    // function Names() {
    //   $var =   $this -> num ;
    //   return $var ; 
    // }
}

Class  B extEnds A{
    function contacts() {
        $name = $this -> name; 
        return $name ; 
    }
}

function Names() {
    $name = "YOYO" ; 
    return $name ; 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$show  = new B ; 
echo $show -> contacts() ; 

?>
</body>
</html>