<?php
$date ="1990-10-01";
$epoch=time();
date_default_timezone_set("Africa/Cairo");
$diff = (strtotime($date) - strtotime($epoch));
$days=$diff /60 /60 /24 ."<br>";
$years=$diff /60 /60 /24 /365 ."<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years";

