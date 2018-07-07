<?php
require 'SuperCls.php';
require 'ISample.php';
class SubCls extends SuperCls implements ISample{
    public function multiplier($n){
        if(ISample::NUM > $n){
 	  $this->val = $n * 2;
	}else {
	  $this->val = $n;
	
	}
     
  }

  public function divider($n){
        if(ISample::NUM < $n){
            $this->val = $n / 2;
	           }else {
           $this->val = $n;
	}
  }
 
}
?>
