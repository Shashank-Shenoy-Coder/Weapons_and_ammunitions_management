<?php
require_once "config.php";

$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    //Check if username is empty
    if(empty(trim($_POST['username'])))
    {
        $username_err = "Username cannot be blank";
    }
    else
    {
        $sql = "SELECT id FROM admin_table WHERE username= ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt,"s",$param_username);
            
            //Set the value of param username
            $param_username = trim($_POST['username']);


            //Try to execute this statement
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else
            {
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close(($stmt));

   //Check for email 
   if(empty(trim($_POST['email'])))
   {
       $email_err = "Email cannot be blank";
   }
   else
   {
       $sql = "SELECT id FROM admin_table WHERE email= ?";
       $stmt = mysqli_prepare($conn, $sql);
       if($stmt)
       {
           mysqli_stmt_bind_param($stmt,"s",$param_email);
           
           //Set the value of param username
           $param_email = trim($_POST['email']);


           //Try to execute this statement
           if(mysqli_stmt_execute($stmt))
           {
               mysqli_stmt_store_result($stmt);
               if(mysqli_stmt_num_rows($stmt) == 1)
               {
                   $email_err = "This email already exists";
               }
               else{
                   $email = trim($_POST['email']);
               }
           }
           else
           {
               echo "Something went wrong";
           }
       }
   }

   mysqli_stmt_close(($stmt));


// Check for password
if(empty(trim($_POST['password'])))
{
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password']))  < 5) 
{
    $password_err = "Password cannot be less than 5 characters";
}
else
{
    $password = trim($_POST['password']);
}

//Check for confirm password field
if(trim($_POST['confirm_password'])  != trim($_POST['confirm_password']))
{
    $password_err = "Password should match";
}

//If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO admin_table (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

        //Set these parameters
        $param_username = $username;
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

         //Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("Location:login.php");
        }
        else
        {
                echo "Something went wrong...  cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
if (!isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
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
            <form action="" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>easyclass</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
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

            <form action="" autocomplete="off" class="sign-up-form" method="post">
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
                  <input
                    type="text"
                    minlength="4"
                    name="username"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="confirm_password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Confirm Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
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
