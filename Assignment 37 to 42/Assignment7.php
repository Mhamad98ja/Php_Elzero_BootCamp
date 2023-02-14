<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$nb=0;
$st=0;
foreach($mix as $el){
    if(gettype($el)==="integer"){
        echo $el . "<br>";
        $nb=$nb+1;
    }elseif(gettype($el)==="string"){
        $st=$st+1;
    }
}
echo"$nb Numbers Printed";
echo "<br>";
echo "$st Letters Ignored";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"