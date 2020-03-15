<?php
spl_autoload_register('myAutoLoader');


function myAutoLoader($classname){
  include 'class/' . str_replace('\\', "/", $classname) . '.class.php';
}
include_once $classname ; 
?>