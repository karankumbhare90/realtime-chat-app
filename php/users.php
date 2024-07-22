<?php
session_start();

include_once "config.php";
$outgoind_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";


if (mysqli_num_rows($sql) == 1) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        include 'data.php';
    }
}

echo $output;
?>