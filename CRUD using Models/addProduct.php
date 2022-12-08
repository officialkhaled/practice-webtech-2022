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