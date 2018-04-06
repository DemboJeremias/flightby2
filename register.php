<?php require_once 'include\header.php'; ?>

<div class="col-lg-15 col-m12">

        <h2>Register</h2>
        <form method="post" action="register.php">
            <label>First Name:</label>
            <br>
            <input type="text" size="40" name="firstname" placeholder="Enter your first name here">
            <br><br>
            <label>Last Name:</label>
            <br>
            <input type="text" size="40" name="surname" placeholder="Enter your surname here">
            <br><br>
            <label>Email Address:</label>
            <br>
            <input type="email" size="40" name="email" placeholder="Enter your email address here">
            <br><br>
            <label>Home Address:</label>
            <br>
            <input type="text" size="40" phone="phonenumber" placeholder="Enter your Number">
            <br><br>
            <label>Post Code:</label>
            <br>
            <input type="text" size="40" phone="postcode" placeholder="Enter your Number">
            <br><br>
            <input type="submit" value="Register">
        </form>
</div>


<?php require_once 'include\_footer.php'; ?>
