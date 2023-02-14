<?php
$fileSize= filesize("C:/Users/10User/Pictures/programming-wallpaper.jpg");
echo "Size In Megabyte Is ". number_format($fileSize/1024/1024 , 2);
echo "<br>";
echo "Size In Kilobyte Is ". number_format($fileSize/1024 , 2);

