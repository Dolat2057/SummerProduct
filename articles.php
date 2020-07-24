<?php require_once('common/dbconnection.php')?>
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
        <?php include("./sections/nav.php");?>

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <?php 
                    require_once("./sections/heading.php");
                    getSectionHeading("Blogs");
                ?>
            </div>
            <div class="col-lg-2"></div>
        </div>
        
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <?php 
                    if(isset($_GET['article_id'])){
                        $article_id=$_GET['article_id'];
                        $sqli="SELECT * FROM articles WHERE article_id='$article_id'";
                        $result=$conn->query($sqli);
                    }
                    
                    while($row=$result->fetch_assoc()) {?>
                    <img src="<?php echo $row['article_image']?>" height="500px" width="100%" alt="pedestal fan">
            </div>
            <div class="col-lg-2"></div>
        </div>
        
        <div class="row" style="margin:50px;">
            <div class="col-lg-8 offset-lg-2">
                <h3><?php echo $row['article_name']?></h3>
            </div>
            <div class="col-lg-2"></div>
        </div>
        
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php echo $row['article_body'];?>
                <br>
              
            </div>
            <div class="col-lg-1"></div>
        </div>  
          
       <?php }?>

    
        <?php include("./sections/discover-range.php");?>
        <?php include("./sections/footer.php");?>
    
         

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.4.1.js" ></script>
        <script src="./js/popper.min.js" ></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
<?php if($conn){$conn -> close();}?>