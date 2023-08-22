<?php

session_start();

/*if(!isset($_SESSION['loggedin']) || isset($_SESSION['logged_in']) !==true)
{
    header("location: login.php");
}*/
/*else
{*/
    echo "welcome";
/*}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    </head>
    <body>
        <li>
            <a href="logout.php">Logout</a>
        </li>
        </body>

</html>