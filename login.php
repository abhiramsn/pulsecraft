<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main-section {
            /* border: 1px solid black; */
            display: block;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100vh;
        }

        form {
            border: 1px solid rgb(2, 1, 8);
            width: 30vw;
            height: auto;
            margin: 0 auto;
            border-radius: 18px;
       
        }

        form .input-ele label {
            width: 100px;
            /* border: 1px solid rgb(2, 1, 8); */
            position: relative;
            padding: 12px
        }

        .input-ele {
            padding: 16px;
            margin: 16px;
        }

        .input-ele input {
            width: auto;
            padding: 12px;
        }

        .input-ele2 {
            padding-bottom: 0;
        }

        #submit {
            /* background-color: rgb(82, 119, 255);
            width: 150px;
            padding: 10px;
            margin: 18px 4px;
            margin-bottom: 10px;
font-size:18px;
            color: aliceblue; */
        }

        .heading {
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php 
    
    include('menubar.php');

    ?>


    <div class="main-section">
        <h4 class="heading">Log In to Digital Clinic : PULSE CRAFT</h4>

        <form action="" method="post">

            <div class="input-ele">

            <label for="email">User Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
               
            </div>
            <div class="input-ele input-ele2">
            <label for="pass">Password : </label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="agree-class">

                <input type="radio" id="agree" name="agree" required="true">
                <label for="agree">Agree for Term & Conditions</label>
            </div>


            <input type="submit" value="submit" name="submit" id="submit">

            <h4><a href="" style="font-size: 17px; color: blue; margin-top:10px">Forget Password?</a></h4>

        </form>

    </div>

    <?php 
    
    if(isset($_POST['submit'])) 
{

    $email=$_POST["email"];
    $pass=$_POST["pass"];



    $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
    $res = mysqli_query($conn,$sql);


        if(mysqli_num_rows($res) > 0)
        {?>
            <script>
            window.open("userdashboard.php","_self");
            </script>
<?php
        }

        else{
            echo mysqli_error($conn);
        }

}

    ?>
    
    





</body>

</html>