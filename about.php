<?php require_once('common/dbconnection.php')?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Summerking</title>
  </head>

  <body>
    <div class="container-fluid">
    
      <?php include("./sections/nav.php");?>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <img src="./images/website/fan-banner.jpg" alt="trending images" class="img-responsive" style="width:100%">
        </div>
      </div>
      
      

      <!-- About Us -->

      <?php 
      require_once("./sections/heading.php");
      getSectionHeading("About Us");
      ?>
    
      <div class="row">
    
        <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 about1">
          <p>
            SummerKing is widely engaged in manufacturing and trading 
            of a unique rage of Home appliances.that are manufactured by extreme
            grade of raw material which is sourced from our reliable & Quality-
            driven vendorsfor high durability. We supply these Home appliances 
            in various markets throughout the Indian subcontinents.
            Our large Infrastructure is completely equipped with different units
            of manufacturing and trading. Our team of quality analysis and
            marketing work under our expert and professional Mentor Mr. Vikas Goel,
            who are dedicated towards delivering value to our valuable clients.
          </p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
      </div>
      <!-- About Us Ends here -->



      <?php 
        require_once("./sections/heading.php");
        getSectionHeading("Our Mission");
      ?>


      <div class="row">

        
        <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2">
          We are always looking for new opportunities to grow. We collaborate with purpose, delivering innovation that expands boundaries for new categories, services and businesses. We continually adapt the latest consumer insights and technology to design and build innovative products that influence trends. And it pays <br> <br>
        </div>
      </div>




      <?php 
        require_once("./sections/heading.php");
        getSectionHeading("Our Vision");
      ?>


      <div class="row">

        
        <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2">
          We create purposeful technology that helps free up your schedule for what really matters. We feel that our products should positively impact your life right now, otherwise it's just technology for the sake of technology. Our brands and products help you appreciate today with an eye towards tomorrow. <br> <br>
        </div>
      </div>


      <?php include("./sections/team.php");?>
      


  
    
      
      <?php include("./sections/trending.php");?>
      <?php include("./sections/did-you-know.php");?>
      
    
    </div>     
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
<?php if($conn){$conn -> close();}?>