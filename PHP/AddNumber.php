<?php
class AddNumber{
  protected $num;
  public function add($num){
    $this->num += $num;
  }

  public function getNum(){
    return $this->num;
  }
}

?>
