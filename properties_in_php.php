<?php

class A
{
    public $name01;
    public $age01;

    public $name02;
    public $age02;

    public function setName($name01)
    {
        $show = $this->name01 = $name01;
    }

}

?>


<!-- Display -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// $show = new A;
// $show->setName("Faisal");
// echo $show->name01;

?>



</body>
</html>