<?php require_once ('include/header.php'); ?>
<?php require_once ('controller/admin_controller.php'); ?>

<?php if ($allowed): ?>

    <ul>
        <li><a href="admin.php?func=addflight">Add New Flight</a></li>
        <li><a href="admin.php?func=addadmin">Add New Administrator</a></li>
    </ul>

<?php endif; ?>

<?php require_once ('include/_footer.php'); ?>
