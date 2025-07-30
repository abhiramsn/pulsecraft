<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact Us</title>

</head>

<body>

  <!-- <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5 col-12">

        </div>
      </div>
    </div>
  </div> -->
  <?php
  include('menubar.php');

  ?>


  <hr style="margin: 0;">


  <div class="heading">
    <h3 style="text-align:center;">Our Contact</h3>
    <hr style="width: 30%; border-width: 3px; border-color: rgba(42, 46, 43, 0.201);">
  </div>


  <div class="container" id="pic">
    <img src="images\contact 2.jpg" alt="" width="100%" height="20%" style="margin-bottom:30px;">
  </div>

  <hr style="margin: 0;">

  <div class="container" id="main">
    <div class="row">
      <!-- Get in Touch Section -->
      <div class="col-md-6" id="getintouch">
        <h2>Get in Touch</h2>
        <p class="p1"><span>Address</span>: <br> Pulse craft <br>
          No#114, 5cross, <br>
          2main road, malleshwaram <br>
          Bengaluru , 560003</p>
        <p class="p2"><span>Email</span>: <br> pulsecarft@gmail.com
        <p class="p3"><span>Phone</span>: <br> +1 (555) 123-4567</p>
      </div>

      <!-- Contact Form Section -->
      <div class="col-md-6" id="contact">
        <h2>Contact Us</h2>
        <hr>

        <form action="" method="post">

          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Your Phone</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Your Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

        </form>

      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


















</body>

</html>