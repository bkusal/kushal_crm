
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"  >
</head>
<body>

    <div class="main-div">
      
        <h1>Customer's <Details></Details></h1>
        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>subject</th>
                            <th>product_id</th>
                            <th>customer_id</th>
                            <th>image</th> 
                            <th colspan="2">operation</th>
                        </tr>
                        </thead>

                        <tbody>


<?php
include '../include/connect.php';

$sql = "select * from customer_queries";

$result = mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $subject=$row['subject'];
        $product_id=$row['product_id'];
        $customer_id=$row['customer_id'];
        $image= $row['image'];
        
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$subject.'</td>
        <td>'.$product_id.'</td>
        <td>'.$customer_id.'</td>
        <td>'.$image.'</td>
        
        <td>
        <button class="btn btn-primary" width=10px><a href="customerup.php?customerupid='.$id.'" class="text-light">Update</a></button>
        <button  class="btn btn-danger"  width=10px><a href="cusdelete.php?cusdeleteid='.$id.'" class="text-light">Delete</a></button>
        </td>

        </tr>';
        
    }

}
?>
    </div>
</div>
</div>
</body>
</html>


                   




            
                       
                  

                  
                        
          