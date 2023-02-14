<?php
$nums = [11, 2, 10, 7, 20, 50];
$sum=0;
for ($i=0;$i<count($nums);$i++){
    $sum+=$nums[$i];
}
echo $sum;