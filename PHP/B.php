<?php
require_once 'A.php';
class B extends A {
    public function show(){
      print 'Bクラスのshow()メソッドを実行しました。'. '<br>';
      parent::show();
    
    }
}

?>
