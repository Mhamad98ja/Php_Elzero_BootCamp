<?php
$greet = function ($msg){
    return $msg;
};
$greet=fn($msg)=>"$msg";

// Needed Output
echo $greet("Greetings"); // Greetings