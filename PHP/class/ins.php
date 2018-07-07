<?php

class Data {
  protected $first_name;
  protected $last_name;
}

interface GetName{
  public function getName();
}

class User extends Data implements Getname{

  public function __construct($first, $last){
    $this->firstname = $first; 
    $this->lastname  = $last; 
  }

  public function getName(){
    $fn = $this->firstname;
    $ln = $this->lastname;
    $name = $fn.$ln;
    return $name;
  }
}

$usr[] = new User('砂川', '昇吾');
$usr[] = new User('斎藤', 'ヒカル');
print '<br>';
foreach ($usr as $f){
  if ($f instanceof GetName){
    print $f->getName();
    print '<br>';
  }
}

?>
