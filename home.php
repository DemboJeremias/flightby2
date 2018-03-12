<!DOCTYPE HTML>
<?php require_once 'include\header.php';
$glasgow = "Glasgow";
$dublin = "Dublin";
$paris = "Paris";
$madrid = "Madrid";
$brussels = "Brussels";

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="fly guys">
    <meta name="author" content="fligts">
    <title>FlyGuys</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src='flyGuys.js'></script>


</head>


<div class="banner">
    <img class="banner-image" src="fly-mo.jpg">

</div>

<div class="booking">
    <form  action="table.php" method="get">
        <h2 id="title">Search for a flight</h2>
        <label class="DepLabel">Departure</label>
        <select id="flight-from" name="Flight from">
            <option value="Stansted">Stansted</option>
        </select>


        <label class="DestLabel">Destination</label>
        <select id="flight-to" name="flight to">

            <option value=<?=$glasgow?>><?=$glasgow?></option>
            <option value=<?=$dublin?>><?=$dublin?></option>
            <option value=<?=$paris?>><?=$paris?></option>
            <option value=<?=$madrid?>><?=$madrid?></option>
            <option value=<?=$brussels?>><?=$brussels?></option>
        </select>


        <label class="DepDateLab">Departing Date</label> <input type="text" id="departing">
        <input  id="search" type="submit" value="Search">
</div>
</form>


<?php require_once 'include\_footer.php'; ?>
