<?php
    if ((!isset($_GET['month'])) && (!isset($_GET['year']))) { // If date is not specified, set default values
        $month = 8;
        $year = 2020;
    } else { // If date is set, parse it and set variables $month and $year to the date's value
        $month = $_GET['month'];
        $year = $_GET['year'];
    }
    
    $input_date = date("Y-n", strtotime('0-'.($month+1).'-'.$year));
    
    // Set min and max date ranges
    
    $sql = "SELECT MIN(date) AS min_date, MAX(date) AS max_date FROM ride_data;";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $min_date = date("Y-n", strtotime($row['min_date']));
    $max_date = date("Y-n", strtotime($row['max_date']));
    
    echo 'Range = '.$min_date.' thru '.$max_date.'<br>';
    echo 'Input = '.$input_date.'<br>';

    // Check the input vs the range
    
    if ($input_date < $min_date) {
        echo 'Too low';
    } else if ($input_date > $min_date) {
        echo 'Too High';
    } else {
        echo 'Its fine';
    }
    
    // Check if inputted date is below table data range, if not, set it to minimum range + 1 month
    
    $monthObj = DateTime::createFromFormat('!m', $month); // Turns month # into object, '!m' declares it as a month type
    $monthName_3L = $monthObj->format('M'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
    $monthName_Full = $monthObj->format('F'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
?>