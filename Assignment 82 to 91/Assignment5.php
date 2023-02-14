<?php
    echo basename("Assignment5.php")."<br>";
    echo basename(__FILE__)."<br>";
    echo pathinfo(__FILE__)["basename"]."<br>";
    echo pathinfo(__FILE__,PATHINFO_BASENAME)."<br>";
