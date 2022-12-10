<?php

include_once "../assets/header.php";
require_once '../Models/databaseCon.php';
require_once '../Models/stationModel.php';
if(count($_POST)>0) {

$con = getConnection();
$sql = "UPDATE stations set station_id='" . $_POST['station_id'] . "', city='" . $_POST['city'] . "', address='" . $_POST['address'] . "', hotline_number='" . $_POST['hotline_number'] . "' WHERE station_id='" . $_POST['station_id'] . "'";
$result = mysqli_query($con, $sql);

if($result != null)
{
  header('location:../views/viewStationAdmin.php');
} else{
  echo "<h2>Database Empty</h2>";
}
}
$con = getConnection();
$sql = "SELECT * FROM stations WHERE station_id='" . $_GET['station_id'] . "'";
$result = mysqli_query($con, $sql);
$row= mysqli_fetch_array($result);

	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Station</title>
  <!-- <link rel="stylesheet" href="../assets/style.css" /> -->
  <link rel="stylesheet" href="../assets/headStyle.css" />
  <link rel="stylesheet" href="../assets/footerStyle.css" />

  <style>
  .main{
    background-color: Thistle;
    width: 200px;
    height: 40px;
    margin: 0 auto;
    text-align: center;
    transition: width 2s linear 1s;

  }

  .main:hover{
    width: 250px;
  }

  table{
    border: 2px solid black;
    border-collapse: collapse;
    width: 70%;
    margin: 0 auto;
  }

  th,td{
    border: 2px solid black;
    padding: 5px;

  }
  th{
    background-color: PowderBlue;
    color: black;
    height: 30px;
  }
  </style>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data" >
    <div class="container">
      <h2>Update Station Details</h2>
      <br>
      <table style:"width=400px;" >

<table>         
    <tr>
       <td><label for="station_id">Station Id</label></td>
       <td><p><?php echo $row['station_id']; ?></p></td>
    </tr>              
        <tr>
          <td><label for="city">City</label></td>
          <td><input value="<?php echo $row['city'] ?>" type="text" autocomplete="off" name="city" value=""></td>
        </tr>
        <tr>
          <td><label for="address">Address</label></td>
          <td><input value="<?php echo $row['address'] ?>"type="text" autocomplete="off" name="address" value=""></td>
        </tr>
        <tr>
          <td><label for="hotline_number">Hotline Number</label></td>
          <td><input value="<?php echo $row['hotline_number'] ?>" type="number" autocomplete="off" name="hotline_number" value=""></td>
        </tr>
        <tr>
          <td colspan="2">
            <center><input type="submit" name="btn" value="Insert"></center>
          </td>
        </tr>
      </table>
    </div>
    </form>

  </body>
</html>