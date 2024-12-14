<?php
session_start();
// var_dump($_SESSION);
{
    ?>
    <script>
        alert('anda belum login. login terlebih dahulu')window.location='login.php'
    </script>
    <?php

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    
    <title>Online Ticket Booking</title>
    <style>
      /* Custom styles for the background and layout */
     body {
  background-image: url("https://png.pngtree.com/background/20210710/original/pngtree-bar-party-poster-background-picture-image_1033944.jpg");
  background-size: 110rem 67rem;
  background-repeat: no-repeat;
  background-position: center;
}


      
      .card {
        background:#06b6d4;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
      }

      .card-title {
        color: #007bff;
        font-weight: bold;
      }

      .card-body {
        background-color: #86efac;
        border-radius: 10px;
      }

      .card-text {
        color: #f0ffff;
      }

      .modal-content {
        border-radius: 10px;
      }

      .modal-header {
        background-color: #8b0000;
        color: yellow;
      }

      .modal-body {
        padding: 2rem;
      }

      .ticket-form input, .ticket-form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 1rem;
        border-radius: 5px;
        border: 1px solid #ddd;
      }

      .ticket-form .btn {
        background-color: #007bff;
        color: black;
        width: 100%;
        border-radius: 5px;
      }

      .ticket-form .btn:hover {
        background-color: #fff8dc;
      }

      .event-img {
        border-radius: 10px;
        height: 180px;
        object-fit: cover;
      }

      .footer {
        background-color: #7fff00;
        color: white;
        padding: 1rem 0;
        text-align: center;
      }
    </style>
  </head>
  <body>

    <!-- Events Section -->
    <div class="container mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
        <!-- Event 1 -->
        <div class="col-mb-3">
          <div class="card">
            <img src="https://s3.amazonaws.com/venuesnow.com/wp-content/uploads/2024/06/01073653/Providence-Park-Rendering-Concert-Crop.jpg" class="card-img-top event-img" alt="Event 1">
            <div class="card-body">
              <h5 class="card-title">Concert in the Park</h5>
              <p class="card-text">Join us for a live concert in the park. Enjoy the music, food, and great company.</p>
            </div>
          </div>
        </div>

        <!-- Event 2 -->
        <div class="col-mb-3">
          <div class="card">
            <img src="https://vineyardathershey.com/wp-content/uploads/2023/10/11599_image.jpg" class="card-img-top event-img" alt="Event 2">
            <div class="card-body">
              <h5 class="card-title">Comedy Night</h5>
              <p class="card-text">Laugh out loud with our best comedians. A fun evening for everyone!</p>
            </div>
          </div>
        </div>

        <!-- Event 3 -->
        <div class="col-mb-3">
          <div class="card">
            <img src="https://kolahal.org/wp-content/uploads/2020/12/time-best-of-culture-2019-theater-slave-play.jpg" class="card-img-top event-img" alt="Event 3">
            <div class="card-body">
              <h5 class="card-title">Theater Play</h5>
              <p class="card-text">An amazing performance by a talented theater group. Don't miss it!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- event 4  -->
      <div class="col">
          <div class="card">
            <img src="https://t4.ftcdn.net/jpg/07/85/67/75/360_F_785677574_vHt5YpKpU1cepWIztIIdKHH4wLGiWUiD.jpg" class="card-img-top event-img" alt="Event 3">
            <div class="card-body">
              <h5 class="card-title">Fight Show</h5>
              <p class="card-text">An amazing performance by a talented theater group. Don't miss it!</p>
            </div>
          </div>
        </div>
        <!-- event 5 -->
        <div class="col">
          <div class="card">
            <img src="https://radarbanyumas.disway.id/upload/2021/11/5d45e7d31c989.jpg" class="card-img-top event-img" alt="Event 3">
            <div class="card-body">
              <h5 class="card-title">Culture Events</h5>
              <p class="card-text">An amazing performance by a talented theater group. Don't miss it!</p>
            </div>
          </div>
        </div>
        <!-- event 6 -->
        <div class="col">
          <div class="card">
            <img src="https://static01.nyt.com/images/2019/08/16/arts/16listings-art/merlin_156057081_c14b61d4-567c-4314-a7e6-c3ebb0399e1d-superJumbo.jpg" class="card-img-top event-img" alt="Event 3">
            <div class="card-body">
              <h5 class="card-title">Art exhibitions</h5>
              <p class="card-text">An amazing performance by a talented theater group. Don't miss it!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer  class="text-center text-dark pt-3 ">
      <p class="fw-bold text-dark">created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/dkavrz_/" class="fw-bold text-dark">DEKA ALVARIZI</a></p>
    </footer>
    
    <!-- Script for Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    
  </body>
</html>