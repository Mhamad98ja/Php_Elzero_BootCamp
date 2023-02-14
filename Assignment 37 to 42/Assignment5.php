<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for($start;$start<count($mix);$start++){
    if($start==0 || $start==3 || $start==4 || $start==5){
        continue;
    }else{
        echo $mix[$start] . "<br>";
    }
}
// Output
// 2
// 3
// 4