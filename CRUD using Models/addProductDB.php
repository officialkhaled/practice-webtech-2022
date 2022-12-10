<?php

  session_start();
  require_once('models/productModel.php');
  

  $name = $_POST['name'];
  $buyPrice = $_POST['buyPrice'];
  $sellPrice = $_POST['sellPrice'];
  $profit = $sellPrice - $buyPrice;

  $product = ['', 'name'=>$name, 'buyPrice'=>$buyPrice, 'sellPrice'=> $sellPrice, 'profit'=>$profit];

  /* insert Operation */
  if(isset($_POST['save'])) {
    if(!empty($_POST['Name']) && !empty($_POST['Buying_Price']) && !empty($_POST['Selling_Price'])) {
      $con = getConnection();
      addProduct($product);
    } else {
      echo "Please fill up all the fields!";
    }

  }


/*   if($name == "" || $buyPrice == "" || $sellPrice == ""){
    //header('location: addProduct.php');
    echo "<h2>Missing field(s) detected!</h2><br>";
  } else{
    $con = getConnection();
    
    // Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT into products VALUES ('', '{$name}', '{$buyPrice}', '{$sellPrice}', '{$profit}')";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: products.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    
  } */

?>