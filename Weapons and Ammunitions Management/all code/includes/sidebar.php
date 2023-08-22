<?php 
$page = substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1); 
?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">Manufacturer Quickview</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
      <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">General</h6>
        </li>
      
      <li class="nav-item">
          <a class="nav-link text-white <?= $page == "welcome.php" ? 'active bg-gradient-primary' : ''; ?>" href="welcome.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1" >Profile</span>
          </a>
        </li>


        <!-- <li class="nav-item">
          <a class="nav-link text-white <?= $page == "../pages/dashboard.html" ? 'active bg-gradient-primary' : ''; ?>" href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1" >Dashboard</span>
          </a>
        </li> -->

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Products</h6>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "sub-products.php" ? 'active bg-gradient-primary' : ''; ?>" href="sub-products.php">
            <span class="material-symbols-outlined">
              add_shopping_cart
            </span>
            <span class="nav-link-text ms-1">Add Products</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "manage_products.php" ? 'active bg-gradient-primary' : ''; ?>" href="manage_products.php">
          <span class="material-symbols-outlined">
            inventory_2
          </span>
            <span class="nav-link-text ms-1">Manage Products</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8"> Sub-Products</h6>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "tabs.php" ? 'active bg-gradient-primary' : ''; ?>" href="tabs.php">
            <span class="material-symbols-outlined">
              add_shopping_cart
            </span>
            <span class="nav-link-text ms-1">Add Sub-Products</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "manage_subproducts.php" ? 'active bg-gradient-primary' : ''; ?>" href="manage_subproducts.php">
          <span class="material-symbols-outlined">
            inventory_2
          </span>
            <span class="nav-link-text ms-1">Manage Sub-Products</span>
          </a>
        </li>

        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Categories</h6>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
          <span class="material-symbols-outlined">
            category
          </span>
            <span class="nav-link-text ms-1">Add Categories</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
          <span class="material-symbols-outlined">
               demography
            </span>
            <span class="nav-link-text ms-1">Manage Categories</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Sub-Categories</h6>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
          <span class="material-symbols-outlined">
            category
          </span>
            <span class="nav-link-text ms-1">Add Sub-Categories</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
          <span class="material-symbols-outlined">
               demography
            </span>
            <span class="nav-link-text ms-1">Manage Sub-Categories</span>
          </a>
        </li> -->

        <!-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Users</h6>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
          <span class="material-symbols-outlined">
            person_add
          </span>
            <span class="nav-link-text ms-1">Add Users</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
          <span class="material-symbols-outlined">
            manage_accounts
          </span>
            <span class="nav-link-text ms-1">Manage Users</span>
          </a>
        </li> -->

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="logout.php" type="button">Logout</a>
      </div>
    </div>
  </aside>