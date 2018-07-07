<?php
require_once 'B.php';
class C extends B{
  public $age;

  public function __construct($firstName, $lastName, $age){
    parent::__construct($firstName, $lastName);
    $this->age = $age;
  }

  public function show(){
    print "firstNameプロパティ = {$this->firstName}".'<br>'
	    ."lastNameプロパティ = {$this->lastName}".'<br>'
	    ."ageプロパティ = {$this->age}". '<br>';

  }



}



?>
