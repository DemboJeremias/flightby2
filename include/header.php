<?php require_once ('controller/session_controller.php'); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="fly guys">
    <meta name="author" content="fligts">
    <title>FlyGuys</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/responsive.css" type="text/css">

    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script  src='flyGuys.js'></script>

</head>
<body>

    <div class="col-lg-12 col-m12">
        <ul class="nav">
            <div class="logo"><a href="index.php">FLY-GUYS</a></div>
        <!--    <li><a href="home.php">Sign Up</a></li>-->

            <li><a href="about.php">About</a></li>
        <!--    <li><a href="dest.php">Destinations</a></li>-->
            <li><a href="basket.php">Basket</a></li>
            <?php if (isset($_SESSION['userID'])): ?>
                <?php if ($_SESSION['access'] > 0): ?>
                    <li><a href="admin.php">Admin</a></li>
                <?php endif; ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a>Hello, <?= $_SESSION['name'] ?></a></li>
            <?php else: ?>
                <li><a href="login.php">Log in</a></li>
            <?php endif; ?>

        </ul>
</div>
