<?php
require_once 'car.php';

class Mira implements Car
{
    public function run()
    {
       print 'aaaarun';
    }
    public function stop()
    {
       print 'stop';
    }
}
?>               
