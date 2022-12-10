
<head>
    <?php
        session_start();
    ?>

    <link rel="stylesheet" href="../Assets/styles.css" />
    <link rel="stylesheet" href="../Assets/style.css" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Kothin | Home page</title>
</head>

<nav class="container">
    <h2 class="logo">
        <span class="header-logo">Rail </span><span>Sheba</span>
    </h2>
    <ul class="center-links">
        <li><a href="../views/publicHome.php">Home</a></li>
        <li><a href="../views/deals&offers_pub.php">Deals/Offers</a></li>
        <li><a href="../views/counters.php">Counters</a></li>
        <li><a href="../views/contactUs.php">Contact Us</a></li>
    </ul>
    
    <?php
        //$user = $_SESSION['user'];

        if(isset($user)) {
            echo '<ul>
                        <li class="logbtn"><a href="../views/login.php">Login</a></li>
                        <li class="regbtn"><a href="../views/register.php">Sign up</a></li>
                    </ul>';
        } else {
            echo '  <ul>
                        <li class="logbtn"><a href="../views/login.php">Profile</a></li>
                        <li class="regbtn"><a href="../controllers/logout.php">Logout</a></li>
                    </ul>';
        }
    ?>
    
    <!--<button type="button">Login</button>-->
</nav>