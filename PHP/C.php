<?php
require_once 'B.php';

class C extends B {
  public function show(){
    print 'Cクラスのshow()メソッドを実行しました。'.'<br>';
    parent::show();
  
  }
}

?>
