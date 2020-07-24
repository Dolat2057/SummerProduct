<?php require_once("./common/dbconnection.php") ?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="./css/dfanspage.css">
    
      <title>Card2</title>
   </head>
   <body>

   <?php include("./sections/nav.php")?>
      <div class="container-fluid" >
         <img src="./images/website/1-1.png" style="height:100%; width:100%;" class="img-fluid" alt="Ceiling Fan">
         <?php
            if(isset($_GET['product_type'])){
               $product_type= $_GET['product_type'];
          }
         ?>  
           
         <center>
            <?php 
          require_once("./sections/heading.php");
          getSectionHeading("FANS");
        ?>
         </center>
         <p>
         <center>Summer King fans help you stay cool and 
            comfortable at all times. We provide a 
         </center>
         <center>wide variety 
            of sizes, designs, colours and aesthetics across the 
            different types
         </center>
         <center> of fans to suit every purpose. 
            Innovation, high quality, great design and 
         </center>
         <center>engineering
            have ensured our products reach every nook and corner
            of India
         </center>
         <center> as well as other tropical countries.</center>
         </p>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="card" style="height:40rem;">
                  <div class="inner">
                     <img class="card-img-top" src="./images/website/2_Mobile.png" alt="Ceiling Fan" style="height:25rem;">
                  </div>
                  <div class="card-body">
                     <?php 
                        require_once("./sections/heading.php");
                        getSectionHeading("Ceiling Fans");
                     ?>
                     <p class="card-text">
                        A wide range of ceiling fans for rooms of every size that compliment your décor. Choose from energy efficient,
                        high speed, anti-dust, Duratech, decorative and many more.
                     </p>
                     <center>
                        <a href="products.php?product_type=Ceiling fan" class="btn btn-outline-danger">View All Products</a>
                     </center>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="card" style="height:40rem;">
                  <div class="inner">
                     <img class="card-img-top" src="./images/website/Pedestal_fan_thumbnail-1.png" alt="Ceiling Fan" style="height:25rem;">
                  </div>
                  <div class="card-body">
                     <?php 
                        require_once("./sections/heading.php");
                        getSectionHeading("Pedestal Fan");
                     ?>
                     <p class="card-text">
                        Our range of high speed and performance-oriented pedestal fans can work brilliantly across all the rooms
                        of your house.These fans are also available high speed and decorative.
                     </p>
                     <center>
                     <a href="products.php?product_type=Multipurpose fan" class="btn btn-outline-danger">View All Products</a>
                     </center>
                  </div>
               </div>
            </div>
          
         </div>
         
      </div>
      <?php include("./sections/did-you-know.php");?>
      <?php include("./sections/footer.php");?>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./js/jquery-3.4.1.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
<script type="text/javascript">
$('.section-heading').hover(function(){
    $(this).toggleClass("animate__animated animate__pulse");
    }); 
</script>