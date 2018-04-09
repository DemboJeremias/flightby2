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

    function GetDestinationByID($id)
    {
        $parameters = [$id];
        $query = "SELECT flight.flight_id, departure.departure, destination.city,destination.time, destination.date FROM flight, departure, destination WHERE flight.fk_destination_id = destination.destination_id AND flight.fk_departure_id = departure.departure_id AND flight.flight_id = ?";
        $class = 'destination';
        return $this->Read($query, $class, $parameters);
    }

    function GetFlightByDate($date = null)
    {
        //$parameters = [$date];
        $query = "SELECT flight.flight_id, departure.departure, destination.city, destination.type, destination.time, destination.date FROM flight, departure, destination WHERE flight.fk_destination_id = destination.destination_id AND flight.fk_departure_id = departure.departure_id AND destination.date > NOW() ORDER BY destination.date ASC";
        $class = 'destination';
        return $this->Read($query, $class);
    }

    function GetAllDestinations() {
        $query = "SELECT destination.city FROM destination GROUP BY destination.city ORDER BY destination.city ASC";
        $class = 'destination';
        return $this->Read($query, $class);
    }

    function GetAllCountries() {
        $query = "SELECT destination.country FROM destination GROUP BY destination.country ORDER BY destination.country ASC";
        $class = 'destination';
        return $this->Read($query, $class);
    }

    function GetAllFlightDetailsByID($id) {
        $query = "SELECT flight.flight_id, departure.departure, destination.destination_id, destination.country, destination.city, destination.type, destination.time, destination.date FROM destination, flight, departure WHERE flight.flight_id = ? AND flight.fk_departure_id = departure.departure_id AND flight.fk_destination_id = destination.destination_id";
        $class = 'destination';
        $parameters = [$id];
        return $this->Read($query, $class, $parameters);
    }

    function GetAllDepartures() {
        $query = "SELECT departure.departure_id, departure.departure FROM departure GROUP BY departure.departure ORDER BY departure.departure ASC";
        $class = 'departure';
        return $this->Read($query, $class);
    }

    function AddNewFlight($country, $city, $type, $time, $date, $depart) {
        $query1 = "INSERT INTO destination (country, city, type, time, date) VALUES (?,?,?,?,?)";
        $parameters1 = [$country, $city, $type, $time, $date];
        $id = $this->Create($query1, $parameters1);

        $query2 = "INSERT INTO flight (fk_departure_id, fk_destination_id) VALUES (?,?)";
        $parameters2 = [$depart, $id];
        return $this->Create($query2, $parameters2);
    }

    function UpdateFlightDetailsByID($id, $country, $city, $type, $time, $date) {
        $query = "UPDATE destination SET country =?, city = ?, type = ?, time = ?, date = ? WHERE destination_id =?";
        $parameters = [$country, $city, $type, $time, $date, $id];
        return $this->Update($query, $parameters);
    }

    function GetDestinationIDFromFlightID($id) {
        $query = "SELECT fk_destination_id FROM flight WHERE flight_id = ?";
        $parameters = [$id];
        $class = 'flight';
        return $this->Read($query, $class, $parameters);
    }

    function DeleteFlightByID($id) {
        $dest_id = $this->GetDestinationIDFromFlightID($id);
        $query = "DELETE FROM flight WHERE flight_id = ?";
        $parameters = [$id];
        $result = $this->Delete($query, $parameters);

        $query2 = "DELETE FROM destination WHERE destination_id = ?";
        $parameters2 = [$id];
        $result2 = $this->Delete($query2, $parameters2);

        return ($result && $result2);
    }

    function updateRSS() {
        global $readObject;
        $query = $readObject->getFlight();
        $rss = '<?xml version="1.0" encoding="utf-8"?>' . "\n";
        $rss .= '<rss version="2.0">' . "\n";
        $rss .= '<channel>' . "\n";
        $rss .= '<title>Ten Flights </title>' . "\n";
        $rss .= '<description>Update information for Available Ten Flight on Website</description>' . "\n";
        foreach ($query as $f) {
            $rss .= '<item>' . "\n";
            $rss .= '<title>' . $f->flight_name . ' from ' . $f->country . ' </title>' . "\n";
            $rss .= '<description>' . $f->description . '</description>' . "\n";
            $rss .= '<link>http://mychaos.co.uk/awad/fligh.php?id=' . $f->flight_id . '</link>' . "\n";
            $date = strtotime($f->date_added);
            $rss .= '<pubDate>' . date('D, d M Y H:i:s O', $date) . '</pubDate>' . "\n";
            $rss .= '</item>' . "\n";
        }
        $rss .= '</channel>' . "\n";
        $rss .= '</rss>' . "\n";
        return $rss;
    }
}

?>