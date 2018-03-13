
<?php session_start();?>
<?php require_once ('./include/header.php');?>
<?php require_once ('./model/classes.php'); ?>
<?php require_once('./database/DB_connection.php'); ?>
<?php require('./controller/getflight.php');

$rez = $_POST['dest'];
$result = $DBQuery->GetDepartureThroughName($rez);

?>



<table>
    <thead>
    <tr>
        <th>Departure</th>
        <th>Time</th>
        <th>Destination</th>
    </tr>
    </thead>
    <tbody>


    <?php foreach ($result as $item): ?>

    <tr>
        <form method="post" action="">
        <td><?=$item->departure;?></td>
        <td><?=$item->time;?></td>
        <td><?=$item->city;?> <input type="submit" value="add to basket"></td>

        </form>
    </tr>


<?php endforeach;?>


    </tbody>
</table>


<?php require_once ('./include/_footer.php');?>