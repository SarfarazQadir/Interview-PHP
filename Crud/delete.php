<?php

include "../Config/connection.php";

$id = $_GET['id'];

$res = $database->delete($id);
if ($res) {
    header('Location:fetch.php');
    echo "<script>alert('Data deleted successfully')</script>";
} else {
        echo "<script>alert('Dlete Failed')</script>";
        }

?>