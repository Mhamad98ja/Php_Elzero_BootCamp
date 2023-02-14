<?php
function multiply(...$values){
    $multi=1;
    foreach($values as $value){
        if(gettype($value)=="string"){
            $value=1;
        }
        if(gettype($value)=="double"){
            $value=(int)$value;
        }
        $multi=$multi*$value;
    }
    return $multi."<br>";
}

// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000