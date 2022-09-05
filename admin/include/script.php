<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/feather-icons/feather.min.js"></script>
<script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../lib/jquery.flot/jquery.flot.js"></script>
<script src="../lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="../lib/chart.js/Chart.bundle.min.js"></script>
<script src="../lib/jqvmap/jquery.vmap.min.js"></script>
<script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="../assets/js/dashforge.js"></script>
<script src="../assets/js/dashforge.aside.js"></script>
<script src="../assets/js/dashforge.sampledata.js"></script>

<!-- append theme customizer -->
<script src="../lib/js-cookie/js.cookie.js"></script>
<script src="../assets/js/dashforge.settings.js"></script>
<script src="../assets/js/parsley.min.js"></script>

<script>
   var win = navigator.platform.indexOf('Win') > -1;
   if (win && document.querySelector('#sidenav-scrollbar')) {
     var options = {
       damping: '0.5'
     }
     Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
   }
 </script>
 <!-- <script type="text/javascript">
 $(document).ready(function(){
   $('.modal').modal({
   backdrop: 'static',
   keyboard: false
 });
});
 </script> -->
