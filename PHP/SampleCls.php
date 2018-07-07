<?php
class SampleCls {
	private $values = array();
	private $member;
	private $id;
 	

	public function disp() {
          print '<pre>';
	  print_r($this->values);
	  print '</pre>';
	}

	public function __set($name, $value){
		print "{$name}に{$value}をセットします。".'<br>';
		$this->values[$name] = $value;
	}

	public function __get($name){
		if(!isset($this->values[$name])){
		  print '{$name}は存在しません';
		}else {
	  	  print "{$name}の値を取得します。".'<br>';
	          return $this->values[$name];
		}
	
	}

	public function __isset($name){
	  return isset($this->values[$name]);
	}

	public function __unset($name){
	  unset($this->values[$name]);
	}

}
?>
