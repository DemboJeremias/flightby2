<?php
    require_once ('model/classes.php');
    require_once ('database/DB_connection.php');

    $error = "";

    if (isset($_POST['ref'])) {
        if ($_POST['ref'] == 'register') {
            $em = $_POST['email'];
            $pw1 = $_POST['password1'];
            $pw2 = $_POST['password2'];
            if ($pw1 !== $pw2) {
                $error = "The passwords you entered do not match";
            } else {
                $testEmail = $DBQuery->CheckEmailAddress($em);
                if (!$testEmail) {
                    $pw_enc = hash('sha256', $pw1, false);
                    $customerID = $DBQuery->CreateCustomer($_POST['firstname'], $_POST['surname'], $_POST['address'], $_POST['postcode'], $em, $pw_enc);
                    $_SESSION['userID'] = $customerID;
                    $_SESSION['name'] = $_POST['firstname'];
                    $_SESSION['access'] = 0;
                    header("location:index.php");
                } else {
                    $error = "Email address already exists on our system, try logging in";
                }
            }
        } elseif ($_POST['ref'] == 'login') {
            $em = $_POST['email'];
            $pw = $_POST['password'];
            $pw_enc = hash('sha256', $pw, false);
            $user = $DBQuery->LoginUser($em, $pw_enc);
            if ($user) {
                $_SESSION['userID'] = $user[0]->user_id;
                $_SESSION['name'] = $user[0]->first_name;
                $_SESSION['access'] = $user[0]->access_level;
                header("location:index.php");
            } else {
                $error = "There was an issue signing in with these credentials, please try again";
            }
        }
    }


?>