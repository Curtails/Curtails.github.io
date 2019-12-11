<?php
    class test{
        public $name="ghtwf01";
        public $age="18";
    }
    $a=new test();
    $a=serialize($a);
    print_r($a);
?>