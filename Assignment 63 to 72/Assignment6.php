<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars,true.$zero,$char));
echo "</pre>";
