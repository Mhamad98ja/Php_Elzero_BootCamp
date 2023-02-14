<?php
echo number_format(round(disk_total_space("C:"))/1024/1024/1024/1024 , 2);
echo "<br>";
echo number_format(round(disk_total_space("D:"))/1024/1024/1024/1024 , 2);
echo "<br>";
