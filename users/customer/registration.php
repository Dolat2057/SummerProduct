<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="../../css/login.css"/>
</head>
<body>
<?php


       require('../common/dbconnection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
      
        $user_name = stripslashes($_REQUEST['username']);
        $user_name = mysqli_real_escape_string($conn, $user_name);

        
        $first_name    = stripslashes($_REQUEST['first_name']);
        $first_name    = mysqli_real_escape_string($conn, $first_name);

        $last_name = stripslashes($_REQUEST['last_name']);
        $last_name = mysqli_real_escape_string($conn, $last_name);

       

    
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

       

        $create_datetime = date("d-m-Y H:i:s");

        $mobile_number = stripslashes($_REQUEST['mobile_number']);
        $mobile_number = mysqli_real_escape_string($conn, $mobile_number);

       
      
      //  $user_id = 123;//get highest user_id form users table add 1 to it.we use max function
        $query    = "INSERT into `users` ( username,first_name, last_name,usertype, email, password,
          create_datetime,mobile_number)
                     VALUES ('$user_name', '$first_name', '$last_name','Customer',
                      '$email','$password','$create_datetime','$mobile_number')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <h1 class="login-title">Customer's Registration</h1>

        <input type="text" class="login-input" name="username" placeholder="username">
        <input type="text" class="login-input" name="first_name" placeholder="First Name">
        <input type="text" class="login-input" name="last_name" placeholder="Last Name">


<br>
       
        <input type="email" class="login-input" name="email" placeholder="Email">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="number"  class="login-input" name="mobile_number"placeholder="phone">
       
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already Registered ? <a href="login.php">Login here</a></p>

        <a href="../../index.php" class="link">Back to site</a>
    </form>

   
<?php
    }
?>
</body>
</html>