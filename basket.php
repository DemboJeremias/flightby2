<?php require_once 'include\header.php';


require_once 'database\DB_connection.php';
require_once 'database\db_functions.php';
require_once 'controller\submitBasket.php';



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
                <form  method="post" action="basket.php"  target="POPUPW"
                       onsubmit="POPUPW = window.open('about:blank','POPUPW',
   'width=600,height=400');">
                    <td><?=$item->departure;?></td>
                    <td><?=$item->time;?></td>
                    <td><?=$item->city;?> </td>
                    <input type="hidden" name="id" value="<?= $item->flight_id ?>">
                    <td><input name="basket" type="submit" value="add to basket"></td>
                    <?php $flightID = $item->flight_id ?>
                </form>
            </tr>


        <?php endforeach;?>


        </tbody>
    </table>






















<?php require_once 'include\_footer.php'; ?>