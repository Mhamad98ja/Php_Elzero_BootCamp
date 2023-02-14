<?php
$num_one = -1;
$num_two = 2.5;
$num_two=(int)$num_two;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[$num_two]=$let_two;
$str[$num_one]=$let_one;

echo $str; // Elzero