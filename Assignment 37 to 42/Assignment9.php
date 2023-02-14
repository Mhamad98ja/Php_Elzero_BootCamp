<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i=$nums[$help_num];$i<$help_num;$i++){
    echo $names[$i] . "<br>";
}
// Output
// "Sayed"
// "Osama"