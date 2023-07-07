<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    
    
</head>
<body>
    <header>
       
<nav>
    <div class="toogle">
        <i></i>
    </div>
    <ul>
         <li><a href="home.html"><h1>CRM</h1></a></li> 
        <li><a href="display.php"><i>Display data</i></a></li>
        <li><a href="adminlogin.php"><i>Admin login</i></a></li>
        <li><a href="regis.php"><i>Register</i></a></li>
        <li><a href="customer.php"><i>Customer</i></a></li>
        <li><a href="product.php"><i>Product</i></a></li>
    </ul>

</nav>
    </header>
    

    <div class="F">
        <h1>Customer's Queries</h1><br><br>
        <form action="queries.php" method="post">
            <label for="subject"><h4>Subject:</h4></label>
            <input type="textfield" id="textfield" name="subject"><br><br>
       <label for="image"><h4>Upload image:</h4></label>
        <input type="file"
        id="photo" 
        name="image"
        accept="image/*"
        value="Upload The Picture"><br><br>
    
        <input type="submit" name="okk">

       
        </form>
    </div>
    
</body>
</html>



<?php

include '../include/connect.php';
if(isset($_POST['okk'])){

    $filename=$_FILES['name'];
    $filepath = $_FILES['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror == 0){
        $destfile = 'upload/'.$filename;
        move_upload_file($filepath, $destfile);
    }

    $subject = $_POST['subject'];
    $image = $_POST['image'];
   
    
   
        $insertdata="insert into customer_queries(subject, product_id, customer_id, image) values('$subject','$product_id','$customer_id', '$image')" ;
        $result= mysqli_query($con,$insertdata);
        
        if($result){
            move_uploaded_file($_FILES["image"],["tmp_name"],"queries/".$_FILES["image"]["name"]);

            $_SESSION['success'] = "Data submitted" ;
            header("Location:cqueries.php");
        }else{
            $_SESSION['success'] = "Data not submitted" ;
            header("Location:cqueries.php");
        }
    }    
}

?>