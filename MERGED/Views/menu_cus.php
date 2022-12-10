<?php 

  include_once "../assets/header_cus.php" 

?>

<html>
  <head>
    <title>Customer Menu</title>
    <link rel="stylesheet" href="../assets/style.css">
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <tr>
        <td style="padding-bottom: 100px; ">
          <h4 style="margin-top: 15px; margin-left: 15px; margin-bottom: 10px">
          Menu
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
    </form>
  </body>
</html>
