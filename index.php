<?php 
  session_start();
  $insert_alert = false;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible"content="IE=edge">
      <meta name="viewport"content="width=device-width,initial-scale=1.0">
      <?php require('./inc/header.php')?>
      <title> Nova Travels - Book your next destination </title>
      <script>
          if ( window.history.replaceState ) {
            window.history.replaceState(null, null, window.locanadaion.href)
          }
      </script>
  </head>
  <body>
    <?php require('./inc/navbar.php') ?>
    <!--Home Section start-->
    <div class="home">
      <?php 
        if($insert_alert) {
          echo " You have successully booked a ticket";
        };
      ?>
      <div class="content">
          <h5>Welcome To Nova Travels</h5>
          <h1>Visit <span class="changecontent"></span></h1>
          <p> Let's Discover your next trip </p>
      </div>
      <div class="w-75 mx-auto book">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> Book a Flight</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Train </button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php require ('./inc/book-form.php') ?>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?php require ('./inc/book-form.php') ?>
          </div>
            <?php
            if(isset($_POST['book-ticket'])) {
                echo "
            ";
            }
            ?>
        </div>
      </div>
    </div>
    <!--Home Section ends-->
    <!-- About Us Section starts-->
    <section class="container w-75 mx-auto py-5" id="about-us">
      <h2> About us </h2>
      <div class="d-flex flex-column flex-md-row justify-content-between">
        <div>
          <p> Novara Travels ofefer the best prices for flights and train tickets to you next destination </p>
        </div>
        <div>
          <h2> Popula destination </h2>
          image lside
          </div>
      </div>
    </section>
    <!-- About Us Section ends-->
    <section id="contact-us" class="container w-75 mx-auto py-5" >
      <h2> Contact us </h2>
      <div class="d-flex flex-column flex-md-row justify-content-between">
        <p>
          We are with you all the way. Contact us for more information
        </p>
        <form>
          <div>
            <span>
              Your Name 
            </span>
            <input type="text" />
          </div>
          <div>
            <span>
              Your Email 
            </span>
            <input type="text" />
          </div>
          <div>
            <span>
              Subject 
            </span>
            <input type="text" />
          </div>
          <div>
            <span>
              Message
            </span>
            <input type="text" />
          </div>
        </form>
      </div>
    
    </section>
    <?php require('./inc/footer.php') ?>
  </body>
  <?php require('./inc/script.php') ?>
</html>