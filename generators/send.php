<?php

function numbers() {
    for ($i = 0; $i < 5; ++$i) {
        // get a value from the caller
        $cmd = (yield $i);
        if ($cmd === 'stop') {
            return; // exit the generator
        }
    }
}

$gen = numbers();

foreach ($gen as $v) {
    // we are satisfied
    if ($v == 3) {
        $gen->send('stop');
    }
    echo "{$v}n";
}