<?php
$numbers = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100, 121, 144, 169, 196, 225];
function roots($n){
    return (sqrt($n));
}
print_r(array_map("roots", $numbers));