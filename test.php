<?php

$file = file_get_contents('data.json');
$list = json_decode($file,TRUE); 
unset($file);
$list[] = [ $_GET['date'], $_GET['num'] ];
file_put_contents('data.json',json_encode($list));