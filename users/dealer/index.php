<?php require_once('../../common/dbconnection.php')?>
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../../css/bootstrap.min.css">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" href="css/dealerhome.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

      <title>Summerking</title>
   </head>
   <body>
   <div class="container">

   <div class="row ">
               
         </div>
   

    <div class="row">
            <div id="details" class=" col-lg-12 col-md-12 card clearfix">
                <?php include('sections/user.php'); ?>
            </div>
    </div>

<?php include('sections/productTable.php');?>


</div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../js/jquery-3.4.1.js" ></script>
      <script src="../../js/popper.min.js" ></script>
      <script src="../../js/bootstrap.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
      
   
      
       



   </body>
</html>


