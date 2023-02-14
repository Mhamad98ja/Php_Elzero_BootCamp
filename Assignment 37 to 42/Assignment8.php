<?php
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $odd){
    if($odd %2==0){
        echo $odd/2 ."<br>";
    }
}
// Output
// 6
// 10
// 15