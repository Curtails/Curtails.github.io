<?php
    class test{
        public $name="ghtwf01";
        private $age="18";
        protected $sex="man";
        static $b = "bbb";
    }
    $a=new test();
    $a=serialize($a);
    print_r($a);
?>