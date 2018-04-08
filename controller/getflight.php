<?php

//$result = $DBQuery->GetDepatureThroughName();
$destin = $_POST['dest'];
$date = $_POST['date'];
if($date != null){
    $result = $DBQuery->GetDepAndDate($destin,$date);
}else{
    if($destin != null){
     $result = $DBQuery->GetFlightByDestination($destin);

    }else{
     $result = $DBQuery->GetFlightByDate($date);
    }
}


//var_dump($result);






//Simple query to retriieve a flight and schedule ID
////
//// require('DB_connection.php');
////        $statement = $this->GetPDO()->prepare('SELECT flight_id, fk_schedule_id, fk_destination_id FROM flight');
////        $statement->execute();
////        $result = $statement->fetchAll(PDO::FETCH_OBJ);
////
///
////?>

<?php
//    function getUsersByName($name)
//    {
//        if ($name == "") {
//            return getAllFlight();
//

//    global $pdo;
//    $statement = $pdo->prepare('SELECT givenname, surname, address FROM customers
//                              WHERE surname = ?');
//    $statement->execute([$surname]);
//    $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Customer');
//    return $users;
//}
//
//function addUser($user)
//{
//    global $pdo;
//    $statement = $pdo->prepare('INSERT INTO customers
//    (givenname, surname, address) VALUES (?,?,?)');
//    $statement->execute([$user->givenname,
//        $user->surname,
//        $user->address]);
//}
?>