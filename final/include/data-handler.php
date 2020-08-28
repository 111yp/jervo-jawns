<?php
    if ((!isset($_GET['month'])) && (!isset($_GET['year']))) { // If date is not specified, set default values
        $month = 8;
        $year = 2020;
    } else { // If date is set, parse it and set variables $month and $year to the date's value
        $month = $_GET['month'];
        $year = $_GET['year'];
    }
    
    //note that strtotime returns european date format (dd-mm-yyyy) when you use the dash seperator
    // https://www.php.net/manual/en/function.strtotime.php#100144
    $input_date = date("Y-m", strtotime('01-'.($month).'-'.$year));

    //a test giving the right date
    //echo (date("d m, Y", strtotime("11-12-2010"))."<br>");
    
    // Set min and max date ranges
    
    $sql = "SELECT MIN(date) AS min_date, MAX(date) AS max_date FROM ride_data;";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $min_date = date("Y-m", strtotime($row['min_date']));

    $min_array = explode("-",$min_date);
    $min_month = $min_array[1];
    $min_year = $min_array[0];

    $max_date = date("Y-m", strtotime($row['max_date']));

    $max_array = explode("-",$min_date);
    $max_month = $max_array[1];
    $max_year = $max_array[0];

    // Check the input vs the range
    
    if ($input_date < $min_date) {
        echo 'Too low';
        $month = $min_month;
        $year = $min_year;
    } else if ($input_date > $max_date) {
        echo 'Too High <br>';
        $month = $max_month;
        $year = $max_year;
    } else {
        echo 'Its fine';
    }
    
    // Check if inputted date is below table data range, if not, set it to minimum range + 1 month
    
    $monthObj = DateTime::createFromFormat('!m', $month); // Turns month # into object, '!m' declares it as a month type
    $monthName_3L = $monthObj->format('M'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
    $monthName_Full = $monthObj->format('F'); // Converts object into name, 'M' is the format for a 3 letter month name, 'F' is full name
?>