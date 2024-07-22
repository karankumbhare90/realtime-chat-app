<?php
include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" placeholder="Email Address">
                </div>

                <div class="field input">
                    <label for="lname">Password</label>
                    <input type="password" name="password" placeholder="Enter your Password">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to">
                </div>
            </form>

            <div class="link">Dont't have an account ? <a href="./index.php">Signup</a> </div>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>