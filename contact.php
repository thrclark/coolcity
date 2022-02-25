<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    $to = "roygeesa@gmail.com"; // this is your Email address
    
    $from = $_POST[ 'email' ]; // this is the sender's Email address
    $first_name = $_POST[ 'first_name' ];
    $last_name = $_POST[ 'last_name' ];
    $phone_number = $_POST[ 'phone_number' ];
    $subject = "Cool City info request";
    $subject2 = "Cool City - thank you!";
    $message = $first_name . " " . $last_name . "(" . $phone_number . ")" . " wrote the following:" . "\n\n" . $_POST[ 'message' ];
    $message2 = "Thank you for contacting Cool City. Here is a copy of your message, " . $first_name . "\n\n" . $_POST[ 'message' ];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail( $to, $subject, $message, $headers );
    mail( $from, $subject2, $message2, $headers2 ); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

    header( 'Location:  contact-confirm.php' );


    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>

<!DOCTYPE html>

<head>
<title>Form submission</title>
<?php include ('includes/head.php') ?>
</head>
<body>
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
                
                <form action="" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>First Name:</label>
                            <input type="text" class="form-control" name="first_name" id="name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Last Name:</label>
                            <input type="text" class="form-control" name="last_name" id="lastname">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" name="phone_number" id="phone" data-error="Please provide a valid phone number." required="">
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
                    <!-- <button type="submit" class="btn btn-primary" id="#submitform">Send Message</button>-->
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-4"> </div>
        </div>
        <div class="col-md-4">
            <h3>Leader/Conductor/Pianist</h3>
            <p><strong>Roy Geesa</strong></p>
           
            <p><i class="fa fa-phone"></i> 317-529-3640 (text/voice)</p>
            <p><i class="fa fa-envelope-o"></i> <a href="mailto:roygeesa@gmail.com">roygeesa@gmail.com</a> </p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li> <a href="https://www.facebook.com/Cool-City-Band-149866258393477/?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
            </ul>
        </div>
        <!-- /.row --> 
        
    </div>
</section>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>
</body>
</html>