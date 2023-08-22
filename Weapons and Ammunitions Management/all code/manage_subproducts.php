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
    <link rel="stylesheet" href="manage_subproducts.css">
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
                    </div>

                    <div id="content1" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="tabs.php" class="btn btn-danger mb-2"><span class="material-symbols-outlined">
                                                        add_circle
                                                    </span> Add Products</a>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="all" style="width: 20px;">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                                </div>
                                                            </th>
                                                            <th class="all">Weapon Image </th>
                                                            <th data-sort onclick="sortTable(0, this)">Weapon Name</th>
                                                            </th>
                                                            <th data-sort onclick="sortTable(1, this)">Weapon Desc</th>
                                                            <th data-sort onclick="sortTable(2, this)">Weight</th>
                                                            <th data-sort onclick="sortTable(3, this)">Length</th>
                                                            <th data-sort onclick="sortTable(4, this)">Range</th>
                                                            <th data-sort onclick="sortTable(5, this)">Maximum Capacity</th>
                                                            <th style="width: 85px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'config.php';
                                                        error_reporting(E_ERROR | E_PARSE);
                                                        function getAll($table)
                                                        {
                                                            global $conn;
                                                            $user = $_SESSION["user_id"];
                                                            $query = "SELECT * FROM  users WHERE id='$user'";
                                                            $res = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($res);
                                                            $uid = $row["id"];
                                                            $query = "SELECT* FROM $table AS W , air_launched_bombs as ALB, manufacturing_company_weapon as mcw, weapons_images as WI WHERE W.WID=ALB.WID and ALB.WID=mcw.WID and mcw.WID=WI.WID and mcw.MID= '$uid'";
                                                            return $query_run = mysqli_query($conn, $query);
                                                        }
                                                        $category = getAll("weapons");
                                                        if (mysqli_num_rows($category) > 0) {
                                                            while ($item = mysqli_fetch_array($category))
                                                            //foreach($category as $item)
                                                            {
                                                        ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['ALNCHNAME']; ?>" title="contact-img" class="rounded me-3" height="48">
                                                                    </td>
                                                                    <td>
                                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                                        <p><?= $item['WNAME']; ?></p>
                                                                        <br>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WDESC']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WGHT']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['LEN']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['RNGE']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-success"><?= $item['MAX_CAPACITY']; ?></span>
                                                                    </td>

                                                                    <td class="table-action">
                                                                        <!-- <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    visibility
                                                </span></a> -->
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                edit_square
                                                                            </span></a>
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                delete
                                                                            </span></a>
                                                                    </td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        } else {
                                                            echo "No records found";
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- End of the active i.e., Airforce content -->
                    </div><!-- HTML sub tab content end -->


                    <div id="content2" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="tabs.php" class="btn btn-danger mb-2"><span class="material-symbols-outlined">
                                                        add_circle
                                                    </span> Add Products</a>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="all" style="width: 20px;">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                                </div>
                                                            </th>
                                                            <th class="all">Weapon Image </th>
                                                            <th data-sort onclick="sortTable(0, this)">Weapon Name</th>
                                                            </th>
                                                            <th data-sort onclick="sortTable(1, this)">Weapon Desc</th>
                                                            <th data-sort onclick="sortTable(2, this)">Weight</th>
                                                            <th data-sort onclick="sortTable(3, this)">Length</th>
                                                            <th data-sort onclick="sortTable(4, this)">Range</th>
                                                            <th data-sort onclick="sortTable(5, this)">Maximum Capacity</th>
                                                            <th style="width: 85px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'config.php';
                                                        error_reporting(E_ERROR | E_PARSE);
                                                        function getAllrockets($table)
                                                        {
                                                            global $conn;
                                                            $user = $_SESSION["user_id"];
                                                            $query = "SELECT * FROM  users WHERE id='$user'";
                                                            $res = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($res);
                                                            $uid = $row["id"];
                                                            $query = "SELECT* FROM $table AS W , air_launched_rockets as ALR,manufacturing_company_weapon as mcw, weapons_images as WI WHERE W.WID=ALR.WID and ALR.WID=mcw.WID and mcw.WID=WI.WID and mcw.MID='$uid'";
                                                            return $query_run = mysqli_query($conn, $query);
                                                        }
                                                        $category = getAllrockets("weapons");
                                                        if (mysqli_num_rows($category) > 0) {
                                                            while ($item = mysqli_fetch_array($category))
                                                            //foreach($category as $item)
                                                            {
                                                        ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>" title="contact-img" class="rounded me-3" height="48">
                                                                    </td>
                                                                    <td>
                                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                                            <!-- <a href="" class="text-body"></a> -->
                                                                        <p><?= $item['WNAME']; ?></p>
                                                                        <br>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WDESC']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WGHT']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['LEN']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['RNGE']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-success"><?= $item['MAX_CAPACITY']; ?></span>
                                                                    </td>

                                                                    <td class="table-action">
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                edit_square
                                                                            </span></a>
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                delete
                                                                            </span></a>
                                                                    </td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        } else {
                                                            echo "No records found";
                                                        }

                                                        ?>
                                                        oid(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    visibility
                                                </span></a>
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    edit_square
                                                </span></a>
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    delete
                                                </span></a>
                                        </td>
                                    </tr> 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- End of the active i.e., Airforce content -->
                    </div><!-- HTML sub tab content end -->

                </div>

            <div>
                <div class="hero"> 
                    <div class="btn-box">
                        <button id="btn1" onclick="openMissiles()">Missiles</button>
                        <button id="btn2" onclick="openTorpedoes()">Torpedoes</button>
                        <!-- <button id="btn3">JAVASCRIPT</button> -->
                    </div>

                    <div id="content3" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="tabs.php" class="btn btn-danger mb-2"><span class="material-symbols-outlined">
                                                        add_circle
                                                    </span> Add Products</a>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="all" style="width: 20px;">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                                </div>
                                                            </th>
                                                            <th class="all">Weapon Image </th>
                                                            <th data-sort onclick="sortTable(0, this)">Weapon Name</th>
                                                            </th>
                                                            <th data-sort onclick="sortTable(1, this)">Weapon Desc</th>
                                                            <th data-sort onclick="sortTable(2, this)">Weight</th>
                                                            <th data-sort onclick="sortTable(3, this)">Length</th>
                                                            <th data-sort onclick="sortTable(4, this)">Range</th>
                                                            <th data-sort onclick="sortTable(5, this)">Maximum Capacity</th>
                                                            <th style="width: 85px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'config.php';
                                                        error_reporting(E_ERROR | E_PARSE);
                                                        function getAllmissiles($table)
                                                        {
                                                            global $conn;
                                                            $user = $_SESSION["user_id"];
                                                            $query = "SELECT * FROM  users WHERE id='$user'";
                                                            $res = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($res);
                                                            $uid = $row["id"];
                                                            $query = "SELECT* FROM $table AS W , air_launched_bombs as ALB, manufacturing_company_weapon as mcw, weapons_images as WI WHERE W.WID=ALB.WID and ALB.WID=mcw.WID and mcw.WID=WI.WID and mcw.MID= '$uid'";
                                                            return $query_run = mysqli_query($conn, $query);
                                                        }
                                                        $category = getAllmissiles("weapons");
                                                        if (mysqli_num_rows($category) > 0) {
                                                            while ($item = mysqli_fetch_array($category))
                                                            //foreach($category as $item)
                                                            {
                                                        ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['ALNCHNAME']; ?>" title="contact-img" class="rounded me-3" height="48">
                                                                    </td>
                                                                    <td>
                                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                                            <!-- <a href="" class="text-body"></a> -->
                                                                        <p><?= $item['WNAME']; ?></p>
                                                                        <br>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WDESC']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WGHT']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['LEN']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['RNGE']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-success"><?= $item['MAX_CAPACITY']; ?></span>
                                                                    </td>

                                                                    <td class="table-action">
                                                                               <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                edit_square
                                                                            </span></a>
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                delete
                                                                            </span></a>
                                                                    </td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        } else {
                                                            echo "No records found";
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- End of the active i.e., Airforce content -->
                    </div><!-- HTML sub tab content end -->


                    <div id="content4" class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="tabs.php" class="btn btn-danger mb-2"><span class="material-symbols-outlined">
                                                        add_circle
                                                    </span> Add Products</a>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="all" style="width: 20px;">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                                </div>
                                                            </th>
                                                            <th class="all">Weapon Image </th>
                                                            <th data-sort onclick="sortTable(0, this)">Weapon Name</th>
                                                            </th>
                                                            <th data-sort onclick="sortTable(1, this)">Weapon Desc</th>
                                                            <th data-sort onclick="sortTable(2, this)">Weight</th>
                                                            <th data-sort onclick="sortTable(3, this)">Length</th>
                                                            <th data-sort onclick="sortTable(4, this)">Range</th>
                                                            <th data-sort onclick="sortTable(5, this)">Maximum Capacity</th>
                                                            <th style="width: 85px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include 'config.php';
                                                        error_reporting(E_ERROR | E_PARSE);
                                                        function getAlltorpedoes($table)
                                                        {
                                                            global $conn;
                                                            $user = $_SESSION["user_id"];
                                                            $query = "SELECT * FROM  users WHERE id='$user'";
                                                            $res = mysqli_query($conn, $query);
                                                            $row = mysqli_fetch_array($res);
                                                            $uid = $row["id"];
                                                            $query = "SELECT* FROM $table AS W , air_launched_rockets as ALR,manufacturing_company_weapon as mcw, weapons_images as WI WHERE W.WID=ALR.WID and ALR.WID=mcw.WID and mcw.WID=WI.WID and mcw.MID='$uid'";
                                                            return $query_run = mysqli_query($conn, $query);
                                                        }
                                                        $category = getAlltorpedoes("weapons");
                                                        if (mysqli_num_rows($category) > 0) {
                                                            while ($item = mysqli_fetch_array($category))
                                                            //foreach($category as $item)
                                                            {
                                                        ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>" title="contact-img" class="rounded me-3" height="48">
                                                                    </td>
                                                                    <td>
                                                                        <p class="m-0 d-inline-block align-middle font-16">
                                                                            <!-- <a href="" class="text-body"></a> -->
                                                                        <p><?= $item['WNAME']; ?></p>
                                                                        <br>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WDESC']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['WGHT']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['LEN']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= $item['RNGE']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-success"><?= $item['MAX_CAPACITY']; ?></span>
                                                                    </td>

                                                                    <td class="table-action">
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                edit_square
                                                                            </span></a>
                                                                        <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                                delete
                                                                            </span></a>
                                                                    </td>
                                                                </tr>
                                                        <?php
                                                            }
                                                        } else {
                                                            echo "No records found";
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- End of the active i.e., Airforce content -->
                    </div><!-- HTML sub tab content end -->

                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <a href="tabs.php" class="btn btn-danger mb-2"><span class="material-symbols-outlined">
                                                add_circle
                                            </span> Add Products</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="all" style="width: 20px;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th class="all">Weapon Image </th>
                                                    <th data-sort onclick="sortTable(0, this)">Weapon Name</th>
                                                    </th>
                                                    <th data-sort onclick="sortTable(1, this)">Weapon Category</th>
                                                    <th data-sort onclick="sortTable(2, this)">Manufactured Date</th>
                                                    <th data-sort onclick="sortTable(3, this)">Price</th>
                                                    <th data-sort onclick="sortTable(4, this)">Quantity</th>
                                                    <th data-sort onclick="sortTable(5, this)">Weapon Sub-Category</th>
                                                    <th style="width: 85px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include 'config.php';
                                                error_reporting(E_ERROR | E_PARSE);
                                                function getAll3($table)
                                                {
                                                    global $conn;
                                                    $user = $_SESSION["user_id"];
                                                    $query = "SELECT * FROM  users WHERE id='$user'";
                                                    $res = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($res);
                                                    $uid = $row["id"];
                                                    $query = "SELECT * FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI WHERE W.WID=mcw.WID and mcw.WID=WI.WID and mcw.MID= $uid";
                                                    return $query_run = mysqli_query($conn, $query);
                                                }
                                                $category = getAll3("weapons");
                                                if (mysqli_num_rows($category) > 0) {
                                                    while ($item = mysqli_fetch_array($category))
                                                    //foreach($category as $item)
                                                    {
                                                ?>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>" title="contact-img" class="rounded me-3" height="48">
                                                            </td>
                                                            <td>
                                                                <p class="m-0 d-inline-block align-middle font-16">
                                                                    <!-- <a href="" class="text-body"></a> -->
                                                                <p><?= $item['WNAME']; ?></p>
                                                                <br>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <?= $item['WCATEGORY']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $item['WDATE']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $item['PRICE']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $item['WQUANTITY']; ?>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success"><?= $item['WSUBCATEGORY']; ?></span>
                                                            </td>

                                                            <td class="table-action">
                                                                <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                        edit_square
                                                                    </span></a>
                                                                <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                                        delete
                                                                    </span></a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo "No records found";
                                                }

                                                ?>
                                                <!-- <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/products/brahmos missile.jpg" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="" class="text-body">Brahmos Missile</a>
                                                <br>
                                                 This isnt needed--<span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span> -- This isnt needed
                                            </p>
                                        </td>
                                        <td>
                                            Naval Weapon
                                        </td>
                                        <td>
                                            09/12/2018
                                        </td>
                                        <td>
                                            $148.66
                                        </td>

                                        <td>
                                            254
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Missiles</span>
                                        </td>

                                        <td class="table-action">
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    visibility
                                                </span></a>
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    edit_square
                                                </span></a>
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    delete
                                                </span></a>
                                        </td>
                                    </tr> -->

                                                <!-- <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="assets/images/products/insas_machine_gun.png" alt="contact-img" title="contact-img" class="rounded me-3" height="48">
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="" class="text-body">INSAS LMG</a>
                                                <br>
                                                --This is not needed -- <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star-half"></span> --This is not needed --
                                            </p>
                                        </td>
                                        <td>
                                            Land Weapon
                                        </td>
                                        <td>
                                            09/08/2018
                                        </td>
                                        <td>
                                            $8.99
                                        </td>

                                        <td>
                                            1,874
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Machine Gun</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    visibility
                                                </span></a>
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    edit_square
                                                </span></a>
                                            <a href="javascript:void(0);" class="action-icon"> <span class="material-symbols-outlined">
                                                    delete
                                                </span></a>
                                        </td>
                                    </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- End of the active i.e., Landforce content -->

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