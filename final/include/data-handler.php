<?php
    if ((!isset($_GET['month'])) && (!isset($_GET['year']))) { // If date is not specified, set default values
        $month = 8;
        $year = 2020;
    } else { // If date is set, parse it and set variables $month and $year to the date's value
        $month = $_GET['month'];
        $year = $_GET['year'];
    }

    $monthObj   = DateTime::createFromFormat('!m', $month); // Turns month # into object, '!m' declares it as a month type
    $monthName_3L = $monthObj->format('M'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
    $monthName_Full = $monthObj->format('F'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name

    // Getting the previous month with January conditional logic

    if ($month == 1) {
        $prev_month = 12;
        $prev_year = $year - 1;
    } else {
        $prev_month = $month - 1;
        $prev_year = $year;
    }

    $prev_monthObj   = DateTime::createFromFormat('!m', $prev_month); // Turns month # into object, '!m' declares it as a month type
    $prev_monthName_3L = $prev_monthObj->format('M'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
    $prev_monthName_Full = $prev_monthObj->format('F'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
?>