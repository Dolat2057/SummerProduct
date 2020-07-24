<?php require_once('dbconnection.php')?>
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

      <?php include("sections/header.php");?>

      <?php 
        require_once("./sections/heading.php");
        getSectionHeading("Selected Products");
      ?>


      <table class="table table-striped ">
        <thead>
          <tr>
            <th class="border-0 text-uppercase small font-weight-bold">Fan Type</th>
            <th class="border-0 text-uppercase small font-weight-bold">Model type</th>
            <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
            <th class="border-0 text-uppercase small font-weight-bold">Fan Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($_POST['item_selected'] as $item)
            {
              echo "<tr>";
              $sql1 = "SELECT id, product_type,price, model_name, image, speed, power_output FROM fans where id=$item";
              $result = $conn->query($sql1); 
              while($row = $result->fetch_assoc()){
          ?>
          <td><?php echo $row['product_type'];?> </td>
          <td><?php echo $row['model_name'];?> </td>
          <td><?php echo $_POST['quantity'];?> </td>
          <td><?php echo $row['price'];?> </td>
        
          <?php
            }
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
      <?php include("sections/footer.php");?>
    </div>
         

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.4.1.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>