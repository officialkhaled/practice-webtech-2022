<!-- Admin UI -->

<html>
  <head>
    <title>Admin Home</title>
    <link rel="stylesheet" href="style.css" />

        <!-- Header File -->
        <?php include "header_admin.php" ?>
        
  </head>

  <body>
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
      <!--
    <table
      border="2"
      align="center"
      width="1080px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
    >
    <tr>
      <td>
          <nav style="margin: 10px 10px; display: block; float: left">
            
            <h1>Train Station System</h1>
            <h5>A Complete Application for Railway Train System</h5>
          </nav>
          <img
            src="img/train-station.png"
            alt="Company Logo"
            width="70px" height="70px"
            style="margin: 30px 20px; 
            float:right"
          />
        </td>
      </tr>
      <tr>
        <td>
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="adminHome.php">Home</a> |
            <a href="dashboard_admin.php">Dashboard</a> |
            <a href="viewStation.php">Station</a> |
            <a href="viewApplicants.php">Applicants</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr> -->
    <!-- Top Bars (end) -->

      <tr>
        <td>
          <?php
            session_start();
          
            $file = "inquiry.txt";
            $f = fopen($file, "r") or exit("Unable to open file!");
            // read file line by line until the end of file (feof)
            while(!feof($f))
            {
              echo fgets($f)."<br />";
            }

            fclose($f); 
          ?>
        </td>
      </tr>
      
      <tr align="center">
        <td>
          <nav>
            <a href="t&c_log.php">Terms & Conditions</a> |
            <a href="privacyPolicy_log.php">Privacy Policy</a> |
            <a href="aboutUs_log.php">About us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
