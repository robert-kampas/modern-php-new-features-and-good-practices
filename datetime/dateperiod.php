<?php

$start = new DateTime();
$interval = new DateInterval('P2W');
$period = new DatePeriod($start, $interval, 3, DatePeriod::EXCLUDE_START_DATE);

foreach ($period as $nextDateTime) {
    echo $nextDateTime->format('Y-m-d H:i:s'), PHP_EOL;
}

/*
2018-10-29 15:05:40
2018-11-12 15:05:40
2018-11-26 15:05:40
*/