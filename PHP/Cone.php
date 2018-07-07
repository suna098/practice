<?php
require_once 'DefineMember.php';
require_once 'IFigure.php';


class Cone extends DefineMember implements IFigure {
	public function __construct($radius, $height){
	    $this->radius = $radius;
	    $this->height = $height;
	}

	public function getResult(){
	  $base = pow($this->radius, 2) * self::PI;
	  return $base * $this->height/3;
	}

}
?>
