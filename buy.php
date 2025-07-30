<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact Us</title>

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 30px;
    }

    .product {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: #fff;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      padding: 20px;
      margin: 20px auto;
      max-width: 1000px;
    }

    .img-sec {
      flex: 1;
      min-width: 300px;
      padding: 10px;
    }

    .img-sec img {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
    }

    .details-sec {
      flex: 2;
      min-width: 300px;
      padding: 20px;
    }

    .details-sec h4 {
      font-size: 24px;
      font-weight: bold;
    }

    .details-sec h5 {
      color: #28a745;
      font-size: 20px;
      margin-top: 10px;
    }

    .details-sec del {
      color: #888;
    }

    select {
      padding: 5px;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .sizes input[type="radio"] {
      margin: 10px 5px 10px 0;
      transform: scale(1.3);
    }

    #prod-details {
      list-style-type: square;
      padding-left: 20px;
      margin-top: 15px;
    }

    #prod-details li {
      margin-bottom: 5px;
    }

    h4 + p {
      margin-top: 10px;
      color: #555;
    }
  </style>
</head>

<body>

  <?php
  include('menubar.php');
  include('db.php');

  if (isset($_POST['buynow'])) {
    $pid = $_POST['pid'];
    $sql = "SELECT * FROM product WHERE product_id = $pid";
    $res = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($res)) {
  ?>

      <div class="product">
        <div class="img-sec">
          <img src="<?php echo $row['product_img'] ?>" alt="Product Image">
        </div>

        <div class="details-sec">
          <h4 id="pname"><?php echo $row['product_name'] ?></h4>
          <hr>
          <h5 id="p_price">₹<?php echo $row['price'] ?></h5>
          <p><del>₹7902</del></p>

          <b>Quantity:
            <select name="qty">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </b>

          <div class="sizes">
            <label>Size:</label><br>
            <input type="radio" name="size"> S
            <input type="radio" name="size"> M
            <input type="radio" name="size"> L
            <input type="radio" name="size"> XL
          </div>

          <button>Buy Now</button>

          <ul id="prod-details">
            <li><b>Brand:</b> XYZ</li>
            <li><b>Material:</b> Cotton</li>
            <li><b>Delivery:</b> 3-5 Business Days</li>
            <li><b>Warranty:</b> 1 Year</li>
          </ul>

          <h4>About this item</h4>
          <p><?php echo $row['descp'] ?></p>
        </div>
      </div>

  <?php
    }
  }
  ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
