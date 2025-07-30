<!DOCTYPE html>
<html lang="en">
<?php include('db.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>



        ul {
            margin-right: 50px;
        }

        li a {
            margin-right: 20px;
            font-weight: 500;
        }

        .navbar-nav .nav-item .nav-link {
            color: black;
            transition: 1s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #28a745;
            /* Green (success) color */
        }

        .navbar a span {
            position: relative;
            top: 40px;
            margin: 0px;
        }

        #logo {
            font-size: larger;
            font-weight: bold;
            float: left;
            position: relative;
            right: 250px;
        }

        #logo img {
            height: 34px;
            margin: 6px;
        }

        .navbar-nav li a button {
            background-color: rgb(31, 79, 252);
            color: aliceblue;
            /* padding: 10px; */
            padding: 8px;
            font-size: smaller;
            width: 80px;
            border-radius: 14px;
            border-width: 0;


        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="index.php">
       <img src="images/logo-removebg-preview.png" width="30" height="30" class="d-inline-block align-top"
                alt="Logo" id="logo"> 
            <span>PULSE CRAFT</span>
        </a> -->

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" id="logo">

                    <a class="nav-link" href="index.php"> <img src="hospital-health-clinic-svgrepo-com.svg"
                            alt="olE">Pulse Craft</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpanel.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Medicines</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">Lab Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Hospitals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Appointment</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">USers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><button>Login</button></a>
                </li>
   
            </ul>
        </div>
    </nav>
</body>

</html>