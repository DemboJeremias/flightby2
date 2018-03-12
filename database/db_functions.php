<?php
// here we find the queries that we going to pass to the database
    class Query extends CRUD {
//       Create Qeries - the values that we going to pass comes from view folder
        function  CreateBooking($_values){
            $query = "INSERT INTO booking (booking_id, fk_customer_id, booking_from, booking_to) VALUES(?,?,?,?)";
            $parameters = [
                $_values['knumber']

            ];
            return $this->Create($query, $parameters);

        }

//         Read Queries
        function  ReadBooking(){
            $query = "SELECT * FROM booking (booking_id, fk_customer_id, booking_from, booking_to,departure_time, arrived_time, duraction) VALUES(?,?,?,?,?,?,?)";
            $class = 'booking';
            return $this->Read($query, $class);
        }

//           Update Queries
        function UpdateLecture($_id, $_value){
            $query ="   UPDATE attend SET lecture_id =? WHERE attend_id =?";
            $parameters = [
                $_value,
                $_id
            ];
            return $this->Update($query, $parameters);
        }

//           Delete Queries
        function DeleteAttendance($_id){
            $query = "DELETE FROM attend WHERE attend_id =?";
            $parameters = [
                $_id
            ];
            return $this->Delete($query, $parameters);

        }
//          Get data from database


    function  GetDeparture(){
        $query = "SELECT flight.flight_id, departure.departure, destination.city,destination.time FROM departure, flight, destination";
        $class = 'departure';
        return $this ->Read($query, $class);
    }

    }
?>