<?php
    class A{
        public $test="hacked";
    }
    $b= new A();
    $result=serialize($b);
    print_r($result);
?>