<?php

$handle = fopen('ssh2.tunnel://root@46.101.0.70:22/var/www/ironleg.net/pihole/tumblr.txt', 'rb') or die('Cannot open the file.');

while (feof($handle) !== true) {
    echo fgets($handle);
}

fclose($handle);
