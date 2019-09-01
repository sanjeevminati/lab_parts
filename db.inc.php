<?php

$databaseHost = '127.0.0.1';//or localhost
$databaseName = 'loginsystem'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

$conn= mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>