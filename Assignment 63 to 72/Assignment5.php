<?php
$nums = [5, 10, 20, 5, 30, 40];
echo array_reduce(array_filter($nums,"check"),fn($carry,$item)=>$carry+$item);
function check($el){
        return  $el>5;
    }