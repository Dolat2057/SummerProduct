<?php
//require_once ('./common/alert.php');
if (session_status() == PHP_SESSION_NONE) {     session_start(); }

    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    require_once('../../common/dbconnection.php');


if(isset($_REQUEST['submit-addRecord'])){
  $user_name = $_SESSION['username'];
  $model_number =  isset($_POST['model_number']) ? $_POST['model_number'] : null;
  $serial_number = isset($_POST['serial_number']) ? $_POST['serial_number'] : null;
  $purchase_date = isset($_POST['purchase_date']) ? $_POST['purchase_date'] : null;


 
        mkdir("../invoiceImages/$user_name",007,true);
        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_loc= $_FILES['file']['tmp_name'];
       /*  $newfile = date('m-d-Y_H:i:s');
        $file_name=$newfile; */

        $file_store= "../invoiceImages/$user_name/".date("m-d-y").date("h-i-sa").$file_name;

        move_uploaded_file($file_tem_loc,$file_store);


  
  $sql = "INSERT INTO product_registration_id ( model_number,serial_number,purchase_date,invoice_image,username)
          VALUES('$model_number', '$serial_number', '$purchase_date','$file_name', '$user_name')";
  echo $sql;

                   
  $result = mysqli_query($conn , $sql);


  if($result){
    header('Location: ../index.php');
    
   // showAlert("success","Product Registration Successful");
  }
  else{
    header('Location: ../index.php');
   // showAlert("danger","Product Registration Failed");

  }
  

}





?>