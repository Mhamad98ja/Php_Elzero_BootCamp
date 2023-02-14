<?php
$nums = [1, 2, 3, 4, 5, 6];
for ($i=0; $i<count($nums); $i++) {
    $num[$i] = rand($nums[0],$nums[count($nums)-1]);
    for ($j=0; $j<$i; $j++) {             
        while ($num[$j] == $num[$i]){               
            $num[$i] = rand($nums[0],$nums[count($nums)-1]);           
            $j = 0;             
        }           
    }    
    }       
echo '<pre>';
print_r($num); 
echo '</pre>' ;
