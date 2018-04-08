<?php
    require_once ('database/DB_connection.php');
    require_once ('model/classes.php');

    $allowed = false;
    if (!isset($_SESSION['access'])) {
        header("location: index.php");
    } elseif ($_SESSION['access'] == 0) {
        header("location: index.php");
    } else {
        $allowed = true;
    }

    $message = "";

    if (isset($_GET['func'])){
        if ($_GET['func'] == 'addflight') {
            $dest = $DBQuery->GetAllDestinations();
            $depart = $DBQuery->GetAllDepartures();
            $countries = $DBQuery->GetAllCountries();
        } elseif ($_GET['func'] == 'viewflights') {
            $flights = $DBQuery->GetFlightByDate();
        } elseif ($_GET['func'] == 'editflight') {
            $flight = $DBQuery->GetAllFlightDetailsByID($_GET['id']);
        }
    }

    if (isset($_POST['go'])) {
        if ($_POST['go'] == 'addflight') {
            $result = $DBQuery->AddNewFlight($_POST['country'], $_POST['city'], $_POST['type'], $_POST['time'], $_POST['date'], $_POST['departure']);
            if ($result) {
                $message = "You have successfully added a new flight. REF ID: ". $result;
            } else {
                $message = "Something has gone horribly wrong, please contact Jeremias";
            }
        } elseif ($_POST['go'] == 'editflight') {
            $result = $DBQuery->UpdateFlightDetailsByID($_POST['id'],$_POST['country'],$_POST['city'],$_POST['type'],$_POST['time'],$_POST['date']);
            if ($result) {
                $message = "You have successfully updated flight ID: " . $_POST['id'];
            } else {
                $message = "Failed badly, try again later";
            }
        } elseif ($_POST['go'] == 'deleteflight') {
            $result = $DBQuery->DeleteFlightByID($_POST['id']);
            if ($result) {
                $message = "You have successfully deleted flight ID: " . $_POST['id'] . " - Hope that was OK!";
            } else {
                $message = "Failed to delete, that could be a good thing";
            }
        }
    }

?>