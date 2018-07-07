<?php
require_once 'AddNumber.php';
class AddNumberSub extends AddNumber{
    private $record;

    public function recorder() {
      $this->record = $this->num;
    }

    public function getRecord(){ 
      return $this->record;
    }

}

?>
