<?php
require_once 'database\DB_connection.php';
require_once ('model/classes.php');

if (isset($_POST['id'])) {
    $DBQuery->addBasket($_POST['id']);
}
if (isset($_SESSION['basket'])) {
    $basket = array();
    foreach($_SESSION['basket'] as $b){
        array_push($basket, $DBQuery->GetDestinationByID($b));
    }
}
//$res2 = $DBQuery->GetDetailByID($value);

// loop through session basket
    // get all flights by id