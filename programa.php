<?php

echo "Hoje é dia " . date('d F y');
echo " agora são " . date('h:i:s A l');

echo "<br>";

$startTimeStamp = strtotime(date('Y-m-d H:i:s'));
$endTimeStamp = strtotime("2022/11/05");

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);

echo "Faltam " . $numberDays . " dias para o próximo sábado";