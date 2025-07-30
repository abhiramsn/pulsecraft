<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

    <style>
        /* * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .products-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 50px;
        background-color: #f4f4f4;
    }

    .product-card {
        border: 1px solid rgb(92, 1, 1);
        border-radius: 16px 0px 16px 0px;
        padding: 16px;
        width: 280px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: auto;
        background-color: white;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .img-box {
        width: 100%;
        text-align: center;
    }

    .img-box img {
        max-height: 100px;
        width: auto;
        max-width: 100%;
        object-fit: contain;
    }

    .content-box {
        width: 100%;
        padding-top: 10px;
    }

    .content-box h4 {
        text-align: center;
        margin-bottom: 10px;
    }

    .content-box ul {
        list-style: none;
        padding: 0;
    }

    .content-box ul li {
        padding-bottom: 10px;
        font-size: 14px;
        line-height: 1.4;
    }

    #app-btn {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 10px;
    }

    #app-btn button {
        padding: 10px 16px;
        background-color: rgb(33, 109, 38);
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #app-btn button:hover {
        background-color: rgb(26, 90, 31);
    }

    body h2 {
        text-align: center;
        padding: 10px;
    }
 */

        .card-img-top {
            /* height:200px;
    width:auto; */
            max-height: 200px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
        }

        .filter-sec {
            background-color: rgba(212, 218, 218, 0.288);
            height: 100vh;
        }

        .card {
            margin-top: 20px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        #pid {
            display: none;
        }
    </style>


</head>

<body>

    <?php
    include('menubar.php');
    include('db.php');
?>


    <div class="products-section">





        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-2 filter-sec">
                <ul class="list-unstyled p-3">
                    <li>One</li>
                    <li>Two</li>
                    <li>Three</li>
                    <li>Four</li>
                </ul>
            </div>

            <!-- Product Cards -->
            <div class="col-sm-10">
                <div class="row">
                    <?php 
            $sql = 'SELECT * FROM `product`';
            $res = mysqli_query($conn , $sql);

            while( $row = mysqli_fetch_assoc($res)) {
            ?>
                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card flex-fill" style="height: 400px;">
                            <img class="card-img-top" src="<?php echo $row['product_img']?>" alt="Product Image">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-truncate">
                                    <?php echo $row['product_name']?>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Price: ₹
                                    <?php echo $row['price']?>
                                </h6>
                                <p class="card-text small text-truncate" style="max-height: 80px; overflow: hidden;">
                                    <?php echo $row['descp']?>
                                </p>
                                <div class="mt-auto">
                                    <form action="buy.php" method="post">
                                        <input type="text" id="pid" name="pid" value=<?php echo $row['product_id']?>>
                                        <input type="submit" class="btn btn-sm btn-success" value="Add to cart"
                                            name="addtocart">
                                        <input type="submit" class="btn btn-sm btn-success" value="Buy Now"
                                            name="buynow">

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>


    </div>





</body>

</html>