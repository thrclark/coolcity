<?php
# Variables
$page = 'contact';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include("includes/head.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Cool City Band - Contact",$buffer);
echo $buffer;
?>




























<meta name="description" content="">
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container" style="min-height:900px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us </h1>
            </div>
        </div>
        <div class="row section-content">
            <div class="col-md-8">
                <p class="lead"> Thank You!
                    
                    Your message has been sent, we'll be in touch shortly. </p>
            </div>
            <div class="col-md-4">
                <h3>Business Agent/Bookings</h3>
                <p> <strong>David Leonards</strong><br>
                    International Entertainment Bureau<br>
                    3612 North Washington Blvd.<br>
                    Indianapolis, Indiana 46205</p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317.926.7566</p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317.294.9977 (cell)</p>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="php/ieb@prodigy.net">ieb@prodigy.net</a> </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li> <a href="https://www.facebook.com/International-Entertainment-Bureau-158663914177229/"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
                    <li> <a href="https://twitter.com/Agent3612?lang=en"><i class="fa fa-twitter-square fa-2x"></i></a> </li>
                </ul>
                <h3>Leader/Conductor/Pianist</h3>
                <p><strong>Roy Geesa</strong></p>
                <p> <i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317.926.7566</p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317-529-3640 (cell)</p>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:RGeesa@gregoryappel.com">RGeesa@gregoryappel.com</a> </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li> <a href="https://www.facebook.com/Cool-City-Band-149866258393477/?fref=ts"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
                </ul>
            </div>
        </div>
        <!-- /.row --> 
        
    </div>
</section>
























<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
</body>
</html>