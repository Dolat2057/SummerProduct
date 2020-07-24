
  

<div id="product-table" class="section-card">
     
     <button id="btn-registerProduct" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#addProductModal">
      <i class="fas fa-plus-square"></i> Register Product
      </button>

<h2 class="register">Registered Products</h2>
<br/><br/><br/>

<div class="col-lg-12 " id="table-wrapper">
<table id="table-registered-products" class="table table-bordered table-responsive table-hover ">
        <thead>
            <tr>
                <th>Product Registration Id</th>
                <th>User Name</th>
                <th>Model Number</th>
                <th>Serial Number</th>
                <th>Purchase Date</th>
                <th>Invoice</th>
                <th>Actions</th>
            
            </tr>
        </thead>
        <tbody>
            <?php
             $user_name=$_SESSION['username'];
            $sql = "SELECT * FROM product_registration_id  where username = '$user_name'";
            $result = mysqli_query($conn , $sql);

            if(mysqli_num_rows ($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                
                echo "<td>" . $row["product_registration_id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["model_number"] . "</td>";
                echo "<td>" . $row["serial_number"] . "</td>";
                echo "<td>" . $row["purchase_date"] . "</td>";
                echo "<td>" . $row["invoice_image"] . "</td>";
                echo '<td>

                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-info editbtn">Edit</button>
                          <button type="button" class="btn btn-outline-success servicebtn">Service</button>
                          <button  type="button" class="btn btn-outline-danger deletebtn">Delete</button>
                        </div>
                     </td>';

                

                 echo "</tr>";

                }
            }
           
            else{
             echo "No products Registerd For You";
            }

            ?>
        </tbody>
    </table>
</div>
</div>




<script>
    $(document).ready(function() {
    $('#table-registered-products2').DataTable({
        "dom": '<"pull-left"f><"pull-right"l>tip'
    });
} );
</script>
