<!-- Admin UI -->

<!-- PHP -->
<?php 

  session_start();

?>

<!-- HTML -->
<html>
  <head>
    <title>Fire Employee</title>
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
    <form action="fireCheck_admin.php" method="post" enctype="multipart/form-data">

    <table
      border="2"
      align="center"
      width="1080px"
      style="border-collapse: collapse; margin-top: 30px; margin-bottom: 50px;"
    >

    <tr>
      <td colspan="2">
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
          Hire Employee
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="viewStation.php">View Station</a></li>
            <li><a href="editStation.php">Edit Station</a></li>
            <li><a href="reviewFeedback.php">Review Feedback</a></li>
            <li><a href="viewApplicants.php">View Applicants</a></li>
          </ul>
        </td>
        <td style="padding: 80px">
          <form action="regCheck.php"  method="post" enctype="multipart/form-data">
            <fieldset>
              <legend>FIRE EMPLOYEE</legend>
              <table>
                <tr>
                  <input type="checkbox" name="selectEmp" value="emp_1">
                  <label for="emp_1">
                    Sadia Hossain
                </label> <br><br>
                  <input type="checkbox" name="selectEmp" value="emp_2"> <label for="emp_2">
                    Sadman Pranto
                </label> <br><br>
                  <input type="checkbox" name="selectEmp" value="emp_3"> <label for="emp_3">
                    Moinul Islam
                </label> <br><br>
                  <input type="checkbox" name="selectEmp" value="emp_4"> 
                  <label for="emp_4">
                    Saptanil Ghose
                </label> <br><br>
                </tr>
              </table>
              <button type="reset" onclick="location.href='fireCheck_admin.php'">Next</button>
            </fieldset>
          </form>
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
