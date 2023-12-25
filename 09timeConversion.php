<?php
//converter am/pm em 24 horas.

function timeConversion($s) {
    $completeHour = ' ';
    $isAmOrPm = mb_substr($s, -2);
    $isAmOrPm = mb_strtolower($isAmOrPm);
    $hour = intval(mb_substr($s, 0, 2)); 
    $restOfTheHour = mb_substr($s, 2, 6);

    if ($isAmOrPm == 'pm') {
        if ($hour != 12) {
            $hour += 12;
        }
    } elseif ($isAmOrPm == 'am' && $hour == 12) {
        $hour = 0; 
    }

    
    $completeHour = sprintf("%02d%s", $hour, $restOfTheHour);

    return $completeHour;
}


echo  timeConversion("01:05:45AM");