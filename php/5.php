<?php
    class test{
        public $a='hacked by ghtwf01';
        public $b='hacked by blckder02';
        public function pt(){
            echo $this->a.'<br />';
        }
        public function __construct(){
            echo '__construct<br />';
        }
        public function __destruct(){
            echo '__construct<br />';
        }
        public function __sleep(){
            echo '__sleep<br />';
            return array('a','b');
        }
        public function __wakeup(){
            echo '__wakeup<br />';
        }
    }
    //创建对象调用__construct
    $object = new test();
    //序列化对象调用__sleep
    $serialize = serialize($object);
    //输出序列化后的字符串
    echo 'serialize: '.$serialize.'<br />';
    //反序列化对象调用__wakeup
    $unserialize=unserialize($serialize);
    //调用pt输出数据
    $unserialize->pt();
    //脚本结束调用__destruct
?>