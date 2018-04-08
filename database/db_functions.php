<?php
// here we find the queries that we going to pass to the database
    class Query extends CRUD
    {
//       Create Qeries - the values that we going to pass comes from view folder
    function CreateBooking($_values)
    {
        $query = "INSERT INTO booking (booking_id, fk_customer_id, booking_from, booking_to) VALUES(?,?,?,?)";
        $parameters = [
            $_values['knumber']

        ];
        return $this->Create($query, $parameters);

    }

//         Read Queries
    function ReadBooking()
    {
        $query = "SELECT * FROM booking (booking_id, fk_customer_id, booking_from, booking_to,departure_time, arrived_time, duraction) VALUES(?,?,?,?,?,?,?)";
        $class = 'booking';
        return $this->Read($query, $class);
    }

//           Update Queries
    function UpdateBooking($_id, $_value)
    {
        $query = "   UPDATE attend SET lecture_id =? WHERE attend_id =?";
        $parameters = [
            $_value,
            $_id
        ];
        return $this->Update($query, $parameters);
    }

//           Delete Queries
    function DeleteBooking($_id)
    {
        $query = "DELETE FROM attend WHERE attend_id =?";
        $parameters = [
            $_id
        ];
        return $this->Delete($query, $parameters);

    }

//          Get data from database

    function GetFlight()
    {
        $query = "SELECT flight_id, fk_departure_id, fk_destination_id FROM flight";
        $class = 'flight';
        return $this->Read($query, $class);
    }

    function GetFlightById($id)
    {
        $parameters = [$id];
        $query = "SELECT flight_id, fk_departure_id, fk_destination_id FROM flight WHERE flight_id = ?";
        $class = 'flight';
        return $this->Read($query, $class, $parameters);
    }


    function GetDepAndDate($destin, $date)
    {
        $parameters = [$destin, $date];
        $query = "SELECT flight.flight_id, departure.departure, destination.city, destination.time, destination.date FROM flight, departure, destination WHERE flight.fk_destination_id = destination.destination_id AND flight.fk_departure_id = departure.departure_id AND destination.city = ? AND destination.date = ?";
        $class = 'departure';
        return $this->Read($query, $class, $parameters);
    }


// the function that allow to add ticket in the basket
    function addBasket($flight_id)
    {
        if (!isset($_SESSION["basket"])) {
            $_SESSION["basket"] = array();
        }
        array_push($_SESSION["basket"], $flight_id);
    }

    function GetFlightByDestination($destin)
    {
        $parameters = [$destin];
        $query = "SELECT flight.flight_id, departure.departure, destination.city,destination.time, destination.date FROM flight, departure, destination WHERE flight.fk_destination_id = destination.destination_id AND flight.fk_departure_id = departure.departure_id AND destination.city = ?";
        $class = 'destination';
        return $this->Read($query, $class, $parameters);
    }

    function GetFlightByDate($date)
    {
        $parameters = [$date];
        $query = "SELECT flight.flight_id, departure.departure, destination.city,destination.time, destination.date FROM flight, departure, destination WHERE flight.fk_destination_id = destination.destination_id AND flight.fk_departure_id = departure.departure_id AND destination.date > NOW()";
        $class = 'destination';
        return $this->Read($query, $class, $parameters);
    }




}
?>