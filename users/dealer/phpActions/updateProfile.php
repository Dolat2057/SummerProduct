<?php

if (session_status() == PHP_SESSION_NONE) {     session_start(); }

require ('../../../common/dbconnection.php');

if(isset($_REQUEST['submit-updateProfile'])){

  $user_name = $_SESSION['username'];
  $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
  $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $mobile_number = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : null;
  $address = isset($_POST['address']) ? $_POST['address'] : null;
  $city = isset($_POST['city']) ? $_POST['city'] : null;
  $state = isset($_POST['state']) ? $_POST['state'] : null;
  
  $sql = "UPDATE dealerlogin SET 
              
    first_name='$first_name', 
    last_name='$last_name', 
    email='$email', 
    mobile_number='$mobile_number' , 
    address='$address', 
    city='$city', 
    state='$state' 
           
    where username='$user_name'";
                   
  $result = mysqli_query($conn , $sql);
  

  if($result){
    
   header('Location: ../index.php');
  }
  else{
   
    header('Location: ../index.php');

  }
  

}

?>
