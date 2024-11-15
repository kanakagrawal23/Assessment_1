<?php

$details = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $food = htmlspecialchars($_POST['food']);

    date_default_timezone_set('Asia/Kolkata');
    $hours = date("H");
    $greeting = '';

    if ($hours >= 2 && $hours < 12) {
        $greeting = "Morning";
    } elseif ($hours >= 12 && $hours < 17) {
        $greeting = "Afternoon";
    } elseif ($hours >= 17 && $hours < 22) {
        $greeting = "Evening";
    } else {
        $greeting = "Night";
    }
}
include 'Assessment.view.php';
