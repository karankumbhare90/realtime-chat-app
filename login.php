<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message !!</div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" placeholder="Email Address">
                </div>

                <div class="field input">
                    <label for="lname">Password</label>
                    <input type="password" placeholder="Enter your Password">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to">
                </div>
            </form>

            <div class="link">Dont't have an account ? <a href="./index.html">Signup</a> </div>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>
</body>

</html>