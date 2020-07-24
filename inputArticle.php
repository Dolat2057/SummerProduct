<!DOCTYPE html>
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
    <img class="d-block w-100" src="images/website/slider3.jpg"alt="Article Banner">
    <div class="container">    
      <form class="articleform" action="?" method="post" enctype="multipart/form-data">
        <h3 class="articlehead">Insert Your Article Here</h3>
        <input type="text" class="form-control articlefields" id="exampleFormControlInput1" placeholder="Article Name" name="article_name" required>
        <textarea class="form-control articlefields" id="exampleFormControlTextarea1" rows="5" placeholder="Article Body" name="article_body" required></textarea>
        <textarea class="form-control articlefields" id="exampleFormControlTextarea1" rows="5" placeholder="Article Body" name="article_body1" required></textarea>
        <p><input class="articlefields" type="file" name="file"> </p>
        <p><input class=" btn btn-outline-danger articlebtn" type="submit" name="upload" value="Submit"></p>   
      </form>
    </div>
    <?php include("./sections/discover-range.php");?>
    <?php include("./sections/footer.php");?>
      
      
    <script src="./js/jquery-3.4.1.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>

<?php
  require_once('common/dbconnection.php');
  if(isset($_POST['upload']))
  {
    $file_name= $_FILES['file']['name'];
    $file_type= $_FILES['file']['type'];
    $file_size= $_FILES['file']['size'];
    $file_tem_loc= $_FILES['file']['tmp_name'];
    $file_store= "upload-images/".$file_name;
    
    move_uploaded_file($file_tem_loc,$file_store);
        
    $article_name=mysql_real_escape_string($_POST['article_name']);
    $article_body=mysql_real_escape_string($_POST['article_body']);
    $article_body1=mysql_real_escape_string($_POST['article_body1']);
    $sql = "INSERT INTO articles (article_name,article_body,article_body1,article_image)
            VALUES('$article_name','$article_body','$article_body1','$file_name')";
    $result = mysqli_query($conn , $sql);
    echo $sql;
    if($result){
    echo "<script>alert('Your article is submitted successfully');</script>";
 
    }
    else{
    echo "Submition failed ! try again";
  
    }
  }
?>