<?php

require_once ('./model/classes.php');
require_once('./database/DB_connection.php');



if (!isset($error)) {
    $error = "";
}
if (!isset($message)) {
    $message = "";
}

if (isset($_SESSION["Customer"])) {
    $userAddress = [];
    if (isset($_SESSION["address"])) {
        $userAddress = $readObject->getBookingById($_SESSION['booking']);
        unset($_SESSION["booking"]);
    } else {
        $userBooking = $readObject->getBookingId($currentUser[0]->fk_booking_id);
    }
//

$accessWines = [];
    $accessWines = $readObject->getAllBooking();
    $_SESSION["total"] = getTotalValue();
} else {
    header('Location: booking.php? basket=1');
    die();

}
?>
