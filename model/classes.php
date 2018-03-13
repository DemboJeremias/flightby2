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
<<<<<<< HEAD

=======
<<<<<<< HEAD
    private $flight_id;

=======
    private $Glasgow;
>>>>>>> ac13d2aec8ac34434265269036a7dd175669d34e
>>>>>>> 0880b6f58e646ab3db41391fee98464bc40eb9b0

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