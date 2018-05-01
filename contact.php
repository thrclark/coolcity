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
<meta name="description" content="Contact the Cool City Band to learn more about our packages, musicians, vocalists and availability in Indianapolis, Chicago, Louisville and Cincinnati.">
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us </h1>
            </div>
            <div class="col-md-12 hidden-xs"> <img src="img/contactpage1.png" class="img-responsive img-hover img-thumbnail" alt="Cool City Band" style="width:100%"/> </div>
        </div>
        <div class="row section-content">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <p> We'd love to hear from you! We will only use this information to respond your message, and will not share your contact information with third parites.</p>
                
                <!--   <form action="gdform.php" method="post" data-toggle="validator">   -->
                
                <form action="/webformmailer.php" method="post" data-toggle="validator">
                    <input type="hidden" name="subject" value="Website Info Request" />
                    <input type="hidden" name="redirect" value="contact-confirm.php" />
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" name="phone" id="phone" data-error="Please provide a valid phone number." required="">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>*Email Address:</label>
                            <input type="email" class="form-control" name="email" id="inputEmail" data-error="Please provide a valid email address." required="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>*Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" data-error="Please add your message." maxlength="999" required style="resize:none"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div id="success"></div>
                   	
                    <div class="g-recaptcha" data-sitekey="6LfPEUgUAAAAAK6qh-QNr-3NhQ91UAoaOq8GNt7p"></div>
                    <br>
                    <br>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id="#submitform">Send Message</button>
                </form>
            </div>
            <div class="col-md-4">
                
                
            </div>
        </div>
        
        <div class="col-md-4"><h3>Leader/Conductor/Pianist</h3>
                <p><strong>Roy Geesa</strong></p>
                <p> <i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317.926.7566</p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317-529-3640 (cell)</p>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:RGeesa@gregoryappel.com">RGeesa@gregoryappel.com</a> </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li> <a href="https://www.facebook.com/Cool-City-Band-149866258393477/?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
                </ul>
                
                <h3>Business Agent/Bookings</h3>
                <p> <strong>David Leonards</strong><br>
                    International Entertainment Bureau<br>
                    3612 North Washington Blvd.<br>
                    Indianapolis, Indiana 46205</p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317.926.7566</p>
                <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: 317.294.9977 (cell)</p>
                <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:ieb@prodigy.net">ieb@prodigy.net</a> </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li> <a href="https://www.facebook.com/International-Entertainment-Bureau-158663914177229/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
                    <li> <a href="https://twitter.com/Agent3612?lang=en" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a> </li>
                </ul>
                </div>
        <!-- /.row --> 
        
    </div>
</section>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
<script>
$( document ).ready(function() {

if (grecaptcha.getResponse() == ""){
    alert("You can't proceed!");
} else {
    alert("Thank you");
}

});
</script>
</body>
</html>