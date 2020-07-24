<?php require_once('./common/dbconnection.php')?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <title>Summerking</title>
   </head>
   <body>
      <div class="container-fluid">
         <?php include("./sections/nav.php");?>
         <form action="productdetail.php?id=<?php  echo $id;?>" method="POST">
            <?php
               if(isset($_GET['id'])){
               
               
                $id= $_GET['id'];
               }
            ?>  
            <div class="row buyrow">
               <?php
                  if(isset($_GET['id']))
                  {
                     $id= $_GET['id'];
                     $sql1 = "SELECT id, product_type,price, model_name, image, speed, power_output,energy, description FROM skproducts where id=$id";
                     $result = $conn->query($sql1); 
                     $row = $result->fetch_assoc();
                  }
               ?>
               
               <div class="col-lg-5 col-md-5 offset-md-1 offset-lg-1">
                  <img src="./images/sk-products/final/<?php echo $row['image'] ?>" alt="Product Image" width="100%" height="100%">
               </div>
               <div class="col-lg-5 col-md-5 offset-md-1 offset-lg-1 details">
                  <h2><?php echo $row['model_name']?></h2>
                  <h5>MPR: INR <?php echo $row['price']?> (Included all taxes)</h5>
                  <hr>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                           aria-selected="true">Features
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                           aria-selected="false">Description
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                           aria-selected="false">Additional Info</a>
                     </li>
                  </ul>
                  
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class='tabs'> 
                           - Speed: <?php echo $row['speed']?> RPM
                           <br>
                           <?php  echo $row['energy']?>
                        </div>
                  </div>
                  
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <div class='tabs'> 
                        <?php echo $row['description']?>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <div class='tabs'> 
                        Type: <?php echo $row['product_type']?>
                        <br>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>                        
                  
   </div>
         <div class="col-lg-1 col-md-1 col-sm-1"></div>
      </div>-->
      <?php include("./sections/relatedProducts.php");?>
      <?php include("./sections/did-you-know.php");?>
      <?php include("./sections/footer.php");?>
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="./js/jquery-3.4.1.js" ></script>
      <script src="./js/popper.min.js" ></script>
      <script src="./js/bootstrap.min.js"></script>
  </body>
</html>