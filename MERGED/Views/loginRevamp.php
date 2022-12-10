<html>
  <?php include __DIR__ ."/../common/header.php" ?>

  <body>

    <div class="center">
      <h1>Login</h1>
      <form action="" method="post" enctype="">
        <div class="txt-field">
          <input type="text" name="username" value="">
          <span></span>
          <label for="username">Username</label>
        </div>
        <div class="txt-field">
          <input type="password" name="password" value="">
          <span></span>
          <label for="password">Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" name="submit-btn" value="Login">
        <div class="signup-link">
          Not a member? <a href="register.php">Sign up</a>
        </div>
      </form>
    </div>


    <?php include __DIR__. "/../common/footer.php" ?>
  </body>
</html>
