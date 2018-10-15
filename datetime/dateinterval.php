<?php

// Create DateTime instance
$datetime = new DateTime('2014-01-01 14:00:00');

// Create two weeks interval
$interval = new DateInterval('P2W');

// Modify DateTime instance
$datetime->add($interval);
echo $datetime->format('Y-m-d H:i:s'); // 2014-01-15 14:00:00