<?php
$host = 'localhost';
$username = 'root';
$password = 'Mr.KashifKhan';
$db_name = 'contact';

$connection = mysqli_connect($host, $username, $password, $db_name);

if ($connection) {
    echo "successfull";
} else {
    echo "error";
}
?>