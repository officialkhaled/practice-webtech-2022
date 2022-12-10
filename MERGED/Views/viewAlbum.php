<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/style.css">
   
  </head>
  <body>
 
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
            <a href="cusHome.php">Home</a> |
            <a href="dashboard_cus.php">Dashboard</a> |
            <a href="deals&offers.php">Deals/Offers</a> |
            <a href="counters_cus.php">Counters</a> |
            <a href="feedback.php">Feedback</a> |
            <a href="logout.php">Logout</a>
          </nav>
        </td>
      </tr> 
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding-bottom: 100px; ">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          Album
          </h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="viewProfile.php">View Profile</a></li>
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="viewAlbum.php">View Album</a></li>
            <li><a href="profilePicture.php">Change Profile Picture</a></li>
            <li><a href="changePass.php">Change Password</a></li>
            <li><a href="viewTicketCart.php">View Ticket Cart</a></li>
          </ul>
        </td>
        <td style="padding: 80px">
          <fieldset>
            <legend>ALBUM</legend>
            <form action="" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                  <td>
                    <img
                      src="img/album/seats_1.jpg"
                      alt="img_1"
                      width="250px" height="150px"
                    />
                  </td>
                  <td>
                    <img
                      src="img/album/train_1.jpg"
                      alt="img_2"
                      width="250px" height="150px"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="img/album/seat_2.png" alt="img_3" width="250px" height="150px"/>
                  </td>
                  <td>
                    <img
                      src="img/album/train_2.jpg"
                      alt="img_4"
                      width="250px" height="150px"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <img
                      src="img/album/seats_3.jpg"
                      alt="img_5"
                      width="250px" height="150px"
                    />
                  </td>
                  <td>
                    <img
                      src="img/album/train_3.jpg"
                      alt="img_6"
                      width="250px" height="150px"
                    />
                  </td>
                </tr>
              </table>
            </form>
          </fieldset>
        </td>
      </tr>

      <tr align="center">
        <td colspan="2">
          <nav>
            <a href="t&c_log.php">Terms & Conditions</a> |
            <a href="privacyPolicy_log.php">Privacy Policy</a> |
            <a href="aboutUs_log.php">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
  </body>
</html>
