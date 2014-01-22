<?php
namespace hackspace;

class Suma{
private $x;
private $y;

public function contruct__($x,$y){
$this->x=$x;
$this->y=$y;
}
public function ejecutar(){
return $this->x+$this->y;
}
}

