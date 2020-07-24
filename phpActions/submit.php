<?php require_once('dbconnection.php')?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>invoice</title>
  </head>
  <body>
    <div class="container">
      <table class="table table-striped ">
        <thead>
          <tr>
            <th class="border-0 text-uppercase small font-weight-bold">Product Type</th>
            <th class="border-0 text-uppercase small font-weight-bold">Model Name</th>
            <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
            <th class="border-0 text-uppercase small font-weight-bold">Price</th>
          </tr>
        </thead>
          <?php 
            $data = $_POST['item_selected'];
            $sql1 = "SELECT id, product_type,price, model_name, image, speed, power_output FROM skproducts where id=$data";
            $result = $conn->query($sql1); 
            while($row = $result->fetch_assoc())
            {
          ?>
        <tbody>
          <td><?php echo $row['product_type'];?> </td>
          <td><?php echo $row['model_name'];?> </td>
          <td><?php echo $row['product_type'];?> </td>
          <td><?php echo $row['price'];?> </td>
        </tbody>
        <?php }?>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>