<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';


/* if (isset($_POST["submit"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));

    if ($password === $cpassword) {
        $photo_name = mysqli_real_escape_string($conn, $_FILES["photo"]["name"]);
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else {
            $sql = "UPDATE users SET full_name='$full_name', password='$password', photo='$photo_new_name' WHERE id='{$_SESSION["user_id"]}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('Profile can not Updated.');</script>";
                echo  $conn->error;
            }
        }
    } else {
        echo "<script>alert('Password not matched. Please try again.');</script>";
    }
}
*/
?>
<!--  //php include('includes/header.php'); 

<div class="container">
    <div class="row">
        <div class="col-mid-12">
            <div class="row mt-4">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                                <h4 class="mb-0">$53k</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                                <h4 class="mb-0">3,462</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Sales</p>
                                <h4 class="mb-0">$103,430</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
</div>
</div>

//php include('includes/footer.php'); -->





<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload = function(){null;}
    </script>
</head>
<body bgcolor="">
<div class="container">
    <div class="row">
        <div class="col-mid-12">
        <div class="container">
            <?php
            error_reporting (E_ALL ^ E_NOTICE);
            $user= $_SESSION["user_id"];
            //echo $user;
            //print_r($_FILES); 
            /*if(isset($_FILES['image']))
            {
                echo "<pre>";
                print_r($_FILES); 
                echo "<pre>";
            }*/
            $query = "SELECT * FROM  users WHERE id='$user'";
            $res = mysqli_query($conn, $query);
            $row= mysqli_fetch_array($res);
            //print_r($row);
            $uid = $row["id"];
            //print_r($uid);
            $file1=$_FILES['image']['name'];
            $file_tmp1=$_FILES['image']['tmp_name'];
            $data1=[];
            $data1=[$file1];
            $images1=implode(' ',$data1);
            //print_r($images1);
            if (isset($_REQUEST["update"]))
            {

                $mname = mysqli_real_escape_string($conn, $_POST["mname"]);
                $mlocation = mysqli_real_escape_string($conn, $_POST["mlocation"]);
                $mdate = mysqli_real_escape_string($conn, $_POST["mdoe"]);
                $myear = mysqli_real_escape_string($conn, $_POST["myear"]);
                //$user = $_SESSION["user_id"];
                //$location="upload/";
                $mcategory = mysqli_real_escape_string($conn, $_POST["mcategory"]);
                /*$file1=$_FILES['img']['name'];
                $file_tmp1=$_FILES['img']['tmp_name'];
                $data1=[];
                $data1=[$file1];
                $images1=implode(' ',$data1);*/
                /*$filename=$_FILES['img']['name'][$key];
                $filename_tmp=$_FILES['img']['tmp_name'][$key];
                $finalimg='';
                move_uploaded_file($filename_tmp, 'manufacturer_profile_img/'.$filename);
                $finalimg=$filename;*/
                
                $sql = "INSERT INTO manufacturer_company (user_id,MNAME,MIMAGE, MDATE,MYEAR, MLOCATION,MCATEGORY) VALUES ('$uid','$mname','$images1','$mdate','$myear', '$mlocation','$mcategory')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    //move_uploaded_file($file_tmp1, 'manufacturer_profile_img/'.$file1);
                    move_uploaded_file($file_tmp1, 'manufacturer_profile_img/'.$file1);
                    $_POST["mname"] = "";
                    $_POST["mlocation"] = "";
                    $_POST["mdoe"] = "";
                    $_POST["myear"] = "";
                    $_POST["mcategory"] = "";

                    echo "<script>alert('Profile Successfully Updated');</script>";
                } else {
                    echo "<script>alert('Profile Failed to Update');</script>";
                  }
                //mysqli_query("INSERT INTO manufacturer_company(MNAME,MDATE,MLOCATION,MCATEGORY) VALUES ('$mname','$mdate','$mlocation','$mcategory')");
            }
            ?>
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Update Profile</h2>
            <div class="input-container">
                <div class="img-container">
                    <img src="images/Default Avatar.png" alt="">
                </div>
                <div class="fields">
                    <div class="field">
                        <label for="">Manufacturing Company Name</label>
                        <input type="text" name="mname" placeholder="Manufacturing Company Name Here" value="<?php echo $_POST["mname"]; ?>">
                    </div>
                     <div class="field"> 
                        <label for="">Manufacturing Company Location</label>
                        <input type="text" name="mlocation" placeholder="Location Here" value="<?php echo $_POST["mlocation"]; ?>">
                    </div>
                    <div class="field"> 
                        <label for="">Year of Experience</label>
                        <input type="text" name="myear" placeholder="Year of Experience" value="<?php echo $_POST["myear"]; ?>">
                    </div> 
                </div>
                <div class="fields">
                    <div class="field">
                        <label for="">Date Of Establishment</label>
                        <input type="date" name="mdoe" value="<?php echo $_POST["mdoe"]; ?>">
                    </div>
                    <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                    <div class="field">
                        <label>Profile Picture of Company</label>
                        <input type="file" name="image" id="img"/>
                    </div>
                    <!-- </form> -->
                    <!-- <div class="field">
                        <label>Profile Picture of Company</label>
                        <input type="file" name="img" class="form-control">
                    </div> -->
                    <div class="field">
                        <label for="">Category of Manufacturing</label>
                        <input type="text" name="mcategory" placeholder="Category Details Here" value="<?php echo $_POST["mcategory"]; ?>">
                    </div>
            </div>
                    <button name="update" id="update">Update Now</button>
                    <!-- <input type="submit" id="update" name="update" value="Update Now" /> -->
                    <!-- <button name="back" id="back">Back</button> -->
        </form>
        <!-- <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="img"/>
        </form> -->
    </div>
    <!-- <script src="update.js"></script> -->
        <!-- <div class="wrapper">
        <p>Wanna logout?
            <a href="logout.php">Click Here</a>
        </p>
        </div> -->
    </div>
</div>
</body>
</html>

<?php include('includes/footer.php'); ?>










<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/weapons_and_ammunitions_manufacturer/login_codee/includes/style1.css">
     <link rel="stylesheet" href="style.css" /> -->
    <!-- <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <p>Wanna logout?
            <a href="logout.php">Click Here</a>
        </p>
</body>
</html> --> 



 <!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Profile Page - Pure Coding</title>
</head>



</html>  -->
        <!-- <h2>Profile</h2>
        <form action="" method="post" enctype="multipart/form-data"> -->
            <!--//php

            //$sql = "SELECT * FROM users WHERE id='{$_SESSION["user_id"]}'";
            //$result = mysqli_query($conn, $sql);
            //if (mysqli_num_rows($result) > 0) {
                //while ($row = mysqli_fetch_assoc($result)) {
            //?>
                    <div class="inputBox">
                        <input type="text" id="full_name" name="full_name" placeholder="Full Name" value="</*?php echo $row['full_name']; ?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="email" id="email" name="email" placeholder="Email Address" value="</?php echo $row['email']; ?>" disabled required>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password" name="password" placeholder="Password" value="</?php echo $row['password']; ?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="</?php echo $row['password']; ?>" required>
                    </div>
                    <div class="inputBox">
                        <label for="photo">Photo</label>
                        <input type="file" accept="image/*" id="photo" name="photo" required>
                    </div>
                    <img src="uploads/</?php echo $row["photo"]; ?>" width="150px" height="auto" alt="">
            </?php
                }
            }

            ?>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>

</html> 