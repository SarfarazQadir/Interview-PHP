<?php

class Database{

  private $con;

  public function connection(){
    $this->con = mysqli_connect("localhost","root","","oop_product");
    if(mysqli_connect_errno()){
      die("connectionfailed".mysqli_connect_error());
    }
  }

  public function insert($name,$price,$quantity,$image,$discription,$date){
    $query = "INSERT INTO `product_details`(`name`, `price`, `quantity`, `image`, `discription`, `date`) VALUES ('$name','$price','$quantity','$image','$discription','$date')";
    $result = mysqli_query($this->con,$query);
    if($result){
      return true;
    }else{
      return false;
    }
  }

  public function fetch(){
    $query = "SELECT * FROM `product_details`";
    $result = mysqli_query($this->con,$query);
    return $result;
  }
  public function delete($id){
    $query = "DELETE FROM `product_details` WHERE id = $id";
    $result = mysqli_query($this->con,$query);
    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function edit($id){
    $query = "SELECT * FROM `product_details`  WHERE id = $id";
    $result = mysqli_query($this->con,$query);
    return $result;
  }

  public function Update($id,$name,$price,$quantity,$image,$discription,$date){
    $query = "UPDATE `product_details` SET `name`='$name',`price`='$price',`quantity`='$quantity',`image`='$image',`discription`='$discription',`date`='$date' WHERE `id`='$id'";
    $result = mysqli_query($this->con,$query);
    if($result){
      return true;
    }else{
      return false;
    }
  }
}

$database = new Database();
$database->connection();

?>