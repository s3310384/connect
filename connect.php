<?php
/**
* Checks the connection to the local install of MySQL
*/
require_once('db.php');
if (!$dbconn = mysql_connect(DB_HOST, root, difficultpassword)) {
echo 'Could not connect to mysql on ' . DB_HOST . "\n";
exit;
}
echo 'Connected to mysql on ' . DB_HOST . "\n";
if (!mysql_select_db(DB_NAME, $dbconn)) {
echo 'Could not use database ' . DB_NAME . "\n";
echo mysql_error() . "\n";
exit;
}
echo 'Connected to database ' . DB_NAME . "\n";
?>