
<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ./customer/login.php");
        exit();
    }
?>