<?php
// function calculate(int $num_one, int $num_two) :float {
//     return $num_one + $num_two;
// }
function calculate(int $num_one, int $num_two) {
    $num_one=(float)$num_one;
    return $num_one + $num_two;
}
  echo calculate(20, 10); // 30
  echo gettype(calculate(20, 10)); // Double