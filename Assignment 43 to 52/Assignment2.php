<?php
function get_arguments(...$args){
    
    foreach($args as $el){
        echo $el ." ";
    }
    echo "<br>";
}

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP