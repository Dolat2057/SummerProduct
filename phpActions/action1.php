<?php
    require 'dbconnection.php';
    if(isset($_POST['action']))
    {
        $sql="select * from skproducts where product_type !=''";

        if(isset($_POST['product_type'])){
            $product_type =implode("','", $_POST['product_type']);
            $sql .="AND product_type IN('".$product_type."')";
        }


?>

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Image</th>
            <th class="th-sm">Type</th>
            <th class="th-sm">Model_type</th>
            <th class="th-sm">Price</th>
            <th class="th-sm">quantity</th>
            <th class="th-sm">Select</th>
            
      
            
        </tr>
    </thead>


<?php
    $result = $conn->query($sql);
    $output = '';
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $output .=' 
                <div class="col-md-3">
                    <tbody>
                        <td><img class="tableimg" src="./images/'.$row['image'].'"alt="Product Image"></td>
                        <td>'.$row['product_type'].'</td>
                        <td>'.$row['product_type_type'].'</td>
                        <td> '. number_format($row['fan_price']).'</td>
                        <td><input type="number" id="quantity"></td>
                        <td><input type="checkbox" value=""></td>
                    </tbody>   
                </div>';

            }
            
        }
        else
        {
            $output="<h3> No Result! </h3>";
        }
        echo $output;
    }
?>