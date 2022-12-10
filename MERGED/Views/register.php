<!-- Public UI -->

<!-- PHP -->
<!-- Public UI -->

<!-- PHP -->
<?php
	session_start();
	$conn = new mysqli('localhost', 'root', '', 'train_management_db');


if(isset($_POST['submit'])){
		$users_first_name 		= $_POST['users_first_name'];
		$users_last_name 		= $_POST['users_last_name'];
		$users_email 			= $_POST['users_email'];
		$users_password 		= $_POST['users_password'];
		$passwordagain  = $_POST['passwordagain'];
		$md5password 	= md5($users_password);
		
		$emptymsg1 = $emptymsg2 = $emptymsg3 = $emptymsg4 = $emptymsg5 = $pasmatchmsg = '';
		
		
		if(empty($users_first_name)){
			$emptymsg1 = 'First name is required';
		}
		if(empty($users_last_name)){
			$emptymsg2 = 'Lastname is required';
		}
		if(empty($users_email)){
			$emptymsg3 = 'email is required';
		}
		if(empty($users_password)){
			$emptymsg4 = 'password is required';
		}
		if(empty($passwordagain)){
			$emptymsg5 = 'Confirm password is required';
		}		
		
		if(!empty($users_first_name) && !empty($users_last_name) && !empty($users_email) && !empty($users_password) && !empty($passwordagain)){
			if($users_password !== $passwordagain){
				$pasmatchmsg = 'Password does not match!';
			}else{
				$pasmatchmsg='';
				$sql = "INSERT INTO userc(user_first_name, user_last_name, user_email, user_password) 
						VALUES('$users_first_name', '$users_last_name', '$users_email', '$md5password')";
			
				if($conn->query($sql) == TRUE){
					header('location:login.php');
					$_SESSION['signupmsg']='Sign Up Complete. Please Log in now.';
				}else{
					echo 'data not inserted';
				}
			}
		}else{
			$emptymsg = 'Fill up all fields';
		}
		
	}
    
    include_once "../assets/header.php";
    //include_once "../assets/footer.php";
?>

<!-- HTML -->
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/headStyle.css" />
    <link rel="stylesheet" href="../assets/footerStyle.css" />
  </head>
  <body>

  <table
      align="center"
      width="90%"
      style="margin: 20px;">
        <tr>
            <td style="padding: 80px">
     <br>
     <form action="" method="POST">
       <fieldset>
       <legend><strong><h3>Registration</h3></strong></legend>
       <table>
         <tr>
           <td>
           <label for="firstname">First Name:</label>
          <input type="name" name="users_first_name" class="form-control" placeholder="Your First Name" value="<?php if(isset($_POST['submit'])){echo $users_first_name; } ?>">
          <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg1; }?></span>
          <br><br>
           </td>
         </tr>
         
         <tr>
           <td>
           <label for="users_last_name">Last Name:</label>
          <input type="name" name="users_last_name" class="form-control" placeholder="Your Last Name" value="<?php if(isset($_POST['submit'])){echo $users_last_name; } ?>">
          <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg2; }?></span>
          <br><br>
           </td>
         </tr>
         <tr>
           <td>
          <label for="email">Email:</label>
          <input type="email" name="users_email" class="form-control" placeholder="Enter your email" value="<?php if(isset($_POST['submit'])){echo $users_email; } ?>">
          <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg3; }?></span>
          <br><br>
           </td> 
         </tr>
         <tr>
           <td>
           <label for="password">Password:</label>
          <input type="password" name="users_password" class="form-control" placeholder="Enter New password" >
          <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg4; }?></span>
          <br><br>
           </td>
         </tr>
        
          <tr>
            <td>
            <label for="password">Password Again:</label>
          <input type="password" name="passwordagain" class="form-control" placeholder="Enter password Again" >
          <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg5.''.$pasmatchmsg; }?></span>
          <br><br>
            </td>
          </tr>
          <tr>
            <td><input type="checkbox" name="checkbox">I agree all the terms and conditions</td>
            </tr>
          <br><br>
          <tr>
            <td>
            <button name="submit" class="btn btn-success">Submit</button>
            <br><br>
           Alrady have an account? <a href="login.php" class="text-decoration-none">Login</a>
            </td>
          </tr>
       </table>
      </fieldset>
</form>
  </td>
</tr>
      <!--
      <tr align="center">
        <td>
          <nav>
            <a href="t&c.php">Terms & Conditions</a> |
            <a href="privacyPolicy.php">Privacy Policy</a> |
            <a href="aboutUs.php">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
      -->

      <tr align="center">
        <td>
          <nav>
            <a href="t&c.php">Terms & Conditions</a> |
            <a href="privacyPolicy.php">Privacy Policy</a> |
            <a href="aboutUs.php">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
  </body>
</html>