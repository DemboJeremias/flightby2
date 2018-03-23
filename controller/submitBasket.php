<?php
$value = $_POST['id'];
$DBQuery->addBasket($value);

// loop through session basket
    // get all flights by id