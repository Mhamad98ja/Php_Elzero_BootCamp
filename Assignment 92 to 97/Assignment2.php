<?php
$date = date_create("2005-10-02");
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get()."<br>";
date_add($date,date_interval_create_from_date_string("15 hours 15 minutes 15 seconde"));
echo date_format($date,"Y, F, l 'dS' G:i:s");

