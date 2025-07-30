<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .doc-box {
            /* border: 1px solid black; */
            height: 100vh;
            padding: 50px;
            display: flex;
            justify-content: space-around;
        }

        .doc-card {
            border: 1px solid rgb(92, 1, 1);
            padding: 10px;
            width: auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 60%;
            /* width: 50%; */
            border-radius: 16px 0px 16px 0px;
        }

        .content-box {

            /* width: auto;
            height: auto; */
        }

        .img-box img {
            height: 250px;

        }

        .content-box ul {
            /* border: 1px solid rgb(35, 16, 243); */
            text-align: left;
            margin: 0px;
            /* height: 100%; */
        }

        .content-box ul li {
            padding-bottom: 18px;
            list-style: none;

        }

        #app-btn button {
            width: 200px;
            background-color: rgb(33, 109, 38);
            padding: 16px;
            font-size: large;
            color: aliceblue;
        }

        body h2 {
            text-align: center;
            padding:10px;
        }
    </style>
</head>

<body>

    <?php
    include('menubar.php');
    include('db.php');
?>

<h2>Our  DOCTORS</h2>
    <div class="doc-box">

 

        <?php 
    


    $sql = 'SELECT * FROM `doctor`';

    $res = mysqli_query($conn , $sql);

  
    while( $row=mysqli_fetch_assoc($res))
    
    {
    ?>
        <div class="doc-card">
            <div class="img-box">
                <img src=<?php echo $row['doc-img']?> alt="doctor-image">
            </div>

            <div class="content-box">
                <h4 id="doc-name">DR
                    <?php echo $row['doc_name']?>
                </h4>
                <ul>

                    <li id="doc-dep-name"><b>Department:</b>
                        <?php echo $row['dep']?>
                    </li>
                    <li id="doc-exp"><b>Years Of Experience:</b>
                        <?php echo $row['exp']?> years
                    </li>
                    <li id="doc-phone"><b>Phone:</b>
                        <?php echo $row['phone']?>
                    </li>
                    <li id="app-btn"><button>Book Appointment</button></li>
                </ul>
            </div>
        </div>
        <?php
    }

?>


    </div>


</body>

</html>