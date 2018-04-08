<?php require_once ('include/header.php'); ?>
<?php require_once ('controller/admin_controller.php'); ?>

<?php if ($allowed): ?>
    <ul>
        <hr>
        <li><a href="admin.php?func=addflight">Add New Flight</a></li>
        <li><a href="admin.php?func=viewflights">Manage Existing Flights</a></li>
        <hr>
    </ul>

    <?php if (isset($_POST['go'])): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <?php if (isset($_GET['func'])): ?>

        <?php if ($_GET['func'] == 'addflight'): ?>
            <form method="post" action="admin.php">
                <label>Select Departure</label>
                <select name="departure">
                    <?php foreach ($depart as $d): ?>
                        <option value="<?= $d->departure_id ?>"><?= $d->departure ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Select Country</label>
                <select name="country">
                    <?php foreach ($countries as $c): ?>
                        <option value="<?= $c->country ?>"><?= $c->country ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Select Destination</label>
                <select name="city">
                    <?php foreach ($dest as $dt): ?>
                        <option value="<?= $dt->city ?>"><?= $dt->city ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="type">
                    <option value="Domestic">Domestic</option>
                    <option value="European">European</option>
                    <option value="International">International</option>
                </select>
                <label>Select Time</label>
                <input type="time" name="time">
                <label>Select Date</label>
                <input type="date" name="date">
                <input type="hidden" name="go" value="addflight">
                <input type="submit" value="Add Flight">
            </form>
        <?php elseif ($_GET['func'] == 'viewflights'): ?>
           <table>
               <?php foreach ($flights as $f): ?>
                   <tr>
                       <td><?= $f->departure ?></td>
                       <td><?= $f->country ?></td>
                       <td><?= $f->city ?></td>
                       <td><?= $f->type ?></td>
                       <td><?= $f->time ?></td>
                       <td><?= $f->date ?></td>
                       <form method="get" action="admin.php">
                           <input type="hidden" name="func" value="editflight">
                           <input type="hidden" name="id" value="<?= $f->flight_id ?>">
                           <td><input type="submit" value="EDIT"></td>
                       </form>
                       <form method="post" action="admin.php">
                           <input type="hidden" name="go" value="deleteflight">
                           <input type="hidden" name="id" value="<?= $f->flight_id ?>">
                           <td><input type="submit" value="DELETE"></td>
                       </form>
                   </tr>
               <?php endforeach; ?>
           </table>
        <?php elseif ($_GET['func'] == 'editflight'): ?>
            <form method="post" action="admin.php">
                <label>Country</label>
                <input type="text" name="country" value="<?= $flight[0]->country ?>">
                <label>City</label>
                <input type="text" name="city" value="<?= $flight[0]->city ?>">
                <label>Type</label>
                <input type="text" name="type" value="<?= $flight[0]->type ?>">
                <label>Time</label>
                <input type="time" name="time" value="<?= $flight[0]->time ?>">
                <label>Date</label>
                <input type="date" name="date" value="<?= $flight[0]->date ?>">
                <input type="hidden" name="go" value="editflight">
                <input type="hidden" name="id" value="<?= $flight[0]->destination_id ?>">
                <input type="submit" value="Update Flight">
            </form>
        <?php elseif ($_GET['func'] == 'deleteflight'): ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<?php require_once ('include/_footer.php'); ?>
