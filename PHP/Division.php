<?php
class Division{
  public static function divider($a, $b) {
    if ($b === 0){
      throw new Exception('0で除算することは出来ません。');
    }

    return $a /  $b;
  }

}
