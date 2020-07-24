<div class="row">

<div id="products" class="col-md-12 card">



     <h1 class="section-heading">Request Quotation</h1>

        <div class="alert alert-success" role="alert">
            <h4> Instructions :</h4>
            <div class="instructions">
                <ul>
                    <li> You can select products and provide quantity and press button REQUEST QUOTATION </li>
                    <li> Once done, A copy of this request will be sent to you on your registered email</li>
                    <li> Summerking Team will evaluate your request and will reach out to you</li>
                </ul>
            </div>
        </div>

    <h2 >Available Products</h2>
    
    <form method='POST' action='phpActions/cart.php'>  
    

	<table class="table  table-stripped table-hover" id="products_table">
        <thead>
            <tr><th>Image</th>
                <th>Name</th>
                <th>Speed</th>
                <th>QTY</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 

        require_once('../../common/dbconnection.php');
            $sql = "SELECT * FROM skproducts";
            $result = $conn->query($sql);

            if($result->num_rows > 0) 
            {
                
                while($row = $result->fetch_assoc()) 
                { 
                       ?>
                         <td><img class="tableimg" src="../../images/sk-products/final/<?php echo $row['image'] ?>" alt="Product Image"></td>
                         <td><?php echo $row['model_name']; ?></td>
                         <td><?php echo $row['speed']; ?></td>
                                                
                    <?php
                        echo "<td><input type='number' max='9999' min='0' name='".$row['model_name']."'></td>";
                        
                        echo "</tr>";
                      
                }
                
            }

            ?>

        </tbody>
       
    </table>
    
    <button type="submit" class="btn btn-lg btn-danger" name='add_to_cart'> Request Quotation</button>
    </form>


    
   


</div>