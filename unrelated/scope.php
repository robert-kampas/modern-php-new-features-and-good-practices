<?php

//$a = 1;
//$b = 2;
//
//function Sum()
//{
//    global $a, $b;
//
//    $b = $a + $b;
//}
//
//Sum();
//
//echo $b;

//$a = 1;
//$b = 2;
//
//function Sum()
//{
//    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
//}
//
//Sum();
//
//echo $b;

//function test()
//{
//    $a = 0;
//    echo $a;
//    $a++;
//}
//
//test();

//function test()
//{
//    static $a = 0;
//    echo $a;
//    $a++;
//}
//
//test();
//test();
//test();
//test();
//test();

//function test()
//{
//    static $count = 0;
//
//    $count++;
//    echo $count;
//    if ($count < 10) {
//        test();
//    }
//    $count--;
//}
//
//echo test();

function foo(){
    static $int = 0;          // correct
    static $int = 1+2;        // correct (as of PHP 5.6)
    static $int = sqrt(121);  // wrong  (as it is a function)

    $int++;
    echo $int;
}