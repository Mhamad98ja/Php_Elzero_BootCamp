<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
echo "<pre>";
print_r(array_reverse(array_flip(array_map(fn($el)=>strtolower($el),$friends))));
echo "</pre>";
