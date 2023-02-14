<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
function odd($el){
    if(gettype($el)=="string"){
        $el="";
    }elseif($el %2!=0){
        return $el;
    }else{
        $el=0;
    }
}
echo '<pre>';
print_r(array_values(array_filter($mix,"odd")));
echo '</pre>';