<?php require_once('./common/dbconnection.php')?>
<?php 

    require_once("heading.php");
    getSectionHeading("Related Products");

    if(isset($_GET['product_type']))
    {
        $product_type= $_GET['product_type'];
    }

    if(isset($_GET['product_type']))
    {
        $product_type= $_GET['product_type'];
        $sql1 = "SELECT * FROM skproducts where product_type='$product_type' limit 3";
        $result = $conn->query($sql1); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dfanspage.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php while($row=$result->fetch_assoc()) {?>
            <div class="col-lg-4" >
                    <div class="card">
                        <div class="inner">
                            <img src="./images/sk-products/final/<?php echo $row['image'] ?>" width="100px" height="250px" class="card-img-top" alt="Product Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"><h4><?php echo $row['model_name']?></h4></p>
                            <a href="./productdetail.php?id=<?php echo $row['id'];?>&product_type=<?php echo $row['product_type'];?>" class="btn btn-outline-danger">Explore </a>
                            
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
    
</body>
</html>



