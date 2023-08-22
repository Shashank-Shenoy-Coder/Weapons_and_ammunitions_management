<?php
session_start();
include 'config.php';
include('includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=.tabs, initial-scale=1.0">
  <link rel="stylesheet" href="tabs.css">
  <link rel="stylesheet" href="subtab.css">
  <link rel="stylesheet" href="subtab1.css">
  <link rel="stylesheet" href="subtab2.css">
  <title>Document</title>
</head>

<body>
  <div class="tabs">
    <div class="tab-header">
      <div class="active">Airforce</div>
      <div>Naval Force</div>
      <div>Landforce</div>
    </div>
    <div class="tab-indicator"></div>
    <div class="tab-body">
      <div class="active">
        <div class="hero">
          <div class="btn-box">
            <button id="btn1" onclick="openHTML()">BOMBS</button>
            <button id="btn2" onclick="openCSS()">ROCKETS</button>
            <!-- <button id="btn3">JAVASCRIPT</button> -->
          </div>

          <div id="content1" class="content">
            <!-- HTML sub tab content start -->
            <?php
            error_reporting(E_ALL ^ E_NOTICE);
            error_reporting(E_ERROR | E_PARSE);
            $user = $_SESSION["user_id"];
            $query = "SELECT * FROM  users WHERE id='$user'";
            $res = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($res);
            $uid = $row["id"];
            /*$weapon_id= $_SESSION['weapon_id'];
                    $query = "SELECT WSUBCATEGORY FROM  weapons WHERE WID='$weapon_id'";
                    $res = mysqli_query($conn, $query);
                    $row= mysqli_fetch_row($res);
                    $wsubcat = $row["WSUBCATEGORY"];*/
            if (isset($_REQUEST["submit"])) {
              $alaunchname = mysqli_real_escape_string($conn, $_POST["alaunchname"]);
              //echo $alaunchname;
              if ($alaunchname != "") {
                //echo "going in";
                $query = "SELECT WSUBCATEGORY FROM  weapons WHERE WNAME='$alaunchname'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                $wsubcat = $row["WSUBCATEGORY"];
                if ($wsubcat == 'AIR LAUNCHED BOMBS') {
                  $alaunchname = mysqli_real_escape_string($conn, $_POST["alaunchname"]);
                  //echo $alaunchname;
                  $alaunchwght = mysqli_real_escape_string($conn, $_POST["alaunchwght"]);
                  //echo $alaunchwght;
                  $alaunchdiam = mysqli_real_escape_string($conn, $_POST["alaunchdiam"]);
                  //echo $alaunchdiam;
                  $alaunchrng = mysqli_real_escape_string($conn, $_POST["alaunchrng"]);
                  //echo $alaunchrng;
                  $alaunchcpcty = mysqli_real_escape_string($conn, $_POST["alaunchcpcty"]);
                  //echo $alaunchcpcty;
                  $alaunchdesc = mysqli_real_escape_string($conn, $_POST["alaunchdesc"]);
                  //echo $alaunchdesc;
                  $query = "SELECT WID FROM  weapons WHERE WNAME='$alaunchname'";
                  $res = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($res);
                  $wid = $row["WID"];
                  $sql = "UPDATE air_launched_bombs SET ALAUNCHNAME='$alaunchname',WDESC='$alaunchdesc',WGHT='$alaunchwght',LEN='$alaunchdiam',RNGE='$alaunchrng',MAX_CAPACITY='$alaunchcpcty' WHERE WID='$wid'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    $_POST["alaunchname"] = "";
                    $_POST["alaunchwght"] = "";
                    $_POST["alaunchdiam"] = "";
                    $_POST["alaunchrng"] = "";
                    $_POST["alaunchcpcty"] = "";
                    $_POST["alaunchdesc"] = "";
                    echo "<script>alert('Sub Product Details Successfully Uploaded');</script>";
                  } else {
                    echo "<script>alert('Sub Product Details Failed to Upload');</script>";
                  }
                }
              }
              $alnchrcktname = mysqli_real_escape_string($conn, $_POST["alnchrcktname"]);
              //echo $alnchrcktname;
              if ($alnchrcktname != "") {
                //echo  "in";
                $query = "SELECT WSUBCATEGORY FROM  weapons WHERE WNAME='$alnchrcktname' ";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                echo $row;
                $wsubcat = $row["WSUBCATEGORY"];
                echo $wsubcat;
                if ($wsubcat == 'AIR LAUNCHED ROCKETS') {
                  $alnchrcktname = mysqli_real_escape_string($conn, $_POST["alnchrcktname"]);
                  //echo $alaunchname;
                  $alnchrcktwght = mysqli_real_escape_string($conn, $_POST["alnchrcktwght"]);
                  //echo $alaunchwght;
                  $alnchrcktlen = mysqli_real_escape_string($conn, $_POST["alnchrcktlen"]);
                  //echo $alaunchdiam;
                  $alnchrcktrng = mysqli_real_escape_string($conn, $_POST["alnchrcktrng"]);
                  //echo $alaunchrng;
                  $alnchrcktcpcty = mysqli_real_escape_string($conn, $_POST["alnchrcktcpcty"]);
                  //echo $alaunchcpcty;
                  $alnchrcktdesc = mysqli_real_escape_string($conn, $_POST["alnchrcktdesc"]);
                  //echo $alaunchdesc;
                  $query = "SELECT WID FROM  weapons WHERE WNAME='$alnchrcktname'";
                  $res = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($res);
                  $wid = $row["WID"];
                  $sql = "UPDATE air_launched_rockets SET ALNCHRCKT_NAME='$alnchrcktname',WDESC='$alnchrcktdesc',WGHT='$alnchrcktwght',LEN='$alnchrcktlen',RNGE='$alnchrcktrng',MAX_CAPACITY='$alnchrcktcpcty' WHERE WID='$wid'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    $_POST["alnchrcktname"] = "";
                    $_POST["alnchrcktwght"] = "";
                    $_POST["alnchrcktlen"] = "";
                    $_POST["alnchrcktrng"] = "";
                    $_POST["alnchrcktcpcty"] = "";
                    $_POST["alnchrcktdesc"] = "";
                    echo "<script>alert('Sub Product Details Successfully Uploaded');</script>";
                  } else {
                    echo "<script>alert('Sub Product Details Failed to Upload');</script>";
                  }
                }
              }
              $missilesname = mysqli_real_escape_string($conn, $_POST["missilesname"]);
              //echo $missilesname;
              if ($missilesname != "") {
                //echo "going in";
                $query = "SELECT WSUBCATEGORY FROM  weapons WHERE WNAME='$missilesname'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                $wsubcat = $row["WSUBCATEGORY"];
                if ($wsubcat == 'MISSILES') {
                  $missilesname = mysqli_real_escape_string($conn, $_POST["missilesname"]);
                  //echo $alaunchname;
                  $missileswght = mysqli_real_escape_string($conn, $_POST["missileswght"]);
                  //echo $alaunchwght;
                  $missileslen = mysqli_real_escape_string($conn, $_POST["missileslen"]);
                  //echo $alaunchdiam;
                  $missilesrng = mysqli_real_escape_string($conn, $_POST["missilesrng"]);
                  //echo $alaunchrng;
                  $missilescpcty = mysqli_real_escape_string($conn, $_POST["missilescpcty"]);
                  //echo $alaunchcpcty;
                  $missilesdesc = mysqli_real_escape_string($conn, $_POST["missilesdesc"]);
                  //echo $alaunchdesc;
                  $query = "SELECT WID FROM  weapons WHERE WNAME='$missilesname'";
                  $res = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($res);
                  $wid = $row["WID"];
                  $sql = "UPDATE missiles SET MNAME='$missilesname',WDESC='$missilesdesc',WGHT='$missileswght',LEN='$missileslen',RNGE='$missilesrng',MAX_CAPACITY='$missilescpcty' WHERE WID='$wid'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    $_POST["missilesname"] = "";
                    $_POST["missileswght"] = "";
                    $_POST["missileslen"] = "";
                    $_POST["missilesrng"] = "";
                    $_POST["missilescpcty"] = "";
                    $_POST["missilesdesc"] = "";
                    echo "<script>alert('Sub Product Details Successfully Uploaded');</script>";
                  } else {
                    echo "<script>alert('Sub Product Details Failed to Upload');</script>";
                  }
                }
              }
              $tpdname = mysqli_real_escape_string($conn, $_POST["tpdname"]);
              //echo $tpdname;
              if ($tpdname != "") {
                //echo "going in";
                $query = "SELECT WSUBCATEGORY FROM  weapons WHERE WNAME='$tpdname'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                $wsubcat = $row["WSUBCATEGORY"];
                if ($wsubcat == 'TORPEDOES') {
                  $tpdname = mysqli_real_escape_string($conn, $_POST["tpdname"]);
                  //echo $alaunchname;
                  $tpdwght = mysqli_real_escape_string($conn, $_POST["tpdwght"]);
                  //echo $alaunchwght;
                  $tpdlen = mysqli_real_escape_string($conn, $_POST["tpdlen"]);
                  //echo $alaunchdiam;
                  $tpdrng = mysqli_real_escape_string($conn, $_POST["tpdrng"]);
                  //echo $alaunchrng;
                  $tpdcpcty = mysqli_real_escape_string($conn, $_POST["tpdcpcty"]);
                  //echo $alaunchcpcty;
                  $tpddesc = mysqli_real_escape_string($conn, $_POST["tpddesc"]);
                  //echo $alaunchdesc;
                  $query = "SELECT WID FROM  weapons WHERE WNAME='$tpdname'";
                  $res = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($res);
                  $wid = $row["WID"];
                  $sql = "UPDATE torpedoes SET TPDNAME='$tpdname',WDESC='$tpddesc',WGHT='$tpdwght',LEN='$tpdlen',RNGE='$tpdrng',MAX_CAPACITY='$tpdcpcty' WHERE WID='$wid'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    $_POST["tpdname"] = "";
                    $_POST["tpdwght"] = "";
                    $_POST["tpdlen"] = "";
                    $_POST["tpdrng"] = "";
                    $_POST["tpdcpcty"] = "";
                    $_POST["tpddesc"] = "";
                    echo "<script>alert('Sub Product Details Successfully Uploaded');</script>";
                  } else {
                    echo "<script>alert('Sub Product Details Failed to Upload');</script>";
                  }
                }
              }
              $pname = mysqli_real_escape_string($conn, $_POST["pname"]);
              //echo $pname;
              //echo $uid;
              if ($pname != "") {
                //echo "going in";
                $query = "SELECT WSUBCATEGORY,WID FROM  weapons WHERE WNAME='$pname'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                $wsubcat = $row["WSUBCATEGORY"];
                $wid = $row["WID"];
                if ($wsubcat == 'PISTOLS') {
                  $pname = mysqli_real_escape_string($conn, $_POST["pname"]);
                  //echo $alaunchname;
                  $pwght = mysqli_real_escape_string($conn, $_POST["pwght"]);
                  //echo $alaunchwght;
                  $plen = mysqli_real_escape_string($conn, $_POST["plen"]);
                  //echo $alaunchdiam;
                  $prng = mysqli_real_escape_string($conn, $_POST["prng"]);
                  //echo $alaunchrng;
                  $pcpcty = mysqli_real_escape_string($conn, $_POST["pcpcty"]);
                  //echo $alaunchcpcty;
                  $pdesc = mysqli_real_escape_string($conn, $_POST["pdesc"]);
                  //echo $alaunchdesc;
                  $query = "SELECT WID FROM  weapons WHERE WNAME='$pname'";
                  $res = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($res);
                  $wid = $row["WID"];
                  $sql = "UPDATE pistols SET PNAME='$pname',WDESC='$pdesc',WGHT='$pwght',LEN='$plen',RNGE='$prng',MAX_CAPACITY='$pcpcty' WHERE WID='$wid'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    $_POST["pname"] = "";
                    $_POST["pwght"] = "";
                    $_POST["plen"] = "";
                    $_POST["prng"] = "";
                    $_POST["pcpcty"] = "";
                    $_POST["pdesc"] = "";
                    echo "<script>alert('Sub Product Details Successfully Uploaded');</script>";
                  } else {
                    echo "<script>alert('Sub Product Details Failed to Upload');</script>";
                  }
                }
              }
              $mch_gun_name = mysqli_real_escape_string($conn, $_POST["mch_gun_name"]);
              //echo $mch_gun_name;
              if ($mch_gun_name != "") {
                //echo "going in";
                $query = "SELECT WSUBCATEGORY FROM  weapons WHERE WNAME='$mch_gun_name'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                $wsubcat = $row["WSUBCATEGORY"];
                if ($wsubcat == 'MACHINE GUN') {
                  $mch_gun_name = mysqli_real_escape_string($conn, $_POST["mch_gun_name"]);
                  //echo $alaunchname;
                  $mch_gun_wght = mysqli_real_escape_string($conn, $_POST["mch_gun_wght"]);
                  //echo $alaunchwght;
                  $mch_gun_len = mysqli_real_escape_string($conn, $_POST["mch_gun_len"]);
                  //echo $alaunchdiam;
                  $mch_gun_rng = mysqli_real_escape_string($conn, $_POST["mch_gun_rng"]);
                  //echo $alaunchrng;
                  $mch_gun_cpcty = mysqli_real_escape_string($conn, $_POST["mch_gun_cpcty"]);
                  //echo $alaunchcpcty;
                  $mch_gun_desc = mysqli_real_escape_string($conn, $_POST["mch_gun_desc"]);
                  //echo $alaunchdesc;
                  $query = "SELECT WID FROM  weapons WHERE WNAME='$mch_gun_name'";
                  $res = mysqli_query($conn, $query);
                  $row = mysqli_fetch_array($res);
                  $wid = $row["WID"];
                  $sql = "UPDATE machine_gun SET MCH_GUN_NAME='$mch_gun_name',WDESC='$mch_gun_desc',WGHT='$mch_gun_wght',LEN='$mch_gun_len',RNGE='$mch_gun_rng',MAX_CAPACITY='$mch_gun_cpcty' WHERE WID='$wid'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    $_POST["mch_gun_name"] = "";
                    $_POST["mch_gun_wght"] = "";
                    $_POST["mch_gun_len"] = "";
                    $_POST["mch_gun_rng"] = "";
                    $_POST["mch_gun_cpcty"] = "";
                    $_POST["mch_gun_desc"] = "";
                    echo "<script>alert('Sub Product Details Successfully Uploaded');</script>";
                  } else {
                    echo "<script>alert('Sub Product Details Failed to Upload');</script>";
                  }
                }
              }
              //echo $wsubcat;  
            }
            ?>
            <div class="contact-form" id="popup">
              <form action="" method="post" autocomplete="off">
                <h3 class="title">Air Launched Bombs Details</h3>
                <div class="input-container">
                  <input type="text" name="alaunchname" class="input" value="<?php echo $_POST["alaunchname"]; ?>" />
                  <label for="">Weapon Name</label>
                  <span>Weapon Name</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alaunchwght" class="input" value="<?php echo $_POST["alaunchwght"]; ?>" />
                  <label for="">Weight</label>
                  <span>Weight</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alaunchdiam" class="input" value="<?php echo $_POST["alaunchdiam"]; ?>" />
                  <label for="">Diameter</label>
                  <span>Diameter</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alaunchrng" class="input" value="<?php echo $_POST["alaunchrng"]; ?>" />
                  <label for="">Range</label>
                  <span>Range</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alaunchcpcty" class="input" value="<?php echo $_POST["alaunchcpcty"]; ?>" />
                  <label for="">Maximum Capacity</label>
                  <span>Maximum Capacity</span>
                </div>
                <div class="input-container textarea">
                  <textarea name="alaunchdesc" class="input" value="<?php echo $_POST["alaunchdesc"]; ?>"></textarea>
                  <label for="">Description</label>
                  <span>Description</span>
                </div>
                <input type="submit" id="submit" name="submit" value="Submit" />
              </form>
            </div>
          </div>
          <!-- HTML sub tab content end -->


          <div id="content2" class="content">
            <!-- CSS sub tab content start -->
            <div class="contact-form" id="popup">
              <form action="" method="post" autocomplete="off">
                <h3 class="title">Air Launched Rockets Details</h3>
                <div class="input-container">
                  <input type="text" name="alnchrcktname" class="input" value="<?php echo $_POST["alnchrcktname"]; ?>" />
                  <label for="">Weapon Name</label>
                  <span>Weapon Name</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alnchrcktwght" class="input" value="<?php echo $_POST["alnchrcktwght"]; ?>" />
                  <label for="">Weight</label>
                  <span>Weight</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alnchrcktlen" class="input" value="<?php echo $_POST["alnchrcktlen"]; ?>" />
                  <label for="">Length</label>
                  <span>Length</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alnchrcktrng" class="input" value="<?php echo $_POST["alnchrcktrng"]; ?>" />
                  <label for="">Range</label>
                  <span>Range</span>
                </div>
                <div class="input-container">
                  <input type="text" name="alnchrcktcpcty" class="input" value="<?php echo $_POST["alnchrcktcpcty"]; ?>" />
                  <label for="">Maximum Capacity</label>
                  <span>Maximum Capacity</span>
                </div>
                <div class="input-container textarea">
                  <textarea name="alnchrcktdesc" class="input" value="<?php echo $_POST["alnchrcktdesc"]; ?>"></textarea>
                  <label for="">Description</label>
                  <span>Description</span>
                </div>
                <input type="submit" id="submit" name="submit" value="Submit" />
              </form>
            </div>
          </div>
          <!-- CSS sub tab content end -->
        </div>
      </div>

      <div>
        <!-- <div class="hero"> -->
        <div class="btn-box">
          <button id="btn3" onclick="openMissiles()">MISSILES</button>
          <button id="btn4" onclick="openTorpedoes()">TORPEDOES</button>
          <!-- <button id="btn3">JAVASCRIPT</button> -->
        </div>

        <div id="content3" class="content">
          <!-- HTML sub tab content start -->
          <div class="contact-form" id="popup">
            <form action="" method="post" autocomplete="off">
              <h3 class="title">Missiles Details</h3>
              <div class="input-container">
                <input type="text" name="missilesname" class="input" value="<?php echo $_POST["missilesname"]; ?>" />
                <label for="">Weapon Name</label>
                <span>Weapon Name</span>
              </div>
              <div class="input-container">
                <input type="text" name="missileswght" class="input" value="<?php echo $_POST["missileswght"]; ?>" />
                <label for="">Weight</label>
                <span>Weight</span>
              </div>
              <div class="input-container">
                <input type="text" name="missileslen" class="input" value="<?php echo $_POST["missileslen"]; ?>" />
                <label for="">Length</label>
                <span>Length</span>
              </div>
              <div class="input-container">
                <input type="text" name="missilesrng" class="input" value="<?php echo $_POST["missilesrng"]; ?>" />
                <label for="">Range</label>
                <span>Range</span>
              </div>
              <div class="input-container">
                <input type="text" name="missilescpcty" class="input" value="<?php echo $_POST["missilescpcty"]; ?>" />
                <label for="">Maximum Capacity</label>
                <span>Maximum Capacity</span>
              </div>
              <div class="input-container textarea">
                <textarea name="missilesdesc" class="input" value="<?php echo $_POST["missilesdesc"]; ?>"></textarea>
                <label for="">Description</label>
                <span>Description</span>
              </div>
              <input type="submit" id="submit" name="submit" value="Submit" />
            </form>
          </div>
        </div>
        <!-- HTML sub tab content end -->


        <div id="content4" class="content">
          <!-- CSS sub tab content start -->
          <div class="contact-form" id="popup">
            <form action="" method="post" autocomplete="off">
              <h3 class="title">Torpedoes Details</h3>
              <div class="input-container">
                <input type="text" name="tpdname" class="input" value="<?php echo $_POST["tpdname"]; ?>" />
                <label for="">Weapon Name</label>
                <span>Weapon Name</span>
              </div>
              <div class="input-container">
                <input type="text" name="tpdwght" class="input" value="<?php echo $_POST["tpdwght"]; ?>" />
                <label for="">Weight</label>
                <span>Weight</span>
              </div>
              <div class="input-container">
                <input type="text" name="tpdlen" class="input" value="<?php echo $_POST["tpdlen"]; ?>" />
                <label for="">Length</label>
                <span>Length</span>
              </div>
              <div class="input-container">
                <input type="text" name="tpdrng" class="input" value="<?php echo $_POST["tpdrng"]; ?>" />
                <label for="">Range</label>
                <span>Range</span>
              </div>
              <div class="input-container">
                <input type="text" name="tpdcpcty" class="input" value="<?php echo $_POST["tpdcpcty"]; ?>" />
                <label for="">Maximum Capacity</label>
                <span>Maximum Capacity</span>
              </div>
              <div class="input-container textarea">
                <textarea name="tpddesc" class="input" value="<?php echo $_POST["tpddesc"]; ?>"></textarea>
                <label for="">Description</label>
                <span>Description</span>
              </div>
              <input type="submit" id="submit" name="submit" value="Submit" />
            </form>
          </div>
        </div>
        <!-- CSS sub tab content end -->
        <!-- </div>   -->
      </div>



      <div>
        <div class="btn-box">
          <button id="btn5" onclick="openPistols()">PISTOLS</button>
          <button id="btn6" onclick="openMachineGun()">MACHINE GUNS</button>
          <!-- <button id="btn3">JAVASCRIPT</button> -->
        </div>

        <div id="content5" class="content">
          <!-- HTML sub tab content start -->
          <div class="contact-form" id="popup">
            <form action="" method="post" autocomplete="off">
              <h3 class="title">Pistols Details</h3>
              <div class="input-container">
                <input type="text" name="pname" class="input" value="<?php echo $_POST["pname"]; ?>" />
                <label for="">Weapon Name</label>
                <span>Weapon Name</span>
              </div>
              <div class="input-container">
                <input type="text" name="pwght" class="input" value="<?php echo $_POST["pwght"]; ?>" />
                <label for="">Weight</label>
                <span>Weight</span>
              </div>
              <div class="input-container">
                <input type="text" name="plen" class="input" value="<?php echo $_POST["plen"]; ?>" />
                <label for="">Length</label>
                <span>Length</span>
              </div>
              <div class="input-container">
                <input type="text" name="prng" class="input" value="<?php echo $_POST["prng"]; ?>" />
                <label for="">Range</label>
                <span>Range</span>
              </div>
              <div class="input-container">
                <input type="text" name="pcpcty" class="input" value="<?php echo $_POST["pcpcty"]; ?>" />
                <label for="">Maximum Capacity</label>
                <span>Maximum Capacity</span>
              </div>
              <div class="input-container textarea">
                <textarea name="pdesc" class="input" value="<?php echo $_POST["pdesc"]; ?>"></textarea>
                <label for="">Description</label>
                <span>Description</span>
              </div>
              <input type="submit" id="submit" name="submit" value="Submit" />
            </form>
          </div>
        </div>
        <!-- HTML sub tab content end -->


        <div id="content6" class="content">
          <!-- CSS sub tab content start -->
          <div class="contact-form" id="popup">
            <form action="" method="post" autocomplete="off">
              <h3 class="title">Machine Guns Details</h3>
              <div class="input-container">
                <input type="text" name="mch_gun_name" class="input" value="<?php echo $_POST["mch_gun_name"]; ?>" />
                <label for="">Weapon Name</label>
                <span>Weapon Name</span>
              </div>
              <div class="input-container">
                <input type="text" name="mch_gun_wght" class="input" value="<?php echo $_POST["mch_gun_wght"]; ?>" />
                <label for="">Weight</label>
                <span>Weight</span>
              </div>
              <div class="input-container">
                <input type="text" name="mch_gun_len" class="input" value="<?php echo $_POST["mch_gun_len"]; ?>" />
                <label for="">Length</label>
                <span>Length</span>
              </div>
              <div class="input-container">
                <input type="text" name="mch_gun_rng" class="input" value="<?php echo $_POST["mch_gun_rng"]; ?>" />
                <label for="">Range</label>
                <span>Range</span>
              </div>
              <div class="input-container">
                <input type="text" name="mch_gun_cpcty" class="input" value="<?php echo $_POST["mch_gun_cpcty"]; ?>" />
                <label for="">Maximum Capacity</label>
                <span>Maximum Capacity</span>
              </div>
              <div class="input-container textarea">
                <textarea name="mch_gun_desc" class="input" value="<?php echo $_POST["mch_gun_desc"]; ?>"></textarea>
                <label for="">Description</label>
                <span>Description</span>
              </div>
              <input type="submit" id="submit" name="submit" value="Submit" />
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  <script src="tabs.js"></script>
  <script src="tabs2.js"></script>
  <script src="tabs3.js"></script>

  <script>
    var content1 = document.getElementById("content1");
    var content2 = document.getElementById("content2");
    var content3 = document.getElementById("content3");
    var content4 = document.getElementById("content4");
    var content5 = document.getElementById("content5");
    var content6 = document.getElementById("content6");
    var btn1 = document.getElementById("btn1");
    var btn2 = document.getElementById("btn2");
    var btn3 = document.getElementById("btn3");
    var btn4 = document.getElementById("btn4");
    var btn5 = document.getElementById("btn5");
    var btn6 = document.getElementById("btn6");

    function openHTML() {
      content1.style.transform = "translateX(0)";
      content2.style.transform = "translateX(100%)";
      btn1.style.color = "#ff7846";
      btn2.style.color = "#000";
    }

    function openCSS() {
      content1.style.transform = "translateX(100%)";
      content2.style.transform = "translateX(0)";
      btn2.style.color = "#ff7846";
      btn1.style.color = "#000";
    }

    function openMissiles() {
      content3.style.transform = "translateX(0)";
      content4.style.transform = "translateX(100%)";
      btn3.style.color = "#ff7846";
      btn4.style.color = "#000";
    }

    function openTorpedoes() {
      content3.style.transform = "translateX(100%)";
      content4.style.transform = "translateX(0)";
      btn4.style.color = "#ff7846";
      btn3.style.color = "#000";
    }

    function openPistols() {
      content5.style.transform = "translateX(0)";
      content6.style.transform = "translateX(100%)";
      btn5.style.color = "#ff7846";
      btn6.style.color = "#000";
    }

    function openMachineGun() {
      content5.style.transform = "translateX(100%)";
      content6.style.transform = "translateX(0)";
      btn6.style.color = "#ff7846";
      btn5.style.color = "#000";
    }
  </script>





</body>

</html>