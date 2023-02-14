<?php
$chars = ["A", "B", "C"];
$added_char=["D"];

//Methode 1:
//==========
array_push($chars,"D");
echo '<pre>';
print_r($chars);
echo '</pre>';

//Methode 2:
//==========
$chars[]="D";
echo '<pre>';
print_r($chars);
echo '</pre>';

//Methode 3:
//==========
$chars[count($chars)]="D";
echo '<pre>';
print_r($chars);
echo '</pre>';

//Methode 4:
//==========
echo '<pre>';
print_r(array_merge($chars,$added_char));
echo '</pre>';
