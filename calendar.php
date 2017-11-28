<?php
# Variables
$page = 'calendar';
?>

<!DOCTYPE html>
<html lang=en>


<?php
ob_start();
include("includes/head.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Cool City Band - Calendar",$buffer);
echo $buffer;
?>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container ">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Calendar </h2>
            </div>
            <div class="col-lg-12">
                <div class="well" id='calendar'></div>
            </div>
        </div>
    </div>
</section>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
<script type='text/javascript'>

$(document).ready(function() {
    $('#calendar').fullCalendar({
		height: 450,
        googleCalendarApiKey: 'AIzaSyBRwgLvPBxHvQF7A6eRrMdCQVu_LgpW92k',
		eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=800,height=600');
				return false;
			},
        events: {
            googleCalendarId: 'coolcityindy@gmail.com'
        }
    });
});

</script>
</body>
</html>