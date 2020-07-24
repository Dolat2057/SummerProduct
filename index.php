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
    <title>Summerking Electrical - Plastic Coolers</title>
  </head>

  <body class="indexclass">
    
  
    <?php include("./sections/nav.php");?>
    <?php include("./sections/carosuel.php");?>
    <?php include("./sections/discover-range.php");?>
    <?php include("./sections/trending.php");?>
    <?php include("./sections/did-you-know.php");?>
    <?php include("./sections/footer.php");?>
  
         

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>

<!-- animation for heading -->
<script type="text/javascript">
$('.section-heading').hover(function(){
    $(this).toggleClass("animate__animated animate__pulse");
    }); 
</script>
<?php if($conn){$conn -> close();}?>
