<?php


$accessBooking = [];


if ($_POST['iCode'] == "addBasket") {
    addBasket($_POST['bId']);
} elseif ($_POST['iCode'] == "removeBasket") {
    removeBasket($_POST["bId"]);
}

?>