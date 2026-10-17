echo "<?php
\$Base = 1000;
\$Waitime = 0;
\$distance = 14;
\$DistFare = 5000 * \$distance;
\$WaitFare = 500 * \$Waitime;
\$Total = \$Base + \$WaitFare + \$DistFare;
echo \"THE BASE FARE IS: \$Base UGX <br>\";
echo \"THE WAITING TIME IS: \$Waitime MINUTES<br>\";
echo \"THE DISTANCE IS: \$distance KM<br>\";
echo \"THE TOTAL IS: \$Total UGX<br>\";
if (\$distance >= 15) {
    echo \"LONG TRIP <br>\";
} elseif (\$distance >= 10) {
    echo \"NORMAL TRIP <br>\";
} else {
    echo \"SHORT TRIP\";
}
?>" > index.php
