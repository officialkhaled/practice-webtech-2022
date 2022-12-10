<?php

include_once "../assets/header.php";
require_once '../Models/databaseCon.php';
//require_once '../Models/stationModel.php';
$con = getConnection();
$sql = "SELECT * FROM stations";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
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
  a{
    text-decoration:none;
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
						   <th>
							<center>  Station ID  </center><br>
							</th>
							<th>
							<center>  City  </center><br>
							</th>
                            <th>
							<center>  Address  </center><br>
							</th>
                            <th> 
								<center> Hotline Number </center><br>
                            </th>
                            <th> 
								<center> Action </center><br>
                            </th>
</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><center><?php echo $row["station_id"]; ?></center></td>
		<td><center><?php echo $row["city"]; ?></center></td>
		<td><center><?php echo $row["address"]; ?></center></td>
		<td><center><?php echo $row["hotline_number"]; ?></center></td>
		<td><center><a href="../controllers/editStationCheck.php?station_id=<?php echo $row["station_id"]; ?>">Edit</a></center></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
    </div>
    </form>

  </body>
</html>

