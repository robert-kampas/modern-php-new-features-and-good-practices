<?php

function getRange ($max = 10) {
    for ($i = 1; $i <= $max; $i++) {
        yield 'number' . $i => $i;
    }
}

foreach (getRange(3) as $key => $value) {
    echo $key . '=>' . $value, PHP_EOL;
}