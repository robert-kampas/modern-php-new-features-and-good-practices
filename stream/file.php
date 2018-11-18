<?php

$handle = fopen('file://./hosts.txt', 'rb');
//$handle = fopen('file:///var/www/modern-php/stream/hosts.txt', 'rb') or die('Cannot open the file.');

$i = 0;
while (feof($handle) !== true) {
	echo fgets($handle);
	$i++;
	if ($i > 50) {die();}
}

fclose($handle);
