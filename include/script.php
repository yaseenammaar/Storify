<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/feather-icons/feather.min.js"></script>
<script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="lib/jquery.flot/jquery.flot.js"></script>
<script src="lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="lib/flot.curvedlines/curvedLines.js"></script>
<script src="lib/peity/jquery.peity.min.js"></script>
<script src="lib/chart.js/Chart.bundle.min.js"></script>
<script src="assets/js/dashforge.js"></script>
<script src="assets/js/dashforge.sampledata.js"></script>
<script src="assets/js/dashboard-four.js"></script>
<script src="lib/js-cookie/js.cookie.js"></script>
<script src="assets/js/dashforge.settings.js"></script>

<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetchnotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.notification-item').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();

// load new notifications
$(document).on('click', '.dropdown-notification', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>
