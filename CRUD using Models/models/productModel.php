<?php

  require_once 'dbConnect.php';

  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $_POST['sellPrice'] - $_POST['buyPrice'];

  $product = ['name'=>$name, 'buyPrice'=>$buyPrice, 'sellPrice'=> $sellPrice, 'profit'=>$profit];

  /* SQL QUERIES */
  function insertProduct ($product) {
    if($name == "" || $buyPrice == "" || $sellPrice == ""){
      echo "<h2>Missing field(s) detected!</h2><br>";
    } else{
      $con = getConnection();
      
      // Check connection
      if($con === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
      }
  
      $sql = "INSERT INTO products VALUES ('', '{$name}', '{$buyPrice}', '{$sellPrice}', '{$profit}')";
  
      $status = mysqli_query($con, $sql);
  
      if($status) {
        echo "msg()";
        header('location: ../products.php');
      } else {
        echo "<h2>Database error!</h2>";
      }
      
    }
  }

  function editProduct ($product) {
    $con = getConnection();

    if(isset($_GET['edit'])) {
      $id = $_GET['edit'];
      $sql = "UPDATE products SET name = '{$name}', buyPrice = '{$buyPrice}', sellPrice = '{$sellPrice}', profit = '{$profit}' WHERE ID = $id";
      $result = mysqli_query($con, $sql);
  
      if($result) {
        echo "<h2>Record updated successfully</h2>";
        header('location: products.php');
      } else {
        echo "<h2>Error updating record: </h2>" . mysqli_error($con);
      }
  
      mysqli_close($con);
    }
  }

  function deleteProduct ($product) {
    $con = getConnection();
    
    if(isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $sql = "DELETE FROM products WHERE ID = $id";
      $result = mysqli_query($con, $sql);
  
      if($result) {
        echo "<h2>Record deleted successfully</h2>";
        header('location: products.php');
      } else {
        echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
      }
  
      mysqli_close($con);
    }
  }
?>