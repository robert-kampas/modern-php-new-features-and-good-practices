<?php

$handle = fopen('test.txt', 'rb');
stream_filter_append($handle, 'string.toupper');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);

echo '<hr>';

$handle = fopen('php://filter/read=string.toupper/resource=/var/www/modern-php/stream/test.txt', 'rb');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);
