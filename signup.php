<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $User_Name  = $_POST['User_Name'];
    $Password = $_POST['Password'];

    if (!empty($User_Name) && !empty($Password)) {
        $User_Id = random_num(20);
        $query = "insert into users (User_ID, User_Name, Password) values ('$User_Id', '$User_Name' , '$Password')";

        mysqli_query($con, $query);

        header("Location: sign.php");
        die;
    } else {
        echo "PLZ, Enter valid information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Sign Up Form </title>
<style>
    body{
        /* background-color:black; */
        background-image: url("16720673.jpg");

    }
    .container{

        text-align:"center";
        border:10px darkorange double;
        width: fit-content;
    }
    .login-email{
        align:center;
        margin :97px;
        padding :3px;
    }
</style>

</head>

<body>
    <div class="container" >
        <form class="login-email" method="POST">
            <br><br>
            <p class="login-text" style="font-size: 2rem; font-weight:800; color:darkorange;">Sign Up</p>
            <div class="input-group" >
                <input type="text" placeholder="Name" required name="User_Name">

            </div>
            <br><br>

            <p class="login-text" style="font-size: 2rem; font-weight:800; color:darkorange;">Password</p>
            <div class="input-group" >
                <input type="Password" placeholder="Password" required name="Password">

            </div>
            <br>
            <br><br>
            <!-- <div class="input-group "><br>
                <input type="submit" class="btn" value="Sign Up" style="color:white; background-color:orange;">
            </div> -->
            <div class="input-group"><br>
           <button class="btn" style=" background-color:orange; "> <a href="index.php" style="text-decoration: none; font-size20px;color:white;" >Sign Up</a></button>
           
        </div>
            <br><br><br>
            <a href="index.php" style="font-size: 1.5rem; font-weight:500; color:white;">Click TO LOGIN </a>
        </form>

    </div>
</body>

</html>