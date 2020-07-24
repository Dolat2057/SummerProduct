<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../../css/login.css"/>
</head>
<body>
<?php
    require('../../common/dbconnection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['user_name'])) {


        $user_name= stripslashes($_REQUEST['user_name']);    // removes backslashes
        $user_name = mysqli_real_escape_string($conn, $user_name);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$user_name'
                     AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            
            $_SESSION['username'] = $user_name;
         //   $_SESSION['user_id'] = $user_id;
            // Redirect to user dashboard page
            header("Location: index.php");
        
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="POST" name="login">

        <h1><img src="../../images/logo.png" alt="Summerking Logo"></h1>
        <h2 class="login-title">Customer's Login</h2>

        <input type="text" class="login-input" name="user_name" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>

        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Not yet registered ? <a href="registration.php">Register here</a></p>

        <a href="../../index.php" class="link">Back to site</a>
  </form>
<?php
    }
?>
</body>
</html>