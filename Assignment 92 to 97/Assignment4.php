<?php
$date =date_create("1990-10-01");
$epoch=date_create("1970-01-01");
date_default_timezone_set("Africa/Cairo");
$diff = date_diff($date,$epoch);
$days=$diff->days ."<br>";
$years=$diff->y;
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years <br>";


