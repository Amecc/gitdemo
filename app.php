<?php
namespace hackspace;
include 'suma.php';
use hackspace\Suma; 

#operacion1 sumar 3, 4 
#operacion2 sumar 5, 8

$suma= new Suma(3,4);
echo $suma->ejecutar();
echo "\n";
$suma=new Suma(5,8); 
echo $suma->ejecutar();
echo "\n";

?>
