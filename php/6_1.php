<?php
class A{
    public $test = "demo";
    function __destruct(){
            echo $this->test;
    }
}
$a = $_GET['value'];
$a_unser = unserialize($a);
?>