<?php

class flight
{
    private $flight_id;
    private $fk_destination_id;
    private $fk_departure_id;


    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class Booking
{
    private $booking_id;
    private $fk_customer_id;

    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }


}

class customer
{
    private $customer_id;
    private $fk_user_id;
    private $first_name;
    private $surname;
    private $email;
    private $address;
    private $post_code;



    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class destination
{
    private $destination_id;
    private $country;
    private $city;
    private $type;
    private $time;
    private $date;


    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class booking_flight
{
    private $booking_flight_id;
    private $fk_booking_id;
    private $fk_flight_id;


    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class departure
{
    private $departure_id;
    private $departure;




    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class user
{
    private $user_id;
    private $email_address;
    private $password;
    private $access_level;



    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

?>