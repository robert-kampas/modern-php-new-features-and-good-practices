<?php

$dateStart = new DateTime();
$dateInterval = DateInterval::createFromDateString('-1 day');
$datePeriod = new DatePeriod($dateStart, $dateInterval, 3);

foreach ($datePeriod as $date) {
    echo $date->format('Y-m-d') . PHP_EOL;
}

/*
2018-10-15
2018-10-14
2018-10-13
2018-10-12
*/