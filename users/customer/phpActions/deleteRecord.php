<?php
if (session_status() == PHP_SESSION_NONE) {     session_start(); }

require('../../common/dbconnection.php');

//require_once ('../common/alert.php');

if(isset($_POST['deletedata'])){

  $user_name = $_SESSION['username'];
  $product_id= $_POST['product_registration_id'];
 
  $sql = "DELETE FROM product_registration_id WHERE username= '$user_name' AND product_registration_id='$product_id'";

             
  $result = mysqli_query($conn , $sql);


  if($result){
   
    header('Location: ../index.php');
  }

  else{
  
    header('Location: ../index.php');
  }
  

}

?>