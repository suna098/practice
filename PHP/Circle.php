<?php
require_once 'DefineMember.php';
require_once 'IFigure.php';

class Circle extends DefineMember implements IFigure{
  public function __construct($radius){
    $this->radius = $radius;
  }

  public function getResult(){
    return pow($this->radius, 2) * self::PI;
  }
}
?>
