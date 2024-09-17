<?php

include "../Config/connection.php";

$id = $_GET['id'];

$res = $database->edit($id);
$row = mysqli_fetch_assoc($res);

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

    $sql = $database->update($id,$name,$price,$quantity,$image,$discription,$date);
    if($sql){
        echo "Data Updated Successfully";
        header('Location:fetch.php');
    }else{
        echo "Data Not Updated";
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
<title>UPDATE Crud</title>
</head>
<body>
    <h1>UPDATE CRUD</h1>
<form enctype="multipart/form-data" method="post">
    <input type="text" value="<?php echo $row['name']?>" name="name"><br>
    <input type="number"value="<?php echo $row['price']?>" name="price"><br>
    <input type="number" value="<?php echo $row['quantity']?>" name="quantity"><br>
    <input type="file"  name="image"><img height="100px" width="100px" src="<?php echo $row['image']?>" alt="" srcset=""><br>
    <input type="text" value="<?php echo $row['discription']?>" name="discription"><br>
    <input type="date" value="<?php echo $row['date']?>" name="date"><br>
    <input type="submit" value="Update" name="btninsert"><br>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>