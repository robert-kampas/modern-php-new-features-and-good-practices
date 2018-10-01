<?php

function incrementNumber($number) {
    return $number + 1;
}

print_r(array_map('incrementNumber', [1,2,3]));

echo '<hr>';

print_r(array_map(function ($number) {
    return $number + 1;
}, [1,2,3]));
