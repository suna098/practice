<?php
require_once 'Customer.php';
class SubCustomer extends Customer {
  public function show($name, $country){
	  print "名前は{$name}です。".'<br>';
	  print "国籍は{$country}です。".'<br>';
  }
}


?>
