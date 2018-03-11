<?php

class flight
{
    private $flight_id;
    private $date;
    private $time;
    private $fk_destination_id;
    private $duration;
    private $departure;


    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class Booking
{
    private $id;
    private $booking_from;
    private $booking_to;
    private $departure_time;
    private $arrived_time;
    private $duration;


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



    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        $this->$name = $value;
    }
}

class booking_flight
{
    private $booking_id;
    private $flight;


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
private $flight_id;
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