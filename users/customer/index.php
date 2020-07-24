<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<?php include ('../../common/dbconnection.php');?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


      <link rel="stylesheet" type="text/css" href="./css/datatables.min.css">
      <script src="./js/jquery-3.4.1.js"></script> 

       <link rel="stylesheet" type="text/css" href="./css/customer-style.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

      <title>Summerking - Customer Portal </title>
   </head>

   <body>
      
      <?php include ('./phpActions/addRecord.php');?>
      <?php include ('./phpActions/deleteRecord.php');?>



      <div class="fluid-container">



         

          <div class="row section-card">
               <div class="col-sm-12">
                     <?php include('./sections/user.php'); ?>
               </div>
         </div>

         <div class="row">
            <div class="col-sm-12 col-md-12">
               <?php include('./sections/productTable.php'); ?>
            </div>
         </div>

         

       </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
   <script src="./js/datatables.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
   
   <?php include ('./sections/updateProductModal.php'); ?>
   <?php include ('./sections/addProductModal2.php'); ?>
     <?php include ('./sections/deleteProductModal.php'); ?> 
     <?php include ('./sections/updateProfile.php'); ?> 
     <?php include ('./sections/serviceModal.php'); ?> 
     

   </body>
</html>

<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
</script>


<script>


function showQRIntro() {
  return confirm("Use your camera to take a picture of a QR code.");
}


function openQRCamera(node) {
  var reader = new FileReader();
  reader.onload = function() {
    node.value = "";
    qrcode.callback = function(res) {
      if(res instanceof Error) {
        alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
      } else {
        node.parentNode.previousElementSibling.value = res;
      }
    };
    qrcode.decode(reader.result);
  };
  reader.readAsDataURL(node.files[0]);
}


</script>

