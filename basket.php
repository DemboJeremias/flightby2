<?php
require_once ('include/header.php');

require_once 'controller/submitBasket.php';
?>


    <h2 id="title">The Flight Has Been Added to The Basket</h2>
    <table>
        <thead>
            <tr>
                <th>Departure</th>
                <th>Time</th>
                <th>Destination</th>
                <th>Date</th>
            </tr>
        </thead>

        <?php foreach ($basket as $item): ?>
            <tr>
                <td><?= $item[0]->departure ?></td>
                <td><?= $item[0]->time ?></td>
                <td><?= $item[0]->city ?> </td>
                <td><?= $item[0]->date ?></td>
            </tr>

        <?php endforeach;?>

        <form method="post" action="checkout.php">
            <td><input name="checkout" type="submit" value="Check Out"></td>
        </form>

    </table>






















<?php require_once 'include\_footer.php'; ?>