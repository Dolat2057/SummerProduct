<!DOCTYPE html>
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
        <title>Add Products</title>
    </head>
    <body>
    <div class="container-fluid">
        <?php include ("./sections/nav.php");?>

        <div class="row">
            <div class="col-lg-12">
                <img src="./images/website/banner_home.jpg" width="100%" alt="Banner Home">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?php 
                    require_once("./sections/heading.php");
                    getSectionHeading("Add Products");
                ?>
            </div>
           
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                        <select id="product_category" name="product_type" class="form-control brand_search">
                            <option value="">None</option>
                            <option value="Ceiling Fan">Ceiling Fan</option>
                            <option value="Multipurpose Fan">Multipurpose Fan</option>
                            <option value="Plastic Air Coolers">Plastic Air Coolers</option>
                            <option value="water heater">Water heater</option>
                            <option vlaue="Room Heaters">Room Heaters</option>
                            <option vlaue="Home Appliances">Home Appliances</option>
                            <option vlaue="Immersion rod">Immersion Rod</option>
                            <option vlaue="Accessories">Accessories</option>
                        </select>
                              
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="model_number" placeholder="Enter Model Number">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="model_name" placeholder="Enter Model Name">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="file" name="file">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="speed" placeholder="Enter Speed">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="power_output" placeholder="Enter Power">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="energy" placeholder="Enter Product Energy">
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" type="text" name="description" placeholder="Enter Product Desrciption"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="sweep" placeholder="Enter Sweep">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="air_delivery" placeholder="Enter Air Delivery">
                    </div>
                   
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="tank_sze" placeholder="Enter Tank Size">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="length" placeholder="Enter Product Length">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="width" placeholder="Enter Product Width">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="height" placeholder="Enter Product Height">
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control" type="text" name="gross_weight" placeholder="Enter Product Weight">
                    </div>

                    <input type="submit" name="add_product" class="btn btn-outline-danger" value="Add Product">
                
                </form>
            </div>
        </div>

        <?php 
            include("./sections/discover-range.php");
            include("./sections/footer.php");
        ?>



    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js"></script>    
    </body>


    <!-- Animation Script for heading -->
    <script type="text/javascript">

    $('.section-heading').hover(function(){
        $(this).toggleClass("animate__animated animate__pulse");
        }); 
    </script>
</html>
<?php
   require_once('./common/dbconnection.php');
   if(isset($_POST['add_product']))
   {    
        $model_number= $_POST['model_number'];
        $product_type= $_POST['product_type'];
        $model_name= $_POST['model_name'];        
        $speed=$_POST['speed'];
        $power_output=$_POST['power_output'];
        $energy=$_POST['energy'];
        $description=$_POST['description'];
        $sweep=$_POST['sweep'];
        $air_delivery=$_POST['air_delivery'];
        $tank_size=$_POST['tank_size'];
        $length=$_POST['length'];
        $width=$_POST['width'];
        $height=$_POST['height'];
        $gross_weight=$_POST['gross_weight'];

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_loc= $_FILES['file']['tmp_name'];

        $file_store= "./images/sk-products/final/".$file_name;

        move_uploaded_file($file_tem_loc,$file_store);

        

        $sql = "INSERT INTO skproducts (model_number,product_type,price,model_name,image,speed,power_output,energy,description,sweep, air_delivery,tank_size,ad,lenght,width,height,dimension,gross_weight)
            VALUES('$model_number','$product_type',0,'$model_name','$file_name','$speed','$power_output','$energy','$description','$sweep','$air_delivery','$tank_size',0,'$lenght','$width','$height',0,'$gross_weight')";

        $result = mysqli_query($conn,$sql);
        echo $sql;
       
        if($result){
        echo "<script>alert('Your Product is Added successfully');</script>";
    
        }
        else{
        echo "Submition failed ! try again";
    
        }
   }
   

?>