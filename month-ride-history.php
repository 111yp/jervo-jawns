<!DOCTYPE html>
<html lang="en">
   <?php // Head
      $page_title = 'Month Ride History';
      include_once 'include/head.php';

      include_once 'include/data-handler.php'; // Only for data pages
   ?>

   <body>
      <?php // Nav
         $nav_title = 'Ride History';
         $nav_icon = 'menu_rideHistory.svg';
         include_once 'include/nav.php';
      ?>

      <main>
         <div class="container">
            <div class="dropdown shadow">
               <h1><?php echo $monthRangeName; ?></h1>
            </div>
            <div class="dropdown shadow">
               <h1><?php echo $year; ?></h1>
            </div>
         </div>

         <div class="container">
            <a class="button shadow" href="month-at-glance.php">View Ride Data</a>
         </div>

         <div class="container">
            <h2><?php echo $monthRangeName.' '.$year; ?> Ride History</h2>
            <a class="export shadow" href="">Export</a>
         </div>

         <!-- THE DATA -->

         <?php
            $sql =
               "SELECT * FROM ride_data
               WHERE MONTH(date) = $month AND YEAR(date) = $year
               ORDER BY date DESC LIMIT 3;";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                  $orig_date = $row['date'];
                  $new_date = date("m/d/y", strtotime($orig_date));
         ?>

         <div class="container ride-history">
            <div class="ride-history-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/img/driver_profile_pictures/<?php echo $row['driver_img']; ?>" alt="<?php echo $row['driver']; ?>">
                  <p class="driver-name"><?php echo $row['driver']; ?></p>
               </div>
               <div class="card-mid-area">
                  <div class="card-mid-top">
                     <p class="card-title"><?php echo $new_date.' | '.$row['time']; ?></p>
                     <p class="card-subtitle"><?php echo $row['distance'].'mi | '.$row['duration'].'mins'; ?></p>
                  </div>
                  <div class="card-mid-btm">
                     <div class="location-icons">
                        <img class="location-a-b" src="assets/svg/prototype/ride-a-b.svg" alt="Ride AB">
                     </div>
                     <div class="locations">
                        <p class="card-pickup"><?php echo $row['pickup']; ?></p>
                        <p class="card-destination"><?php echo $row['destination_address']; ?></p>
                     </div>
                  </div>
               </div>
               <div class="card-end-area">
                  <p class="card-price"><?php echo '$'.$row['price']; ?></p>
                  <img class="card-view-btn" src="assets/svg/back.svg" alt="View Btn">
               </div>
            </div>
         </div>

         <?php }} else { echo 'No data to display!'; } ?>

      </main>

   </body>
</html>