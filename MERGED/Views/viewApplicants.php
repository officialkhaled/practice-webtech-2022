<!-- Admin UI -->

<html>
  <head>
    <title>View Applicants</title>
    <link rel="stylesheet" href="../assets/style.css">

  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">

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
          View Applicants
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
        <fieldset>
          <legend>APPLICANTS</legend>
          <table style="margin: 30px;"s>
            <tr>
              <nav>
                <td><strong>Name</strong></td>
                <td><strong>Email</strong></td>
                <td><strong>Position</strong></td>
              </nav>
            </tr>
            <tr>
              <nav>
                <td>Jahangir Haque</td>
                <td>jahangir@aiub.edu</td>
                <td>Administration</td>
              </nav>
            </tr>
            <tr>
              <nav>
                <td>Rafique Uddin</td>
                <td>rafiq@nsu.edu</td>
                <td>Manager</td>
              </nav>
            </tr>
            <tr>
              <nav>
                <td>Farhad Hossain</td>
                <td>farhad@nsu.edu</td>
                <td>Security Officer</td>
              </nav>
            </tr>
            <tr>
              <nav>
                <td colspan="3"><hr></td>
              </nav>
            </tr>
            <tr>
              <nav>
                <!--
                <td><input type="submit" name="addEmp" value="Hire Employee"></td> 
                <td><input type="submit" name="updateEmp" value="Update Employee" onclick="msg()"></td>
                <td><input type="submit" name="deleteEmp" value="Fire Employee"></td>
                -->
                <td><button type="reset" onclick="location.href='hireEmp.php'">Hire Employee</button></td>
                <!--
                <td><button type="reset" onclick="location.href='updateEmp.php'">Update Employee</button></td>
                -->
                <td><input type="submit" name="updateEmp" value="Update Employee" onclick="msg()"></td>
                <td><button type="reset" onclick="location.href='fireEmp.php'">Fire Employee</button></td>
              </nav>
            </tr>
          </table>
        </fieldset>
        </td>

      </tr>

<!-- script for under developed buttons -->
<script>
  function msg() {
    alert("This function is still under development. Please check again later. Thank you.");
  }
</script>

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
