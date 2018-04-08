<!DOCTYPE HTML>
<?php require_once 'include\header.php';
$glasgow = "Glasgow";
$dublin = "Dublin";
$paris = "Paris";
$madrid = "Madrid";
$brussels = "Brussels";
$date1= time('03/04/2018');
$date = strtotime('03/15/2018');
//$DoW = "day";
//converting the date to day of the work
//$dt = strtotime('03/15/2018');
//$DoW = date("l", $date);


?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="fly guys">
    <meta name="author" content="fligts">
    <title>FlyGuys</title>


    <link rel="stylesheet" href="style/style.css">

</head>


<div class="banner">
    <img class="banner-image" src="image/fly-mo.jpg">

</div>

<div class="booking">
    <form  action="table.php" method="post">
        <h2 id="title">Flight Search</h2>
        <label class="DepLabel">Departure</label>
        <select id="flight-from" name="Flight from">
            <option value="Stansted">Stansted</option>
        </select>


        <label class="DestLabel">Destination</label>
        <select name="dest">

            <option value=<?=$glasgow?>><?=$glasgow?></option>
            <option value=<?=$dublin?>><?=$dublin?></option>
            <option value=<?=$paris?>><?=$paris?></option>
            <option value=<?=$madrid?>><?=$madrid?></option>
            <option value=<?=$brussels?>><?=$brussels?></option>
        </select>


        <label class="DepDateLab">Departing Date</label>
        <input name="date" value=<?=$date1?> type="date" >

        <label class="DoW">Day</label>

        <input value=<?=$DoW = date("l", $date)?> type="date" id="Departing">


<!--        <label class="Weekday">Day</label> <input type="text">-->

        <input  id="search" type="submit" value="Search">
</div>
</form>


<?php require_once 'include\_footer.php'; ?>

