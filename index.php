<?php
include "class/MyList.php";

$arr=new MyList(10);
$arr->add(10);
$arr->add(9);
$arr->add(5);
$arr->add(3);
$arr->add(15);
$arr->add(13);
$arr->add(18);
$arr->add(19);
$arr->add(19);
$arr->add(19);
$arr->add(19);

$arr->addIndex(10,20);
var_dump($arr);
echo "<br>";

