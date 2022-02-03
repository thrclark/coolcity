<?php
# Variables
$page = 'testimonials';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include( "includes/head.php" );
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace( "%TITLE%", "Cool City Band - Testimonials", $buffer );
echo $buffer;
?>
<meta name="description" content="Cool City Band wedding, fundraiser, gala and special event customers have great things to say about our premiere musicians and vocalists.">
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="clients section1">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Client Testimonials</h2>
            </div>
            <div class="col-lg-12">
                <h3>Corporate Clients</h3>
                <p>We're proud to have collaborated with some of the most respected institutions and corporations across the midwest. Let Cool City add live music to your special events.</p>
            </div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.lilly.com/Pages/Home.aspx" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-lilly.png" alt="Eli Lilly and Company"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.ihca.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-ihca.png" alt="Indiana Health Care Association (IHCA) i"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.isae.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-isae.png" alt="Indiana Society of Association Executives"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.thejazzkitchen.com/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-jazzkitchen.png" alt="The Jazz Kitchen"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://cms.bsu.edu/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-ballstate.png" alt="Ball State University"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.goodwill.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-goodwill.png" alt="Goodwill Industries International, Inc."> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://automobiles.honda.com/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-honda.png" alt="Honda"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.kidney.org/offices/nkf-indiana" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-nkf.png" alt="National Kidney Foundation"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.stvincent.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-stvincent.png" alt="St. Vincent Health"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="http://www.independentagent.com/default.aspx" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-iia.png" alt="Independent Insurance Agents of Indiana"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.rotary.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-rotary.png" alt="Rotary International"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.kappaalphatheta.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-kappa.png" alt="Kappa Alpha Theta"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.icclos.com/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-conventioncenter.png" alt="Indianapolis convention center"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.agc.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-agc.png" alt="Associated General contractors of America"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.invma.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-ivma.png" alt="Indiana veterinary medical Association"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://preventblindness.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-preventblindness.png" alt="Prevent blindness"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://emuseum.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-evansville.png" alt="Evansville museum"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.myunionhealth.org/patients-and-visitors/on-site-dining/union-hospital-terre-haute" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-union.png" alt="Union hospital"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://ihcindy.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-ihc.png" alt="Indianapolis Hebrew congregation"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.irvingtonhistory.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-irvington.png" alt="Irvington historical society"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.in-afp.org/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-iafp.png" alt="Indiana Academy of family physicians"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.paceint.com/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-pace.png" alt="Pace international"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.iu.edu/index.html" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-iu.png" alt="Indiana University"> </a></div>
            <div class="col-xs-6 col-md-2 img-portfolio"><a href="https://www.depauw.edu/" target="_blank"> <img class="img-responsive img-hover" src="img/clients/clients-depauw.png" alt="DePauw university"> </a></div>
            <div class="col-lg-12">
                <h3>Private Parties and Weddings</h3>
                <div class="text-block">
                    <p>Thank you for providing the entertainment for our wedding reception. The band was spectacular and received rave reviews from all our guests! We appreciate your flexibility with the timeshift and the enthusiasm you presented at the MC. Best wishes for continued musical success!</p>
                    <footer>Julie &amp; Brent <cite title="Source Title">Bride and Groom</cite></footer>
                </div>
                <div class="text-block">
                    <p>Thank you for doing such an amazing job at our wedding. Everyone loved the music and are still talking about it. We will be recommending you to our friends.</p>
                    <footer>Shannon &amp; Bill <cite title="Source Title">Bride and Groom</cite></footer>
                </div>
                <div class="text-block">
                    <p>Thank you for doing such a great job at our wedding on April 17! The band was so much fun! We've gotten so many compliments on the music.</p>
                    <footer>Kim &amp; Gabe <cite title="Source Title">Bride and Groom</cite></footer>
                </div>
                <div class="text-block">
                    <p>Thank you very much for your outstanding performance at our wedding reception on December 19. We are so appreciative for the special touches that you added to make our wedding day especially perfect.</p>
                    <p>Jimmy's surprise renditions of "Three times a Lady" and "That's All" were beautiful, and guests really enjoyed the sultry vocals from Shannon on "I Just Want to Make Love to You". But we would be remiss if we didn't comment on the fun crowd-energizing sing-along "Minnie the Moocher".</p>
                    <p>The entertainment was truly memorable and it was a pleasure working with you.</p>
                    <footer>Laura &amp; Mike <cite title="Source Title">Bride and Groom</cite></footer>
                </div>
                <div class="text-block">
                    <p>Most of our guests were from out of town and I can’t even tell you how many made a point that evening to tell me that they had never really had such an intimate experience with such wonderful vocalists. I can’t think of a single guest who did not point out to me that this was a wonderful event AND a wonderful musical performance!</p>
                    <p>Thank you for helping us make some wonderful memories for our children and our friends.</p>
                    <footer>Jan &amp; Wilbur <cite title="Source Title">Parents of the bride</cite></footer>
                </div>
                <div class="text-block">
                    <p>The family reunion that we planned was a huge success, and you are part of the reason it went so well. Thank you so much for coming all the way to Moline to play for our event.</p>
                    <p>Both the three-piece and the full band did a marvelous job, and we received many comments on how good they were. We could not have asked for a more beautiful night for our formal event, and the wonderful voice of Shannon only added to the beauty. The reunion would not have been the same without the sounds of the Cool City Band. Thank you.</p>
                    <footer>Adrienne <cite title="Source Title">Event Organizer</cite></footer>
                </div>
                <div class="text-block">
                    <p>Thank you so much for helping to make our Gala a smashing success. We are so grateful and appreciative of such wonderful talent and professionalism. Please pass our accolades on to all the artists who Gave it their all and made us look so very good!</p>
                    <footer>Donna <cite title="Source Title">Event Organizer</cite></footer>
                </div>
                <div class="text-block">
                    <p>Everything was fantastic! The band members were kind and gracious and sounded amazing. I had opportunity to speak with a few of them and they were all just great people. The few minutes of down-time that I had at the event, I really enjoyed listening to them (not to mention the first song they played is my favorite song!).</p>
                    <footer>Vickie <cite title="Source Title">Event Organizer</cite></footer>
                </div>
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