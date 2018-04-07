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


        <?php foreach ($_SESSION['basket'] as $item): ?>
            <?php foreach ($res2 as $item2): ?>
                <tr>

                        <td><?=$item2->departure;?></td>
                        <td><?=$item2->time;?></td>
                        <td><?=$item2->city;?> </td>
                        <td><?=$item2->date;?></td>

                </tr>


            <?php endforeach;?>



        <?php endforeach;?>


        </tbody>


               <?php foreach ($_SESSION['basket'] as $item): ?>
                 <tr>
                    <td><?=$item?></td>
                 </tr>
              <?php endforeach;?>
            </tbody>

    </table>






















<?php require_once 'include\_footer.php'; ?>