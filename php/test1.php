<?php
error_reporting(0);
include "flag.php";
$KEY = "flag!!!";
$str = $_GET['str'];
if (unserialize($str) === "$KEY")
{
    echo "$flag";
}
else{

	echo "no!!!";
}
show_source(__FILE__);