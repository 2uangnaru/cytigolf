<?php

$servername = "mysql5034.site4now.net";
$username = "a7e3e7_quangto";
$password = "Zz120201";
$dbname = "db_a7e3e7_quangto";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (! $conn){
    die ("Connection Fail: ".mysqli_connect_errno());
}
