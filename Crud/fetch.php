<?php

include "../Config/connection.php";

$row = $database->fetch();   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/cerulean/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Fetch Data</title>
</head>
<body>
    <table class="table" border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>IMAGE</th>
                <th>DISCRIPTION</th>
                <th>DATE</th>
                <th colspan="2">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($res = mysqli_fetch_assoc($row)){
            ?>
            <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['price']?></td>
                <td><?php echo $res['quantity']?></td>
                <td><img src="<?php echo $res['image']?>" height="100px" width="100px"></td>
                <td><?php echo $res['discription']?></td>
                <td><?php echo $res['date']?></td>
                <td>
                    <a href="update.php?id=<?php echo $res['id']; ?>" class="btn btn-success">Update</a>
                    <a href="delete.php?id=<?php echo $res['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>    
        </tbody>
    </table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>