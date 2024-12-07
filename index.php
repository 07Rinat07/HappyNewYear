<?php
$currentDate = date('m.d', time());
$currentDateArray = explode('.', $currentDate); 

$currentMounth = $currentDateArray[0];
$currentDay = $currentDateArray[1];

//$currentMounth = 12;
//$currentDay = 24;

if ($currentMounth == 12 && $currentDay >= 24) {
    include 'online_store.php';
} else {
   include 'timer.php';
}