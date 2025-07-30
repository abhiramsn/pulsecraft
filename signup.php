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
            width: 50vw;
            height: auto;
            margin: 0 auto;
            border-radius: 18px;

        }

        form .input-ele label {
            width: 100px;
            /* border: 1px solid rgb(2, 1, 8); */
            position: relative;
            padding: 8px
        }

        .input-ele {
            padding: 8px;
            /* margin: 6px; */
        }

        .input-ele input {
            width: auto;
            padding: 4px;
            margin-top: 4px;
        }

        /* .input-ele2 {
            padding-bottom: 0;
        } */

        #submit {
            background-color: rgb(82, 119, 255);
            width: 150px;
            padding: 10px;
            margin: 18px 4px;
            margin-bottom: 0;

            color: aliceblue;
        }

        .heading {
            padding: 12px;
        }
    </style>
</head>

<body>

<?php include('menubar.php');

  ?>

    <div class="main-section">
        <h4 class="heading">New User Registration</h4>

        <form action="" method="post">

            <div class="input-ele">
                <label for="firstname">Fist Name</label>
                <input type="text" id="fname" name="fname" placeholder="First Name">

                <label for="lastname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Last Name">
            </div>
            <div class="input-ele input-ele2">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
                <label for="phone">Phone </label>
                <input type="number" id="phone" name="phone" placeholder="Enter Phone Number" required>
            </div>
            <div class="input-ele input-ele2">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" placeholder="" required>

                <label for="gender">Gender :</label>
                Male<input type="radio" id="gender" name="gender" value="male" required>
                Female<input type="radio" id="gender" name="gender" value="female" required>
            </div>
         
            <div class="input-ele input-ele2">
                <label for="add">Address : </label>
                <input type="text" id="add" name="add" required>

                <label for="pass">Password : </label>
                <input type="password" id="pass" name="pass" required>
            </div>
            <div class="agree-class">

                <input type="radio" id="agree" name="agree" required>
                <label for="agree">Agree for Term & Conditions</label>
            </div>


            <input type="submit" value="Register" name="submit">

            <h4><a href="login.php" style="font-size: 17px; color: blue; margin-top:10px">Already Have an account?</a>
            </h4>

        </form>

    </div>


<?php


if(isset($_POST['submit'])) 
{

    $username=$_POST["fname"] . "" . $POST["lname"]; 
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $phone=$_POST["phone"];
    $age=$_POST["age"];
    $address=$_POST["add"];


    $sql = "INSERT INTO user (username, email, password, age, address, phone) 
        VALUES ('$username', '$email', '$pass', '$age', '$address', '$phone')";

        if(mysqli_query($conn,$sql))
        {
            echo "sucess";

        }

        else{
            echo "errorrr";
        }

}

    ?>

 







</body>

</html>