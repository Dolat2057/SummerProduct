<?php




require('../../common/dbconnection.php');

if(isset($_POST['submitForm']))
{

  // $product_registration_id = isset($_POST['product_registration_id']) ? $_POST['product_registration_id'] : null;
  $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : null;
  $model_number = isset($_POST['model_number']) ? $_POST['model_number'] : null;
  $serial_number = isset($_POST['serial_number']) ? $_POST['serial_number'] : null;
  $purchase_date = isset($_POST['purchase_date']) ? $_POST['purchase_date'] : null;
  $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : null;
  
  $service = isset($_POST['service']) ? $_POST['service'] : null;
  
}

?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/customer-style.css">
    <title>Summerking</title>
  </head>

  <body>

    <div class="container">
	
	<div class="card">
	


	<?php echo " User Name : $user_name"; ?> <br>
	
	 <?php echo "Model Number: $model_number"; ?> <br>

	<?php echo "Serial Number: $serial_number"; ?> <br>

	<?php echo "Contact Number: $phone_number"; ?> <br>

	<?php echo "Service Required: $service"; ?> <br>
	
	
	
	
	
	

	

	</div>


	
	</div>












  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html> 