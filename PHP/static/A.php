<?php
class A {
  public static function testAccess(){
    self::test();
  }

  public static function test() {
    print __CLASS__ .'HELLO PHP!'. '<br>';
  }
}


?>
