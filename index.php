<?php require_once 'include/header.php'; ?>

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
=======
<?php require_once 'include/header.php'; ?>
<?php require_once ('controller/home_controller.php'); ?>

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
                <option value="all">All Destination</option>
                <option value=<?=$glasgow?>><?=$glasgow?></option>
                <option value=<?=$dublin?>><?=$dublin?></option>
                <option value=<?=$paris?>><?=$paris?></option>
                <option value=<?=$madrid?>><?=$madrid?></option>
                <option value=<?=$brussels?>><?=$brussels?></option>
                <option value=<?=$manchester?>><?=$manchester?></option>
            </select>


            <label class="DepDateLab">Departing Date</label>
            <input name="date" value=<?=$date1?> type="date" >
            <input  id="search" type="submit" value="Search">
        </form>
    </div>

<?php require_once 'include\_footer.php'; ?>

