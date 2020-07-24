<?php require_once('../../../common/dbconnection.php')?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Summerking</title>
  </head>

  <body>
  <div class="container">
  <div class="row ">
               <div class="col-sm-12 section-card">
                     <h1><img src="../../../images/logo.png" alt="Summerking Logo"></h1>
               </div>
         </div>
         <div class="clearfix"></div>	
         <div class="clearfix"></div>
<div class="card">

<h1 class="white-text"> Confirm Quotation</h1>

<table class="table">
<thead>
  <th>Product Name</th>
  <th>Image</th>
  <th>Selected Quantity</th>
</thead>
<?php 


  foreach ($_POST as $key => $value) {
        if($value){
          $key= str_replace('_',' ',$key);
        $sql= "Select * from skproducts where model_name='$key'";
        
        $result = $conn->query($sql);

        if($result->num_rows > 0) 
        {
            
            while($row = $result->fetch_assoc()) 
            { 
              echo "<tr>";
      echo "<td>";
      echo $row['model_name'];
      echo "</td>";
      ?>
      <td><img class="tableimg" src="../../../images/productImages/<?php echo $row['image'] ?>" alt="Product Image"></td>
      <?php
      echo "<td>";
      echo $value;
      echo "</td>";
      echo "</tr>";
            }
        }
      

        }

     
  }


?>


</table>	

<div class="button-panel">

<button type="submit" class="btn btn-outline-danger card-link" name='add_to_cart'> Confirm </button>

<button class="btn btn-outline-success card-link" onclick="goBack()"> Edit </button>
<button class="btn btn-outline-info card-link" onclick="goBack()"> Dealer Portal </button>

</div>



</div>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>

<script>
function goBack() {
window.history.back();
}
</script> 