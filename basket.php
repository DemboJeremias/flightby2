<?php
require_once ('include/header.php');

require_once 'controller/submitBasket.php';
?>




    <table>
            <thead>
                <tr>
                <th>Departure</th>
                <th>Time</th>
                <th>Destination</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>


        <?php foreach ($basket as $item): ?>

                <tr>

                        <td><?= $item[0]->departure ?></td>
                        <td><?= $item[0]->time ?></td>
                        <td><?= $item[0]->city ?> </td>
                        <td><?= $item[0]->date ?></td>

                </tr>






        <?php endforeach;?>

    </table>






















<?php require_once 'include\_footer.php'; ?>