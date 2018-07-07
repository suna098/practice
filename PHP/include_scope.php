<?php

function testScope(){
  require_once 'test.php';
  return $scope;
}

print testScope();
print $scope;


?>
