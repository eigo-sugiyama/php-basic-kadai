<?php
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $scoreVar = 'score' . $i;
    $sum += $$scoreVar;
}

$mean = $sum / 10;

echo "合計点: $sum<br>";
echo "平均点: $mean<br>";
?>