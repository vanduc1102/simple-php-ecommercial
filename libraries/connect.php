<?php
//Require
require 'configs/config.php';


$connect = mysql_pconnect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die('Not connected DB!');
$db = mysql_select_db(DB_DATABASE, $connect) or die('Not selected DB!');

mysql_query('SET NAMES UTF8', $connect);
?>
