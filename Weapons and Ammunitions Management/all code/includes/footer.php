<!-- <footer class="footer pt-5">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                    <a href="#" target="_blank">About Us</a>
                </li>  
                <li class="nav-item">
                    <a href="#" target="_blank">Services</a>
                </li> 
                <li class="nav-item">
                    <a href="#" target="_blank">Contact</a>
                </li> 
                <li class="nav-item">
                    <a href="#" target="_blank">About</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</main> -->


<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/smooth-scrollbar.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

</body> 
</html>