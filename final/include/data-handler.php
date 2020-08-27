<?php
    if ((!isset($_GET['month'])) && (!isset($_GET['year']))) { // If date is not specified, set default values
        $month = 8;
        $year = 2020;
    } else { // If date is set, parse it and set variables $month and $year to the date's value
        $month = $_GET['month'];
        $year = $_GET['year'];
    }

    // Get min date range

    $sql = "SELECT MONTH(date) AS min_month, YEAR(date) AS min_year FROM ride_data ORDER BY date ASC LIMIT 1";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    $min_month = $row['min_month'];
    $min_year = $row['min_year'];

    // Get max date range

    $sql = "SELECT MONTH(date) AS max_month, YEAR(date) AS max_year FROM ride_data ORDER BY date DESC LIMIT 1";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    // Set the min & max variables

    $max_month = $row['max_month'];
    $max_year = $row['max_year'];

    // Check if inputted date is below table data range, if not, set it to minimum range + 1 month

    if ($page_title == 'Year at Glance') {
        if ($month == $min_month && $year == $min_year) { // If under min range
            $prev_change = 1;
            $month = $min_month + $prev_change;
            $year = $min_year;
        } else {
            $prev_change = 0;
        }
    
        // Ensure proper previous month format
    
        if ($month == 1) { // If the inputted month is Jan, ensure correct format by setting prev month 12 and prev year to input year - 1
            $prev_month = 12;
            $prev_year = $year - 1;
        } else { // If the month is not Jan, just subtract 1 month, keep prev year the same
            $prev_month = $month - 1;
            $prev_year = $year;
        }
        
        $prev_monthObj   = DateTime::createFromFormat('!m', $prev_month); // Turns month # into object, '!m' declares it as a month type
        $prev_monthName_3L = $prev_monthObj->format('M'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
        $prev_monthName_Full = $prev_monthObj->format('F'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
    }

    $monthObj   = DateTime::createFromFormat('!m', $month); // Turns month # into object, '!m' declares it as a month type
    $monthName_3L = $monthObj->format('M'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
    $monthName_Full = $monthObj->format('F'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
?>