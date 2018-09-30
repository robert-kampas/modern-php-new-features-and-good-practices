<?php

//function getRange ($max = 10) {
//    $array = [];
//
//    for ($i = 1; $i < $max; $i++) {
//        $array[] = $i;
//    }
//
//    return $array;
//}

function getRange ($max = 10) {
    for ($i = 1; $i <= $max; $i++) {
        yield $i;
    }
}

echo '<pre>';
foreach (getRange(3) as $range) {
    echo $range, PHP_EOL;
}


