<?php

//This script will handle login
session_start();

// Check if the user is already logged in 
if(isset($_SESSION['username']))
{
    header("Location: welcome.php");
    
}
require_once "config.php";

$username = $password = "";
$err ="";

// If request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username and password";
    }
    else
    {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

    if(empty($err))
   {
        $sql = "SELECT id, username,  password FROM admin_table WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        //Try to execute this statement
        if(mysqli_stmt_execute($stmt))
        {
            mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
            {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password, $hashed_password))
                    {
                        // This means the password is correct. Allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;
                        
                        // Redirect user to welcome page
                        header("Location: welcome.php");

                    }
                }
            }
        }
    }


}



?>


















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="" autocomplete="off" class="sign-in-form" method="post">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <!-- <h6>Not registred yet?</h6> -->
                            <!-- <a href="#" class="toggle">Sign up</a> -->
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="username" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Username</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn" />

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>
                    <!-- index.html -->

                    <!-- <form action="" autocomplete="off" class="sign-up-form" method="post">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="username" class="input-field" autocomplete="off" required />
                                <label>Username</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" name="email" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="password" class="input-field" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="confirm_password" class="input-field" autocomplete="off" required />
                                <label>Confirm Password</label>
                            </div>

                            <input type="submit" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form> -->
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/image1.png" class="image img-1 show" alt="" />
                        <img src="./img/image2.png" class="image img-2" alt="" />
                        <img src="./img/image3.png" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
</body>

</html>