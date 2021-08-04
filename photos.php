<?php
# Variables
$page = 'photos';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include( "includes/head.php" );
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace( "%TITLE%", "Cool City Band - Photos", $buffer );
echo $buffer;
?>
<meta name="description" content="Photo Gallery - Cool City Band at weddings, fundraisers, galas, special events and concerts featuring the best musicians and vocalists.">
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container ">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Photos</h2>
            </div>
            <div class="col-lg-12">
                <p> Browse pictures of the Cool City Band in action at events throughout the Midwest including gala fundraisers, concerts, weddings and anniversaries. You’ll see why the Cool City Band is considered one of the best live wedding bands as well as the premiere event band in the Midwest. <a href="contact.php">Contact us today</a> for more information.</p>
                <div class="well well-sm fotorama"   data-width="100%" data-ratio="800/600" data-navposition="top"  data-nav="thumbs" style="margin-top:30px">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-1.png">
					<!--<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-2.png">-->
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-3.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-4.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-5.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-6.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-7.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-8.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-9.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-10.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-11.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-12.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-13.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01a-14.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-1.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-2.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-3.png">
					<!--<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-4.png">-->
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-5.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-6.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-7.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-8.png">
					<!--<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-9.png">-->
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-10.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-11.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-12.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-13.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01b-14.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-1.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-2.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-3.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-4.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-5.png">
					<!--<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-6.png">-->
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-7.png">
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-8.png">
					<!--<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-9.png">-->
					<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/2018-05-01c-10.png"> </div>
            </div>
        </div>
    </div>
</section>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
</body>
</html>