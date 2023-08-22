<?php

session_start();
include 'config.php';
?>
<!-- <div class="card-product-box">
           <!-- T-shirt  -->
           <!-- <div class="card tshirt"> 
            <div class="img">
              <img src="" alt="" /> -->
            <!-- </div> -->
            <!--<div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a> -->
          <!-- </div>  -->
         
         

          <!-- jeans -->
          <!-- <div class="card jeans">
            <div class="img">
              <img src="image/jeans01.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <!-- <a href="#" class="btn">Buy</a> -->
          <!-- </div>  -->
         

          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes01.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div> -->
            <!-- <a href="#" class="btn">Buy</a> -->
          <!-- </div> -->
          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes02.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div> -->
          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes03.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div> -->
          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes04.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div> -->

          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes01.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div> -->
          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes02.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div> -->
          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes03.png" alt="" />
            </div> -->
            <!-- <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div>
          <!-- shoes -->
          <!-- <div class="card shoes">
            <div class="img">
              <img src="image/shoes04.png" alt="" />
            </div>
            <div class="text-desc">
              <h3>White Tshirt</h3>
              <h4>Men White T-shirt</h4>
              <h3>$.3.00</h3>
            </div>
            <a href="#" class="btn">Buy</a>
          </div> -->

<?php 
include 'config.php';
include('includes/header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="sub-products.css" />
    <title>Document</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-mid-12">
            <div class="container">
                <div class="row">
                    <!-- <div class="header">
                        <h1>Add Sub-Products</h1>
                        <ul class="menu">
                            <li class="button" id=""><a href="#">Army</a></li>
                            <li class="button" id="jeans"><a href="#">Navy</a></li>
                            <li class="button" id="shoes"><a href="#">Air Force</a></li>
                        </ul>
                    </div>
                    <div class="header">
                         <ul class="menu">
                            <li class="button " id=""><a href="#">Machine</a></li>
                            <li class="button" id=""><a href="#">Pistols</a></li>
                        </ul>
                    </div>      
                </div> -->
            </div>
            <?php
            error_reporting (E_ALL ^ E_NOTICE);
            $user= $_SESSION["user_id"];
            $query = "SELECT * FROM  users WHERE id='$user'";
            $res = mysqli_query($conn, $query);
            $row= mysqli_fetch_array($res);
            $uid = $row["id"];
            $file1=$_FILES['img1']['name'];
            $file_tmp1=$_FILES['img1']['tmp_name'];
            $file2=$_FILES['img2']['name'];
            $file_tmp2=$_FILES['img2']['tmp_name'];
            $file3=$_FILES['img3']['name'];
            $file_tmp3=$_FILES['img3']['tmp_name'];
            $file4=$_FILES['img4']['name'];
            $file_tmp4=$_FILES['img4']['tmp_name'];
            $data1=[];
            $data1=[$file1];
            $data2=[];
            $data2=[$file2];
            $data3=[];
            $data3=[$file3];
            $data4=[];
            $data4 = [$file4];
            $images1=implode(' ',$data1);
            $images2=implode(' ',$data2);
            $images3=implode(' ',$data3);
            $images4=implode(' ',$data4);
            if (isset($_REQUEST["submit"])) 
            {
              $wname = mysqli_real_escape_string($conn, $_POST["wname"]);
              //echo $wname;
              $wcategory = mysqli_real_escape_string($conn, $_POST["wcategory"]);
              //echo $wcategory;
              $wsub_category = mysqli_real_escape_string($conn, $_POST["wsub-category"]);
              //echo $wsub_category;
              $wsub_category = strtoupper($wsub_category);
              //echo $wsub_category;
              //$desc = mysqli_real_escape_string($conn, $_POST["desc"]);
              $date = mysqli_real_escape_string($conn, $_POST["date"]);
              //echo $date;
              $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
              //echo $quantity;
              $price = mysqli_real_escape_string($conn, $_POST["price"]);
              //echo $price;
              $sql = "INSERT INTO weapons (WNAME,WCATEGORY, WSUBCATEGORY, WDATE,WQUANTITY) VALUES ('$wname','$wcategory','$wsub_category','$date','$quantity')";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                $_POST["wname"] = "";
                $_POST["wcategory"] = "";
                $_POST["wsub-category"] = "";
                $_POST["date"] = "";
                $_POST["quantity"] = "";
                echo "<script>alert('Product Details Successfully Uploaded');</script>";
            }
            else {
              echo "<script>alert('Product Details Failed to Upload');</script>";
            }
            $query = "SELECT WID FROM  weapons WHERE WNAME='$wname'";
            $res = mysqli_query($conn, $query);
            $row= mysqli_fetch_array($res);
            $wid = $row["WID"];
            $_SESSION['weapon_id'] = $wid;
            //echo $wid;
            $query1= "INSERT INTO manufacturing_company_weapon (MID,WID,PRICE) VALUES ('$uid','$wid','$price')";
            $res2 = mysqli_query($conn, $query1);
            if($res2)
            {
                $_POST["price"] = "";
            }
            $query="INSERT INTO weapons_images (WID,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4) values('$wid','$images1','$images2','$images3','$images4')";
            $fire=mysqli_query($conn,$query);
            if($fire)
            {
              move_uploaded_file($file_tmp1, 'weapons_images/'.$file1);
              move_uploaded_file($file_tmp2, 'weapons_images/'.$file2);
              move_uploaded_file($file_tmp3, 'weapons_images/'.$file3);
              move_uploaded_file($file_tmp4, 'weapons_images/'.$file4);
              echo "<script>alert('Image Successfully Uploaded');</script>";
            }
            else
            {
              echo "<script>alert('Image Upload Failed');</script>";
            }
            }
            ?>
            <div class="contact-form" id="popup">
        
        <!-- <span class="circle one"></span>
        <span class="circle two"></span> -->
        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <h3 class="title">Weapon Details</h3>
            <div class="input-container">
            <input type="text" name="wname" class="input" value="<?php echo $_POST["wname"]; ?>" />
            <label for="">Weapon Name</label>
            <span>Weapon Name</span>
          </div>
          <div class="input-container">
            <input type="text" name="wcategory" class="input" value="<?php echo $_POST["wcategory"]; ?>"/>
            <label for="">Category</label>
            <span>Category</span>
          </div>
          <div class="input-container">
            <input type="text" name="wsub-category" class="input" value="<?php echo $_POST["wsub-category"]; ?>"/>
            <label for="">Sub-Category</label>
            <span>Sub-Category</span>
          </div>
          <div class="input-container">
            <input type="file" name="img1" class="input" multiple/>
            <label for="">Upload Image1</label>
            <span>Upload Image1</span>
          </div>
          <div class="input-container">
            <input type="file" name="img2" class="input" multiple/>
            <label for="">Upload Image2</label>
            <span>Upload Image2</span>
          </div>
          <div class="input-container">
            <input type="file" name="img3" class="input" multiple/>
            <label for="">Upload Image3</label>
            <span>Upload Image3</span>
          </div>
          <div class="input-container">
            <input type="file" name="img4" class="input" multiple/>
            <label for="">Upload Image4</label>
            <span>Upload Image4</span>
          </div>
          <!-- <div class="input-container">
            <input type="file" name="image" class="input" />
            <label for="">Upload Image</label>
            <span>Upload Image</span>
          </div> -->
          <!-- <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Phone</label>
            <span>Phone</span>
          </div> -->
          <!-- <div class="input-container textarea">
            <textarea name="desc" class="input" value="<?//php echo $_POST["desc"]; ?>"></textarea>
            <label for="">Description</label>
            <span>Description</span>
          </div> -->
          <div class="input-container">
            <input type="date" name="date" class="input" value="<?php echo $_POST["date"]; ?>"/>
            <label for="">Date</label>
            <span>Date</span>
          </div>
          <div class="input-container">
            <input type="number" name="quantity" class="input" value="<?php echo $_POST["quantity"]; ?>"/>
            <label for="">Quantity</label>
            <span>Quantity</span>
          </div>
          <div class="input-container">
            <input type="text" name="price" class="input" value="<?php echo $_POST["price"]; ?>"/>
            <label for="">Weapon Price</label>
            <span>Weapon Price</span>
          </div>
          <!-- <button name="submit" class="submit">Submit</button> -->
          <input type="submit" id="submit" name="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>
</div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="main1.js"></script>
    <script src="app1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    
</body>
</html>
    

        <!-- <form action="index.html" autocomplete="off" method="post" enctype="multipart/form-data" action="file-upload.php">
          <div class="form-group">
            <label>Image One</label>
            <input type="file" name="image[]" class="form-control" multiple />
          </div> -->
          <!-- <div class="form-group">
            <label>Image Two</label>
            <input type="file" name="image[]" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Image Three</label>
            <input type="file" name="image[]" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Image Four</label>
            <input type="file" name="image[]" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Image Five</label>
            <input type="file" name="image[]" class="form-control"/>
          </div> -->
          <!-- <input type="submit" name="submit" value="Submit" class="btn btn-primary"> -->
        <!-- </form> -->
    
   

      <!-- <div class="loadmore">
        <a href="#" id="LoadMore">Load More</a>
      </div>
    </div> -->

    <!-- <script>
      let popup = document.getElementById("popup");

      function openpopup(){
        popup.classList.add("open-popup");
      }
      
    </script> -->