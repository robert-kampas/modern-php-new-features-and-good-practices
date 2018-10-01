<?php

$closure = function ($name) {
    return $name;
};

var_dump($closure);

echo '<hr>';

function showName($name) {
    $return = $name;

    var_dump($name);

    return 'My name is' . $return;
}

$name = 'Garry';
echo showName(function ($name) {
    if ($name == 'Garry') {
        return 'John';
    } else {
        return $name;
    }
});

$name = 'Peter';
echo showName(function ($name) {
    if ($name == 'Garry') {
        return 'John';
    } else {
        return $name;
    }
});
