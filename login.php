<?php require_once 'include\header.php'; ?>

    <div class="col-lg-15 col-m12">

            <h2>Login to Your Account </h2>
            <span class="error"><?= $error ?></span>
            <span class="message"><?= $message ?></span>
            <form method="post">
                <label>Email:</label>
                <br>
                <input type="email"  placeholder="Enter email address here" size="40" id="email_address">
                <br><br>
                <label>Password</label>
                <br>
                <input type="password" placeholder="Enter passsword here" size="40" id="password">
                <br><br>
                <input type="submit" value="Login">
                <br><br>
                <p>Not got an account? Register <a href="sign_up.php">HERE</a> </p>
                <p>Forgotten your password <a href="forgot.php">Click HERE</a> to reset</p>
            </form>
        </div>
    </div



<?php require_once 'include\_footer.php'; ?>