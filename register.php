<?php require_once ('include/header.php'); ?>
<?php require_once ('controller/user_controller.php'); ?>

<?php if ($error != null): ?>
    <div>
        <h2>Error Occurred</h2>
        <p><span><?= $error ?></span></p>
    </div>
<?php endif; ?>

<?php if (!isset($_SESSION['userID'])): ?>
<div class="col-lg-12 col-m-12">
        <h2>Register</h2>
        <form method="post" action="register.php">
            <label>First Name:</label>
            <br>
            <input type="text" max="40" name="firstname" placeholder="Enter your first name here">
            <br><br>
            <label>Last Name:</label>
            <br>
            <input type="text" max="40" name="surname" placeholder="Enter your surname here">
            <br><br>
            <label>Home Address:</label>
            <br>
            <input type="text" name="address" placeholder="Enter your Home Address">
            <br><br>
            <label>Post Code:</label>
            <br>
            <input type="text" max="10" name="postcode" placeholder="Enter your Post Code">
            <br><br>
            <label>Email Address:</label>
            <br>
            <input type="email" name="email" placeholder="Enter your email address here" required>
            <br><br>
            <label>Password:</label>
            <br>
            <input type="password" name="password1" placeholder="Enter your password" required>
            <input type="password" name="password2" placeholder="Re-enter your password" required>
            <br><br>
            <input type="hidden" name="ref" value="register">
            <input type="submit" value="Register">
        </form>
</div>
<?php else: ?>
<div class="col-lg-12 col-m-12">
    <h2>Register</h2>
    <p>No need to register you have already logged in. Not you? Sign Out and try again!</p>
</div>

<?php endif; ?>


<?php require_once 'include\_footer.php'; ?>
