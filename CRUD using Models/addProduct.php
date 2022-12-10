<?php 

/*   require_once 'models/productModel.php'; 

  $name = $_POST['Name'];
  $buyPrice = $_POST['Buying_Price'];
  $sellPrice = $_POST['Selling_Price'];

  if(isset($_POST['display'])) {
    $display = "yes";
  } else {
    $display = "no";
  } 

  $product = [
    'name' => $name,
    'buyPrice' => $buyPrice,
    'sellPrice' => $sellPrice,
    'display' => $display
  ];
 */

?>

<html>
  <head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <form action="addProductDB.php" method="post" enctype="multipart/form-data" style="padding: 80px; width: 400px"> 
        <fieldset style="padding: 40px">
          <legend>ADD PRODUCT</legend>
          <table>
            <tr>
              <label for="name">Name <br></label>
              <input type="text" autocomplete="off" name="Name" value=""> <br>
            </tr>
            <tr>
              <label for="buyPrice">Buying Price <br></label>
              <input type="number" name="Buying_Price" value=""> <br>
            </tr>
            <tr>
              <label for="sellPrice">Selling Price <br></label>
              <input type="number" name="Selling_Price" value=""> <br>
            </tr>
            <tr>
              <hr>
              <input type="checkbox" name="display" value="display" checked> Display <br>
            </tr>
            <tr>
              <hr>
              <input type="submit" name="save" value="SAVE">
            </tr>
          </table>
        </fieldset>
      
      </form>
    </div>
  </body>
</html>

<?php

  if(isset($_POST['save'])) {
    if(!empty($_POST['Name']) && !empty($_POST['Buying_Price']) && !empty($_POST['Selling_Price'])) {

      /* $name = $_POST['Name'];
      $buyPrice = $_POST['Buying_Price'];
      $sellPrice = $_POST['Selling_Price'];

      if(isset($_POST['display'])) {
        $display = "yes";
      } else {
        $display = "no";
      }

      $product = [
        'name' => $name,
        'buyPrice' => $buyPrice,
        'sellPrice' => $sellPrice,
        'display' => $display
      ]; */

      addProduct($product);
    } else {
      echo "Please fill up all the fields!";
    }

  }

?>