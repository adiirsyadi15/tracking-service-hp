<?php

$databasetype = 'mysql';
$server='localhost';
$user='root';
$password='';
$database='servis_hp';

mysql_connect($server,$user,$password) or die("query failed with error: ".mysql_error());
mysql_select_db($database);
?>