<?php
# Variables
$page = 'packages';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include("includes/head.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Cool City Band - Packages",$buffer);
echo $buffer;
?>
<meta name="description" content="From Trio to Full Band with DJ, we offer a variety of options to fit any wedding, fundraiser, special event or gala in Indianapolis, Chicago, Louisville or Cincinnati.">
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container ">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Packages</h2>
                <p> The Cool City Band is available for engagements throughout the Midwest including Louisville, Cincinnati, Chicago and Indianapolis. Pricing varies according to location, travel requirements, staging, date, etc. Custom event packages can always be created. Concerts are individually staged. Please contact us with your event/concert details for a free quote. </p>
            </div>
            <div class="col-lg-12">
                <div class="row pricing-table" style="margin-top:30px">
                    <div class="plan col-md-3">
                        <h3>Full Band + DJ<span><i style="color: #337AB7;" class="fa fa-2x fa-music"></i></span></h3>
                        <a class="btn btn-primary" href="contact.php">Get a Quote</a>
                        <ul>
                            <li>Pianist for cocktails/Trio for dinner</li>
                            <li>Full band with vocals for dancing</li>
                            <li>DJ/event emcee services</li>
                            <li><a href="#" data-toggle="modal" data-target="#package1">more info </a></li>
                        </ul>
                    </div>
                    <div class="plan col-md-3" id="most-popular">
                        <h3>Full Band<span><i style="color: #5cb85c;" class="fa fa-2x fa-music"></i></span></h3>
                        <a class="btn btn-success" href="contact.php">Get a Quote</a>
                        <ul>
                            <li>Pianist for cocktails/Trio for dinner</li>
                            <li>Full band with vocals for dancing</li>
                            <li>Event emcee services</li>
                            <li><a href="#" data-toggle="modal" data-target="#package2">more info </a></li>
                        </ul>
                    </div>
                    <div class="plan col-md-3">
                        <h3>Quintet<span><i style="color: #f0ad4e;" class="fa fa-2x fa-music"></i></span></h3>
                        <a class="btn btn-warning" href="contact.php">Get a Quote</a>
                        <ul>
                            <li>Piano, bass, drums, sax, and/or vocals</li>
                            <li>Instrumental only or with a vocalist</li>
                            <li>Light dancing music if desired</li>
                            <li><a href="#" data-toggle="modal" data-target="#package3">more info </a></li>
                        </ul>
                    </div>
                    <div class="plan col-md-3">
                        <h3>Trio<span><i style="color: #5bc0de;" class="fa fa-2x fa-music"></i></span></h3>
                        <a class="btn btn-info" href="contact.php">Get a Quote</a>
                        <ul>
                            <li>Piano, Bass, Drums or Sax</li>
                            <li>Light instrumental jazz standards</li>
                            <li>Ideal for smaller, intimate gatherings</li>
                            <li><a href="#" data-toggle="modal" data-target="#package4">more info </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section2">
    <div class="container "><!-- Marketing Icons Section -->
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">From Our Clients</h2>
                <div class="text-block">
                    <p> Thank you very much for your outstanding performance at our wedding reception on December 19. We are so appreciative for the special touches that you added to make our wedding day especially perfect.
                        Jimmy's surprise renditions of "Three times a Lady" and "That's All" were beautiful, and guests really enjoyed the sultry vocals from Shannon on "I Just Want to Make Love to You". But we would be remiss if we didn't comment on the fun crowd-energizing sing-along "Minnie the Moocher".
                        The entertainment was truly memorable and it was a pleasure working with you.</p>
                    <footer>Laura & Mike <cite title="Source Title">Bride and Groom</cite></footer>
                </div>
                <div class="text-block">
                    <p>The family reunion that we planned was a huge success, and you are part of the reason it went so well. Thank you so much for coming all the way to Moline to play for our event.
                        Both the three-piece and the full band did a marvelous job, and we received many comments on how good they were. We could not have asked for a more beautiful night for our formal event, and the wonderful voice of Shannon only added to the beauty. The reunion would not have been the same without the sounds of the Cool City Band. Thank you. </p>
                    <footer>Adrienne <cite title="Source Title">Event Organizer</cite></footer>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="package1" tabindex="-1" role="dialog" aria-labelledby="CCbanddj">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="CCbanddj">Cool City Band + DJ</h4>
            </div>
            <div class="modal-body">
                <p> This is the ultimate band package. The CC Pianist/Trio provides light jazz standards during cocktail & dinner hours. When guests are ready to dance, the full band provides lively dance music. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="package2" tabindex="-1" role="dialog" aria-labelledby="CCband">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="CCband">Cool City Band</h4>
            </div>
            <div class="modal-body">
                <p> If opted for, the CC Pianist/Trio provides light jazz standards during cocktail and dinner hours. Cool City will be the life of your Reception/Special Event/Dance/Gala/Fund-raiser. Dance the night way; you're guests will never forget your party/reception/event. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="package3" tabindex="-1" role="dialog" aria-labelledby="CC4tet">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="CC4tet">Cool City Quartet/Quintet</h4>
            </div>
            <div class="modal-body">
                <p> The Cool City Quartet/Quintet is ideal for larger parties/receptions/events where maintaining an intimate atmosphere is still desired. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="package4" tabindex="-1" role="dialog" aria-labelledby="CCtrio">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="CCtrio">Cool City Trio</h4>
            </div>
            <div class="modal-body">
                <p> Ideal for receptions, parties, dinners, and events when the full band is not needed. </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
<script>


$('.popover1').popover()


</script>
</body>
</html>