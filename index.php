<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link rel="icon" href="favicon.ico" type="images/logo-removebg-preview">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<?php 
include('menubar.php');
?>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
   

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" id="logo">

                    <a class="nav-link" href="index.php"> <img src="" alt="olE">Pulse Craft</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doctors.html">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="medicines.html">Medicines</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="lab.html">Lab Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button>Login</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><button>Sign Up</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <hr style="margin: 0;">  -->



    <div class="slider">
        <!-- <h1>Company Name</h1> -->
        <div class="quote">
            <h1
                style="font-weight: 700; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                PULSE CRAFT</h1>
            <h4> "Online Medical Services: <br>
                Where Knowledge Meets Compassion"</h4>
        </div>


    </div>
    <hr>



    <div class="about">
        <h3>What we Do</h3>
        <p>
            <!-- will offer a wide range of healthcare services, including,
            Ayurvedic consultations: Ayurvedic consultations will be available with qualified Ayurvedic
            practitioners.
            Allopathic consultations: Allopathic consultations will be available with qualified Allopathic Doctors
            Combined Ayurvedic and Allopathic treatments: The company will also offer combined Ayurvedic and
            Allopathic
            treatments. This approach to healthcare combines the strengths of both systems of medicine to provide
            patients
            with the best possible care -->
        </p>

    </div>


    <div class="container">

        <div class="boxes">

            <div class="box" id="doctor-consult">
                <div class="row">
                    <div class="col-4 mt-3" style="">
                        <img src="images/doctor-svgrepo-com.svg" alt="">
                    </div>

                    <div class="col-8 mt-3" style="">
                        <h3 style="">Digital <br> Doctor Consult</h3>
                        <a href="doctors.html"><button
                                style="width: 60%; height: 40px; margin-top: 6px; border: none; border-radius: 30px; background-color: #198754; color: white;">Know
                                More</button></a>
                    </div>
                </div>



            </div>
            <div class="box" id="hospital-visit">
                <div class="row">
                    <div class="col-4 mt-3" style="">
                        <img src="images/hospital-svgrepo-com (1).svg" alt="">
                    </div>
                    <div class="col-8 mt-3" style="">
                        <h3 style="">Clinic/ <br> Hospital Visit</h3>
                        <a href="contact.html"><button
                                style="width: 60%; height: 40px; margin-top: 6px; border: none; border-radius: 30px; background-color: #198754;color: white;">Know
                                More</button></a>
                    </div>
                </div>
            </div>

        </div>



        <hr>

        <div class="call">
            <div class="row">
                <div class="col-7">
                    <h4>HELP LINE</h4> <br>
                    <h1>24/7 Helpline Service</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt amet quae dicta voluptates
                        doloremque
                        excepturi labore cum debitis, perferendis natus qui distinctio dolore totam et voluptatem
                        aliquam commodi
                        maxime expedita!</p> <br>
                    <a class="navbar-brand" href=""><button class="btn btn-primary" type="submit" id="searchbtn1"
                            onclick="location.href='tel:1234567890';">EMERGENCY CALL</button></a>




                </div>
                <div class="col-5">
                    <img src="images/doctor-walking.jpg" alt="" id="image">
                </div>
            </div>
        </div>

        <hr>



        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Quick Links</h5>
                        <ul class="footer-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="doctors.html">Doctors</a></li>
                            <li><a href="medicines.html">Medicines</a></li>
                            <li><a href="lab.html">Lab Test</a></li>
                            <li><a href="records.html">Health Records</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>


                    </div>
                    <div class="col-md-6">
                        <h5>Connect with Us</h5>

                        <p><b>Email:</b> pulsecarft@gmail.com</p>
                        <p><b>Email:</b> +12 3456 7890 </p>
                    </div>
                </div>
                <div class="row support-section">
                    <div class="col-md-6">
                        <p>&copy; 2023 Your Website. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>For support, contact us at pulsecraft@gmail.com</p>
                    </div>
                </div>
            </div>
        </footer>







        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>