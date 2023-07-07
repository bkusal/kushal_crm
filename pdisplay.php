
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
        <button>Add User</button>
        <h1>List of Products</h1>
        <div class="center-div">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>product_name</th>
                            <th>description</th>
                            <th colspan="2">operation</th>
                        </tr>
                        </thead>

                        <tbody>


<?php
include '../include/connect.php';

$sql = "select * from products";

$result = mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['product_name'];
        $description=$row['description'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$description.'</td>
        <td>
        <button class="btn btn-primary" width=10px><a href="pupdate.php?pupdateid='.$id.'" class="text-light">Update</a></button>
        <button  class="btn btn-danger"  width=10px><a href="pdelete.php?pdeleteid='.$id.'" class="text-light">Delete</a></button>
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


                   




            
                       
                  

                  
                        
          