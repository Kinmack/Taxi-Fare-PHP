<?php
$baseFare = 1000;
$CostPerKm = 2000;
$WaitRate = 500;

$distance = 5;
$WaiTime = 10;

$DistFare = $CostPerKm * $distance;
$WaitFare = $WaitRate * $WaiTime;

$Total = $baseFare + $DistFare + $WaitFare;

echo "THE BASE FARE IS: $baseFare UGX <br>";
echo "THE WAITING TIME IS: $WaiTime MINUTES<br>";
echo "THE DISTANCE IS: $distance KM<br>";
echo "THE TOTAL IS: $Total UGX<br>";

if ($distance >= 15) {
    echo "LONG TRIP <br>";
} elseif ($distance >= 10) {
    echo "NORMAL TRIP <br>";
} else {
    echo "SHORT TRIP";
}
?>
