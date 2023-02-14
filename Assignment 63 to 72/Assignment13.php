<?php
$nums = [10, 100, -20, 50, 30];
$max=0;
foreach($nums as $num){
    if($num > $max ){
        $max = $num;
    }
}
echo $max;