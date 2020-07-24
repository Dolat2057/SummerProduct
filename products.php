<?php require_once('./common/dbconnection.php')?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Animation Script for heading -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/dfanspage.css">
    <title>Products | Summerking India Pvt Ltd.</title>

  </head>
  <body>
 <div class="container-fluid">
  
    <?php include("./sections/nav.php");?>
    
    

  
    <div class="row">
        <div class="col-lg-12 col-md-12">        
            <img src="./images/website/2-1.png" alt="Banner" width="100%">
        </div>
    </div>

        
       
    <div class="row">
        <div class="col-lg-3 col-md-3 productlink">
            <?php 
                require_once("./sections/heading.php");
                getSectionHeading("Select Product");
            ?>
            <hr>
            

        </div>

        <div class="col-lg-9 col-md-9">
            <?php 
                require_once("./sections/heading.php");
                getSectionHeading("Product Catalog");
            ?>
            <hr>
           
            <div class="text-center"> 
                <img src="./images/1_CsJ05WEGfunYMLGfsT2sXA.gif" id="loader" width="200" style="display:none;">
            </div> 
           
        
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-m-6 col-6">
            <ul class="list-group">
                <?php
                    $sql="select distinct product_type from skproducts order by product_type";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <a href="products.php?product_type=<?=$row['product_type'];?>" class="form-check-input product_check"> <?=$row['product_type'];?></a>
                        </label>
                    </div>        
                </li>
                <?php } ?>
            </ul>
        </div>

        <?php
            if(isset($_GET['product_type'])){
                $product_type= $_GET['product_type'];
                $sql1 = "SELECT * FROM skproducts where product_type='$product_type'";
                $result = $conn->query($sql1); 
            }
            if(isset($_GET['search']))
            {
                $id= $_GET['search'];
                $sql1 = "SELECT id, product_type,price, model_name, image, speed, power_output FROM skproducts where  product_type Like '%$id%' OR model_name Like '%$id%'";
                $result = $conn->query($sql1); 
            }
           if ($result->num_rows == 0)
                {
                    require_once("./sections/heading.php");
                    getSectionHeading("No Results Found");
                }
           
            while($row=$result->fetch_assoc()) {?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="card" style="margin-top:2px; margin-bottom:10px; padding:20px; height:31rem;">
                        <div class="inner">
                            <img class="card-img-top" src="./images/sk-products/final/<?php echo $row['image'] ?>"   width="100px" height="250px"  alt="image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"><h5><?php echo $row['model_name']?></h5></p>
                            <p>Price: <?php echo $row['price'];?>
                            <br>
                            Type: <?php echo $row['product_type'];?><p>
                            <a href="./productdetail.php?id=<?php echo $row['id'];?>&product_type=<?php echo $row['product_type'];?>" class="btn btn-outline-danger">Explore </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                      
    </div>                       
    <?php include("./sections/footer.php");?>
    </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
    $(".product_check").click(function(){
        $("#loader").show();
        var action = 'data';
        var product_type = get_filter_text('product_type');
        $.ajax({
        url:'./phpActions/consumeraction.php',
        method:'POST',
        data:{action:action,product_type:product_type},
        success:function(response){
        $("#result").html(response);
        $("#loader").hide();
        $("#textchange").text("Filtered Categories");
       }
    });
    });
    function get_filter_text(text_id){
    var filterData=[];
    $('#'+text_id+':checked').each(function(){
    filterData.push($(this).val());
    });
    return filterData;
    }
    });
</script>


<!-- Animation Script for heading -->
<script type="text/javascript">

$('.section-heading').hover(function(){
    $(this).toggleClass("animate__animated animate__pulse");
    }); 
</script>
