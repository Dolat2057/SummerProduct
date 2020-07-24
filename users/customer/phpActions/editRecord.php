<?php

if (session_status() == PHP_SESSION_NONE) {     session_start(); }


require('../../common/dbconnection.php');

if(isset($_POST['updatedata']))
{

  $product_registration_id = $_POST['product_registration_id'];
  $user_name = $_SESSION['username'];
  $model_number = isset($_POST['model_number']) ? $_POST['model_number'] : null;
  $serial_number = isset($_POST['serial_number']) ? $_POST['serial_number'] : null;
  $purchase_date = isset($_POST['purchase_date']) ? $_POST['purchase_date'] : null;
 // $invoice_image = isset($_POST['invoice_image']) ? $_POST['invioce_image'] : null;


$sql = "UPDATE product_registration_id  SET 
                username= '$user_name',
				model_number = '$model_number',
				serial_number = '$serial_number',
				purchase_date = '$purchase_date'
				
				  
		    WHERE username = '$user_name' and product_registration_id='$product_registration_id'  ";


 $result = mysqli_query($conn, $sql);

//$target_dir = "../images/";
//$target_file = $target_dir . basename($_FILES["productimage"]["myfile"]);
//$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
   // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        //$uploadOk = 1;
   // } else {
     //   echo "File is not an image.";
       // $uploadOk = 0;
  //  }
//}


	if($result)
	{
	    

	header('Location: ../index.php');
	}
	else
	{
	   echo "fail";
	  // header('Location: ../index.php');
	}

}


?>