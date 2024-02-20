<?php
    $day = "sunday";
    $reslut = null;
    switch ($day) { 
        case "monday":
        case "wednesday":
            $reslut = "It's the beginning of the week!";
            break;
        case "friday":
            $reslut = "TGIF! it's Friday!";
            break;
        case "sunday":
            $reslut = "Enjoy your weekend!";
            break;
        default:
            $reslut = "It's a regular day.";
            break;
    }
    echo "$day =>". $reslut ."";
?>