<?php

$date1 = new DateTime('2006-04-12T12:30:00');
$date2 = new DateTime('2006-04-12T10:03:00');

$diff = $date2->diff($date1);

$hours = $diff->h;
$hours = $hours + ($diff->days*24);

echo $hours;
?>