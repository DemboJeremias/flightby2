<?php
require_once ('database/DB_connection.php');
date_default_timezone_set("Europe/London");
require_once ('database/db_functions.php');
header("Content-type: application/rss+xml");
$rss = updateRSS();
echo $rss;
