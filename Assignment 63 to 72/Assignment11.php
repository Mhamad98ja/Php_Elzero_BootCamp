<?php
$arr = ["A", "B", "C", "D", "E"];
$sum=0;
for ($i=0;$i<count($arr);$i++){
    if($arr[$i]){
        $el= 1;
    }
    $sum +=$el;
}
echo $sum;
