<?php

  require_once ('models/dbConnect.php');  

  $con = getConnection();
  $sql = "select * from products";
  $result = mysqli_query($con, $sql);

  /* if(isset($_GET['edit'])){
    header ('location: editProduct.php');
  }  */


  /* 
  if(count($_POST)>0) {
    mysqli_query($con,"UPDATE products SET first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($conn,"SELECT * FROM employee WHERE userid='" . $_GET['userid'] . "'");
    $row= mysqli_fetch_array($result);
  */

?>

<html>
  <head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data" style="padding: 80px; width: 400px"> 
      <fieldset>
        <legend>PRODUCT INFO</legend>
        <table>
          <tr>
            <td><label for="name">Name</label></td>
            <td>
            
            <?php
      
            if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                //echo "<tr>";
                echo "<th>{$row['Name']}</th>";
                //echo "<td><center>{$row['Profit']}</center></td>";
              }
            } 
      
            ?>
           </td>
          </tr>
          <tr>
            <td><label for="buyPrice">Buying Price</label></td>
              <td>
              
              <?php
      
              if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  //echo "<tr>";
                  echo "<th>{$row['Buying_Price']}</th>";
                  //echo "<td><center>{$row['Profit']}</center></td>";
                }
              } 
      
              ?>
            </td>
          </tr>
          <tr>
            <td>
      
            </td>
          </tr>
        </table>
      </fieldset>
        <fieldset style="padding: 40px">
          <legend>EDIT PRODUCT</legend>
          <table>
            <tr>
              <label for="name">Name <br></label>
              <input type="text" autocomplete="off" name="name" value=""> <br>
            </tr>
            <tr>
              <label for="buyPrice">Buying Price <br></label>
              <input type="number" name="buyPrice" value=""> <br>
            </tr>
            <tr>
              <label for="sellPrice">Selling Price <br></label>
              <input type="number" name="sellPrice" value=""> <br>
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


  if(isset($_POST['']))

  if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    
    header ('location: editProduct.php');
  }

?>