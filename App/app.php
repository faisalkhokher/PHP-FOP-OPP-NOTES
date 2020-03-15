<?php
include('class/logic.class.php') ; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- <script type='text/javascript'>
  if(history.replaceState) history.replaceState({}, "", "/");
</script>  -->

<body>
<?php


// ! values passing in Class
// ! Reuse code 

$c1 = new A('faisal' , '03025599') ; 
$c2 = new A('javed' , '000000') ; 
echo $c1 -> contects() ; 
echo $c2 -> contects() ; 

?>
</body>
</html>