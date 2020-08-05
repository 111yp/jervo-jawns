<!DOCTYPE html>
<html lang="en">
   <?php // Head
      $page_title = 'Year at Glance';
      include_once 'include/head.php'; 
   ?>

   <body>

      <?php // Nav
         $nav_title = 'Ride Data';
         $nav_icon = 'menu_rideData.svg';
         include_once 'include/nav.php';
      ?>

      <main>
         <div class="container">
            <h2>2020 at a glance</h2>
         </div>
         <div class="container ride-data">
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/money.svg" alt="money">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Total spent in 2020</p>
                  <p class="card-data">$688.06</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/car.svg" alt="car">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Total rides taken in 2020</p>
                  <p class="card-data">89 rides</p>
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
                  <img class="card-icon" src="assets/svg/car-building.svg" alt="building">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Average monthly spending</p>
                  <p class="card-data">$57.33</p>
               </div>
            </div>
            <div class="ride-data-card shadow">
               <div class="card-img-area">
                  <img class="card-icon" src="assets/svg/coupon.svg" alt="coupon">
               </div>
               <div class="card-content-area">
                  <p class="card-title">Average monthly rides</p>
                  <p class="card-data">7 Rides</p>
               </div>
            </div>
         </div>
         
         <div class="text-container">
            <p>Rides per month</p>
            <img src="assets/svg/prototype/ridesPerMonth_ridingData.svg">
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