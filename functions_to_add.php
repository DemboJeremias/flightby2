<?php

function CreateCustomer($fn, $ln, $ad, $pc, $em, $pw)
{
    // add user login details
    $query1 = "INSERT INTO user (email_address, password, access_level) VALUES(?,?, 0)";
    $parameters1 = [ $em, $pw ];
    $id = $this->Create($query1, $parameters1);

    // add customer details
    $query2 = "INSERT INTO customer (first_name, surname, address, post_code, email, fk_user_id) VALUES(?,?,?,?,?,?)";
    $parameters2 = [ $fn, $ln, $ad, $pc, $em, $id ];
    $this->Create($query2, $parameters2);

    return $id;
}

function CheckEmailAddress($em)
{
    $query = "SELECT email_address FROM user WHERE email_address = ?";
    $parameters = [$em];
    $class = 'user';
    return $this->Read($query, $class, $parameters);
}

function LoginUser ($em, $pw)
{
    $query = "SELECT user.user_id, customer.first_name, user.access_level FROM user, customer WHERE user.email_address = ? AND user.password = ? AND user.user_id = customer.fk_user_id";
    $parameters = [$em, $pw];
    $class = 'user';
    return $this->Read($query, $class, $parameters);
}

?>