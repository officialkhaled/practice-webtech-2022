<!-- Public UI -->

<!-- HTML -->
<html>
  <head>
    <title>Contact us</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <!-- Header File -->
    <?php include "../assets/header.php" ?>
  </head>
  <body>
    <!--
    <table
    border="2"
      align="center"
      width="860px"
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
            <a href="publicHome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a> |
            <a href="deals&offers_pub.php">Deals/Offers</a> |
            <a href="counters.php">Counters</a> |
            <a href="contactUs.php">Contact Us</a>
          </nav>
        </td>
      </tr> -->
    <!-- Top Bars (end) -->

      <tr>
        <td style="padding: 80px">
            <form action="contactUsStore.php" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                  <td>
                    <h2>Your message has been sent! Thank you</h2>
                  </td>
                </tr>
              </table>
            </form>
        </td>
      </tr>

      <tr align="center" style="margin: 10px 0;">
        <td colspan="2">
          <nav>
            <a href="t&c.html">Terms & Conditions</a> |
            <a href="privacyPolicy.html">Privacy Policy</a> |
            <a href="aboutUs.html">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
  </body>
</html>
