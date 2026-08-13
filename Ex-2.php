<?php

echo "Hello Date Functions";
echo"<br>";

// Unix Time Stamp of System
date_default_timezone_set("Asia/Kolkata");
$date1 = date('d-M-Y : h-i-s');
// The Outcome of Date function is always
echo $date1;

$date_1 = new DateTime('2026-7-7');
$date_2 = new DateTime('2023-7-7');

$finalDate = date_diff($date_1, $date_2);
echo "<br>";
echo $finalDate->format('%y');

?>