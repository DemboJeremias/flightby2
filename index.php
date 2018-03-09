
<?php require_once ('./include/header.php');?>
<?php require_once ('./model/classes.php'); ?>
<?php require_once('./database/DB_connection.php'); ?>
<?php require_once ('./controller/getdeparture.php'); ?>



<table style="width:50%">

    <thead>
        <tr>
            <th>Departure</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
    </thead>
        <tbody>
            <tr>

                <td>
                    <select>

                    </select>
                </td>
                <td>

                </td>
                <td><input type="date"> </td>
                <td> <button>Search</button> </td>
    </tr>

        </tbody>
</table>






<?php require_once ('./include/_footer.php');?>

