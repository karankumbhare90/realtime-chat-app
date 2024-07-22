<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat-app";

$conn = new mysqli($servername, $username, $password, $dbname);

global $conn;
if (!$conn) {
    echo "Error while connecting " . mysqli_connect_errno();
}

?>