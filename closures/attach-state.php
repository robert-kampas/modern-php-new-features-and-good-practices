<?php

function myInfo($name) {
    return function ($info) use ($name) {
      return 'My ' . $info . ' is ' . $name;
    };
}

// Enclose "John" string in closure
$john = myInfo('John');

// Invoke closure
echo $john('name'); // My name is John