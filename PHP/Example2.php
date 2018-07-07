<?php
class Example2{
  public $num1;
  public $num2;
  public $str;

  public function __construct($str){
    $this->str = $str;
  }

  public function __destruct(){
    print "インスタンスが破棄されました。";
  }
}

?>
