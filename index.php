<?php
session_start();
if (isset($_SESSION["unique_id"])) {
    header("location: user.php");
}
?>

<?php
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" placeholder="Email Address" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter new Password" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field image">
                    <label for="image">Profile Picture</label>
                    <input type="file" name="image" required>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to">
                </div>
            </form>

            <div class="link">Already have an account ? <a href="./login.php">Login</a> </div>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>
    <script src="./js/signup.js"></script>
</body>

</html>