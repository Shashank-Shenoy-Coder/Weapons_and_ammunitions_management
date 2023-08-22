<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';
?>
<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="assets_table/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="assets_table/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@35,400,1,0" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets_table/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets_table/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <!-- <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style"> -->

</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="sub-products.php" class="btn btn-danger mb-2"><span class="material-symbols-outlined">
                                    add_circle
                                </span> Add Products</a>
                        </div>
                        <!-- <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button>
                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                        <!-- </div>  -->

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
                                        <th data-sort onclick="sortTable(0, this)">Weapon Name</th></th>
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
                                    function getAll($table)
                                    {
                                        global $conn;
                                        $user= $_SESSION["user_id"];
                                        $query = "SELECT * FROM  users WHERE id='$user'";
                                        $res = mysqli_query($conn, $query);
                                        $row= mysqli_fetch_array($res);
                                        $uid = $row["id"];
                                        $query = "SELECT * FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI WHERE W.WID=mcw.WID and mcw.WID=WI.WID and mcw.MID= $uid";
                                        return $query_run = mysqli_query($conn, $query);
                                    }
                                    $category = getAll("weapons");  
                                    if(mysqli_num_rows($category)>0)
                                    {
                                        while($item = mysqli_fetch_array($category))
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
                                                <!-- <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span>
                                                <span class="text-warning mdi mdi-star"></span> -->
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
                                    }
                                    else
                                    {
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
        <!-- end row -->

        <!-- bundle -->
        <script src="assets_table/js/vendor.min.js"></script>
        <script src="assets_table/js/app.min.js"></script>

        <!-- third party js -->
        <!-- <script src="assets_table/js/vendor_table/jquery.dataTables.min.js"></script>
        <script src="assets_table/js/vendor_table/dataTables.bootstrap5.js"></script>
        <script src="assets_table/js/vendor_table/dataTables.responsive.min.js"></script>
        <script src="assets_table/js/vendor_table/responsive.bootstrap5.min.js"></script>
        <script src="assets_table/js/vendor_table/dataTables.checkboxes.min.js"></script> -->

        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets_table/js/pages/demo.products.js"></script>
        <!-- end demo js-->

        <!-- Sorting items of Table js -->
        <script>
            function sortTable(n, evt)
            {
                var table = document.querySelector('table'),
                thead = document.querySelector('thead'),
                tbody = table.querySelector('tbody'),
                bRows = [...tbody.rows],
                hData = [...thead.querySelectorAll('th')],
                desc = false;

                hData.map( (head) =>
                {
                    if ( head != evt ){
                        head.classList.remove('asc','desc');
                    }
                });

                desc = evt.classList.contains( 'asc')? true : false;
                evt.classList[desc ? 'remove' : 'add']('asc');
                evt.classList[desc ? 'add' : 'remove']('desc');

                tbody.innerHTML = '';
                bRows.sort( (a, b) => 
                {
                    let x = a.getElementsByTagName('td')[n].innerHTML.toLowerCase(),
                     y = b.getElementsByTagName('td')[n].innerHTML.toLowerCase();
                    return desc ? (x < y ? 1 : -1) : (x < y ? -1 : 1);
                });
                bRows.map ( (bRow) => {
                    tbody.appendChild(bRow);
                });
            }
        </script>
</body>

</html>