<?php
session_start();
include_once ("./config.php");
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);


if (!empty($email) && !empty($password)) {
    // Lets chech the user available or not
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' and password = '{$password}'");

    if (mysqli_num_rows($sql) > 0) {
        // if user crediential matches
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "Success";
    } else {
        echo "Email and Password is incorrect";
    }
} else {
    echo "All inputs are required";
}

?>