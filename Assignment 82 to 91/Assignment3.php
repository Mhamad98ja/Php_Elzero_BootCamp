<?php
mkdir("Programming/PHP",0711,TRUE);
if(file_exists("Programming/PHP")){
    rmdir("Programming/PHP");
    echo "Directory Programming/PHP Removed <br>";
}if(file_exists("Programming")){
    echo rmdir("Programming");
    echo "Directory Programming Removed <br>";
}