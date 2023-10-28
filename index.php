<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="preconnect" href="https://fonts.gstatic.com">';
echo '<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">';
echo '<link rel="stylesheet" href="style.css">';
echo '<title>Clock</title>';
echo '</head>';
echo '<body>';
echo '<section class="container">';
echo '<div id="clock"></div>';
echo '<input onchange="setAlarmTime(this.value)" name="alarmTime" type="datetime-local">';
echo '<div class="controls">';
echo '<button onclick="setAlarm()" class="button set-alarm">Set alarm</button>';
echo '<button onclick="clearAlarm()" class="button clear-alarm">Clear alarm</button>';
echo '</div>';
echo '</section>';
echo '<script src="index.js"></script>';
echo '</body>';
echo '</html>';
?>