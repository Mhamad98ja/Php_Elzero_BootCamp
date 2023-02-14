<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_combine(array_map(fn($el)=>strtolower($el),$codes),$means));
echo '</pre>';