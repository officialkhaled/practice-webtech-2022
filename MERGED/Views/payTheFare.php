<!-- Customer UI -->

<!-- HTML -->
<html>

<head>
    <title>Pay The Fare</title>
    <link rel="stylesheet" href="style.css" />


</head>

<body>
    
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
            <td style="padding: 80px">
                <form method="post" action="cusHome.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>RECEIPT</legend>
                    <fieldset>
                        <legend>Ticket Info</legend>
                        <table style="margin: 30px">
                            <tr>
                                <td><strong>Trip Info:</strong></td>
                            </tr>
                        <tr>
                            <td>Dhaka - Jamalpur Town</td>
                        </tr>
                        <tr>
                            <td>Departure date: 07-11-2022</td>
                        </tr>
                        <tr>
                            <td>Class: SNIGDHA</td>
                        </tr>
                        </table>
    </fieldset>
    <br><br>
    
<fieldset>

                        <legend>Booked Info</legend>
                        <table style="margin: 30px">

                        <tr> 
                            <td><strong>Booked ID</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Contact no</strong></td>
                            <td><strong>Ticket Price</strong></td>
                        </tr>
                        <tr>
                            <td>D452</td>
                            <td>Rubyea</td>
                            <td>+880 17563 984532</td>
                            <td>400/=</td>
                        </tr>
                        <tr>
                            </table>

</fieldset> <br>
                        <table>
                            
                            <tr>
                                <td><em>*Please pay and collect your ticket from your closest counter.</em></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="btn" value="Home"></td>
                            </tr>
                    </table>
    </form>
    </fieldset>
    </td>
    </tr>

    <tr align="center">
        <td>
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