<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "copras";

$dbh = new mysqli($servername, $username, $password, $dbname);

if ($dbh->connect_error) {
    die("Connection failed: " . $dbh->connect_error);
}

?>