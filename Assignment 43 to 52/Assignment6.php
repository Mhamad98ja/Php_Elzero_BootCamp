<?php
function calculate($one,$two,$type=""){
    switch($type){
        case"a":
            return $one+$two."<br>";
        case"s":
        case"subtract":
            return $one-$two."<br>";
        case"m":
        case"multiply":
            return $one * $two."<br>";
        default:
        return $one+$two."<br>";
    }
}

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200