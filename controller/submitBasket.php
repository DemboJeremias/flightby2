<?php
$value = $_POST['id'];
$DBQuery->addBasket($value);
$res2 = $DBQuery->GetDetailByID($value);

// loop through session basket
    // get all flights by id