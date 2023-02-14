<?php
function sum_all(...$numbers){
    $sum=0;
    foreach($numbers as $numb){
        if($numb==5){
            continue;
        }
        if($numb==10){
            $numb=20;
            $numb=$numb;
        }
        $sum+=$numb;
    }
    return $sum."<br>";
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40