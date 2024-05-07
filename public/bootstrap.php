<?php

require_once './MySQLConnection.php';

$host = 'sql-server';
$dbName = 'classicmodels';
$username = 'root';
$password = 'root';

global $mysqlConnection;

$mysqlConnection = new MySQLConnection($host, $dbName, $username, $password);