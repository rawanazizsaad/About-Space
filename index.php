<?php
session_start();
include("connection.php");
include("functions.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $User_name  = $_POST['User_name'];
      $password = $_POST['password'];
      
      if(!empty($User_name)&& !empty($password) &&  is_numeric($User_name)){
          $query= "select * from users where User_name = '$User_name' limit 1 ";
               
          $result = mysqli_query($con, $query);
          if ($result) {
            if (result && mysqli_num_rows($result) >0 ){
            $User_data= mysqli_fetch_assoc($result);

            if($User_data['password'] === $password ){
                $_SESSION['User_ID'] =$User_data['User_ID'];
                header("Location: 'signup.php' ");
               die; 
            }
            
            }  
          }
                  echo "PLZ, Enter valid User name or password";    
 
      } 
      else {
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
    <title>LogIn Form </title>

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
        /* align:center; */
        margin :72px;
        padding :3px;
    }
</style>
</head>
<body>

 <div class="container">
    <form class="login-email">
        <br><br>
        <p class="login-text" style="font-size: 2rem; font-weight:800; color:darkorange;">LogIn</p>
        <div class="input-group">
            <input type="email"placeholder="Email" required>   
 
        </div>
        <br><br>
     
        <p class="login-text" style="font-size: 2rem; font-weight:800; color:darkorange;">Password</p>
            <div class="input-group"> <br>
            <input type="password"placeholder="Password" required>   

        </div>
        <br>
        <br><br>
        <div class="input-group"><br>
           <button class="btn" style=" background-color:orange; "> <a href="project.html" style="text-decoration: none; font-size20px;color:white;" >LogIn</a></button>
           
        </div>


        <br><br><br>
 <p class="login-register-text" style="font-size: 1.5rem; font-weight:500; color:white;" >Don't have an account ?</p>
   
 <a href="signup.php" style="font-size: 1.5rem; font-weight:500; color:darkorange;  " >Sign Up Here </a>
 
</form>

 </div>   
</body>
</html>