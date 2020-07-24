<?php
    require_once('../common/dbconnection.php');

    if(isset($_POST['action']))
    {
        $sql="select * from skproducts where product_type !=''";

        if(isset($_POST['product_type']))
        {
            $product_type =implode("','", $_POST['product_type']);
            $sql .="AND product_type IN('".$product_type."')";
        }

        $result = $conn->query($sql);
        $output = '';
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $output .=' 
                <div class="col-md-3 mb-2">
                    <form method="post" action="productdetail.php">
                        <div class="card card1">
                            <div class="inner">
                                <img src="./images/'.$row['image'].'" class="card-img-top" alt="Product Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-text modelno">'.$row['model_name'].'</h5>
                                <p>Price:'.$row['price'].'
                                <br>
                                Fan type:'.$row['product_type'].'<p>
                                <input type="hidden" name="product_type<?php echo $count; ?>" value=" '.$row['product_type'].'"/>
                                <input type="hidden" name="price<?php echo $count; ?>" value="'.$row['price'].'"/>
                                <input type="hidden" name="Model_no<?php echo $count; ?>" value="'.$row['model_name'].'"/>
                            </div>
                            <div class="card-body">
                                <a href="productdetail.php?id='.$row['id'].'">Know more </a>
                            </div>
                        </div>
                    <form>   
                </div>';

            }
        }
        else{
            $output="<h3> No Result! </h3>";
        }
        echo $output;
    }

?>