<?php
$db_host='localhost';
$db_user='root';
$db_passwd='';
$db_name="emp";//Give the name as per your DB
$dbh = mysqli_connect($db_host,$db_user,$db_passwd, $db_name) 
or 
die("Error connecting to the database");
echo"connection is success";//not required only for first time use
?>
