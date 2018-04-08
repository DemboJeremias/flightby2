<?php

//$result = $DBQuery->GetDepatureThroughName();
$destin = $_POST['dest'];
$date = $_POST['date'];

if($date != null && $destin != "all"){
    $result = $DBQuery->GetDepAndDate($destin,$date);
}
if($destin == "all"){
    $result = $DBQuery->GetFlightByDate($date);

}
if($date == null && $destin != "all"){

    $result = $DBQuery->GetFlightByDestination($destin);
}


//var_dump($result);
?>
