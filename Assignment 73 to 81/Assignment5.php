<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
echo filter_var($url1,FILTER_VALIDATE_URL)? "A valid URL<br>": "Not a valid URL<br>";
echo filter_var($url2,FILTER_VALIDATE_URL)? "A valid UR<br>L": "Not a valid URL<br>";
echo filter_var($url3,FILTER_VALIDATE_URL)? "A valid URL<br>": "Not a valid URL<br>";
echo filter_var($url4,FILTER_VALIDATE_URL)? "A valid URL<br>": "Not a valid URL<br>";
