<?php 
    $str = 'O:4:"test":2:{s:4:"name";s:7:"ghtwf01";s:3:"age";s:2:"18";}';
    //$data = urldecode($str);
    $obj = unserialize($str);

    var_dump($obj);
 ?>

