<?php

session_start();
include_once ("./config.php");

$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check email is already exist or not
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

        if (mysqli_num_rows($sql) > 0) {
            // if email aready exist
            echo "$email - This email already exist..!!";
        } else {
            // Check user upload files or not
            if (isset($_FILES['image'])) {
                // if file is uploaded
                $img_name = $_FILES['image']['name']; // Uploaded image name
                $tmp_name = $_FILES['image']['tmp_name']; // Uploaded image temparary name

                // let's explode image and get the image extension
                $img_explode = explode('.', $img_name); // Separate the extention
                $img_extension = end($img_explode); // // Store the extention

                $extensions = ['png', 'jpg', 'jpeg']; // Extensions array

                if (in_array($img_extension, $extensions) === true) {
                    $time = time();

                    $new_img_name = $time . $img_name;

                    if (move_uploaded_file($tmp_name, "images/$new_img_name")) {
                        $status = "Active now"; // Status will be active while user doesn't logout)
                        $random_id = rand(time(), 10000000);

                        // Insert user detail in table
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) 
                                                    VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                        if ($sql2) {
                            // If Data is inserted
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id']; // using this session we used user unique_id in other php file
                                echo "Success";
                            }
                        } else {
                            echo "Something went wrong..!!";
                        }
                    }
                } else {
                    echo "Please select an Image file - jpeg, jpg, png ..!!";
                }
            } else {
                echo "Please select an image file..!!";
            }
        }
    } else {
        echo "$email - This is not validate email..!!";
    }
} else {
    echo "All input fields are required..!!";
}
?>