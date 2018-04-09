<?php require_once 'include/header.php'; ?>
<?php require_once ('controller/user_controller.php'); ?>

<?php if ($error !== ""): ?>
    <div>
        <h2>Error Occurred</h2>
        <p><span><?= $error ?></span></p>
    </div>
<?php endif; ?>

<?php if (!isset($_SESSION['userID'])): ?>
    <div class="col-lg-15 col-m12">
            <h2 id="title">Login to Your Account </h2>
            <form method="post" action="login.php">
                <label>Email:</label>
                <br>
                <input type="email" name="email"  placeholder="Enter email address here" id="email_address">
                <br><br>
                <label>Password</label>
                <br>
                <input type="password" name="password" placeholder="Enter passsword here" id="password">
                <br><br>
                <input type="hidden" name="ref" value="login">
                <input  id="logSub" type="submit" value="Login">
                <br><br>
                <p> Register <a href="register.php">Click Here</a> </p>
<!--                <p>Forgotten password <a href="forgot.php">Click Here</a></p>-->
            </form>
    </div>
<?php else: ?>
    <div class="col-lg-12 col-m-12">
        <h2>Login... No need you already Logged in</h2>
    </div>
<?php endif; ?>




<?php require_once 'include\_footer.php'; ?>