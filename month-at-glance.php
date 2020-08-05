<!DOCTYPE html>
<html lang="en">
   <?php // Head
      $page_title = 'Month at Glance';
      include_once 'include/head.php';

      include_once 'include/data-handler.php'; // Only for data pages
   ?>

   <body>

      <?php // Nav
         $nav_title = 'Ride Data';
         $nav_icon = 'menu_rideData.svg';
         include_once 'include/nav.php';
      ?>

      <main>
         <div class="container">
            <div class="dropdown shadow">
               <h1>May</h1>
            </div>
            <div class="dropdown shadow">
               <h1>2020</h1>
            </div>
         </div>

         <div class="container">
            <a class="button shadow" href="year-at-glance.php">View 2020 Data</a>
         </div>

         <div class="container">
            <h2>May 2020 at a glance</h2>
         </div>

         <!-- THE DATA -->

         <div class="container ride-data">
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/money.svg" alt="money">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Total spent this month</p>
                  <p class="card-data">$178.32</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/car.svg" alt="car">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Total rides taken this month</p>
                  <p class="card-data">40 rides</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/car-building.svg" alt="building">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Average cost per Ride</p>
                  <p class="card-data">$9.49</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/route.svg" alt="route">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Average distance per Ride</p>
                  <p class="card-data">3.11 mi</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/two-cars.svg" alt="two-cars">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Most common ride type</p>
                  <p class="card-data">Lyft XL</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/coupon.svg" alt="coupon">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Total coupon & promo savings</p>
                  <p class="card-data">$13.98</p>
               </div>
            </div>
         </div>

         <div class="text-container">
            <p>Most common ride type</p>
            <img src="assets/svg/prototype/commonRideType_ridingData.svg">
            <p>Common price ranges</p>
            <img src="assets/svg/prototype/commonPriceRanges_ridingData.svg">
            <p>Frequently visited locations</p>
            <img src="assets/svg/prototype/frequentlyVisited_ridingData.svg">
         </div>
      </main>

   </body>
</html>