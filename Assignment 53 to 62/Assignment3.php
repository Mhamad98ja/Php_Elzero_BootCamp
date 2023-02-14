<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo chunk_split(str_repeat(strtolower($str),$num),$num,$char);

// aaa_aaa_aaa_