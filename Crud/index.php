<?php

include "../Config/connection.php";

if(isset($_POST['btninsert'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discription = $_POST['discription'];
    $date = $_POST['date'];
    $imagename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $image = "../Image/".$imagename;
    move_uploaded_file($tmpname, $image);

    $sql = $database->insert($name,$price,$quantity,$image,$discription,$date);
    if($sql){
        echo "Data Inserted Successfully";
    }else{
        echo "Data Not Inserted";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Crud</title>
</head>
<body>
    <h1>CRUD</h1>
<form enctype="multipart/form-data" method="post">
    <input type="text" name="name"><br>
    <input type="number" name="price"><br>
    <input type="number" name="quantity"><br>
    <input type="file" name="image"><br>
    <input type="text" name="discription"><br>
    <input type="date" name="date"><br>
    <input type="submit" value="Add" name="btninsert"><br>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>