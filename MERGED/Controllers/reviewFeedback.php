<html>
  <head>
    <title>Review Feedback Station</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="checkFeedback.php" method="post" enctype="multipart/form-data">
    <table
      border="2"
      align="center"
      width="1080px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
    >
    <!-- Top Bars (start) -->
    <tr>
      <td colspan="2">
          <nav style="margin: 10px 10px; display: block; float: left">
            <!--<a href="contactUs_log.php">Contact Us</a>-->
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
        <td colspan="2">
          <nav style="margin: 30px 20px; display: block; float: right">
            <a href="adminHome.php">Home</a> |
            <a href="dashboard_admin.php">Dashboard</a> |
            <a href="viewStation.php">Station</a> |
            <a href="viewApplicants.php">Applicants</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr>
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding-bottom: 100px; ">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          Review Feedbacks
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="viewStation.php">View Station</a></li>
            <li><a href="editStation.php">Edit Station</a></li>
            <li><a href="reviewFeedback.php">Review Feedbacks</a></li>
            <li><a href="viewApplicants.php">View Applicants</a></li>
          </ul>
        </td>
        <td style="padding: 80px">
          <fieldset>
            <legend>FEEDBACKS</legend>
            
              <table>
                <tr>
                  <td>
                    <input type="submit" name="chk" value="Check Reviews">
                  </td>
                </tr>
              </table>
          </fieldset>
        </td>
      </tr>

      <tr align="center">
        <td colspan="2">
          <nav>
            <a href="t&c_admin.php">Terms & Conditions</a> |
            <a href="privacyPolicy_admin.php">Privacy Policy</a> |
            <a href="aboutUs_admin.php">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
