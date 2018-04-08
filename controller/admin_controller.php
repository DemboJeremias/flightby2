<?php



$allowed = false;
if (!isset($_SESSION['access'])) {
    header("location: index.php");
} elseif ($_SESSION['access'] == 0) {
    header("location: index.php");
} else {
    $allowed = true;
}

?>