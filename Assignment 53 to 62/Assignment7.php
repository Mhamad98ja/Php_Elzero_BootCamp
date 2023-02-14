<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
for($i=0;$i<count($chars);$i++){
        if(gettype($chars[$i])=="integer"){
            continue;
        }elseif($i==0){
            echo ucfirst($chars[$i]);
        }else{
            echo strtolower($chars[$i]);
        }
}

// Output
// "Elzero"
