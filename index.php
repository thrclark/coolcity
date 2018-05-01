<?php
# Variables
$page = 'home';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include("includes/head.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Indianapolis Wedding Music, Live Event Band and Gala Fundraiser Entertainment",$buffer);
echo $buffer;
?>
<meta name="description" content="Cool City Band – live music, weddings, fundraisers, galas, special events, and concerts. Experienced, talented musicians and vocalists play a variety of popular tunes.">
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide"><!-- Indicators -->
    <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to=0 class="active"></li>
        <li data-target="#myCarousel" data-slide-to=1></li>
        <li data-target="#myCarousel" data-slide-to=2></li>
        <li data-target="#myCarousel" data-slide-to=3></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image: url('img/hero/hero9.png');"></div>
            <div class="carousel-caption two">
                <div class="caption-block" style="">"We could not have asked for a more beautiful night..."</div>
            </div>
        </div>
        <div class="item ">
            <div class="fill" style="background-image: url('img/hero/hero10.png');"></div>
            <div class="carousel-caption four">
                <div class="caption-block" style="">"Thank you for helping us make some wonderful memories..."</div>
            </div>
        </div>
        <div class="item ">
            <div class="fill" style="background-image: url('img/hero/hero11.png');"></div>
            <div class="carousel-caption one">
                <div class="caption-block" style="">"The entertainment was truly memorable..."</div>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image: url('img/hero/hero12.png');"></div>
            <div class="carousel-caption three">
                <div class="caption-block" style="">"People were dancing even during dinner. It was a really nice touch..."</div>
            </div>
        </div>
    </div>
    <!-- Controls --><a class="left carousel-control" href="#myCarousel" data-slide=prev> <span class="icon-prev"><span class="sr-only">Previous Slide</span></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide=next> <span class="icon-next"><span class="sr-only">Next Slide</span></span> </a></header>
<!-- Page Content -->
<section class="marketing section1">
    <div class="container ">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Weddings, Fundraisers and Special Events</h2>
            </div>
            <div class="col-md-4 img-portfolio"> <img class="img-responsive img-hover img-thumbnail" src="img/marketing/weddings.png" alt="Cool City Band">
                <h3>Weddings</h3>
                <p>Make your wedding unforgettable. Cool City Band provides the perfect atmosphere to make your wedding reception the event of a lifetime. Special requests for your first dance? We can do it! <a class="" href="contact.php">Book now!</a></p>
            </div>
            <div class="col-md-4 img-portfolio"> <img class="img-responsive img-hover img-thumbnail" src="img/marketing/galas.png" alt="Laney Wilson">
                <h3>Fund Raisers / Galas</h3>
                <p>Impress your guests and donors by adding a touch of musical elegance to your event. Cool City is the perfect solution for classy dinner music, lively dance sets, and an all-around perfect evening. <a class="" href="contact.php">Book now!</a></p>
            </div>
            <div class="col-md-4 img-portfolio"> <img class="img-responsive img-hover img-thumbnail" src="img/marketing/events.png" alt="Swing Dance Event">
                <h3>Concerts &amp; Special Events</h3>
                <p>Engaging, entertaining vocalists backed by virtuoso musicians will deliver an impressive musical experience. With a wide selection of music, Cool City appeals to all. <a class="" href="contact.php">Book now!</a></p>
            </div>
            <div class="col-lg-12">
                <h3 class="">Unforgettable Live Music</h3>
                <p> Whether you are looking for a full 11 piece band and DJ, a quintet or a trio this experienced group of top-notch musicians has you covered. Cool City Band offers a variety of <a href="packages.php">live music packages</a> appropriate for any occasion including weddings, anniversaries, galas, concerts and fundraisers. With years of experience performing in Indianapolis, Chicago, Louisville, Cincinnati and throughout the Midwest, Cool City is professional, reliable and impressive. <a href="music.php">Give a listen</a> to the Cool City Band in action. Live wedding music makes a memorable day unforgettable.</p>
            </div>
        </div>
    </div>
</section>
<section class="section2">
    <div class="container">
        <div class="row section-content" >
            <div class="col-lg-12">
                <h2 class="page-header">Calendar</h2>
            </div>
            <div  class="col-md-9">
                <h3>Vegas Swing Nights</h3>
                <p>Viva Las Vegas! Come join us every third Tuesday at the <a href="http://www.thejazzkitchen.com/" target="_blank">Jazz Kitchen</a> for an exciting evening of music, dance, and great food and drink. The Cool City Band kicks it up with dance favorites from Frank Sinatra, Dean Martin, Ray Charles, Etta James, Voodo Daddy, Michael Buble, and many others. Bring your dancing shoes and be prepared to dance the night away!</p>
                <ul>
                    <li><strong>When</strong>: Every third Tuesday of each month</li>
                    <li><strong>Where</strong>: <a href="http://www.thejazzkitchen.com/" target="_blank">Jazz Kitchen, </a>5377 N College Ave, Indianapolis, IN 46220</li>
                </ul>
            </div>
            <div class="col-md-3 img-portfolio"><img class="img-responsive img-hover img-thumbnail" src="img/swingnight.jpg" alt="Vegas Swing Night banner"/></div>
            <div  class="col-md-9">
                <h3>Fountain Square Swing Dance</h3>
                <p>It's Indy's hottest swing dance party! Come join us for a basic lesson with Naptown Stomp at 7:30pm and then the Cool City Band at 8:30pm - 11:30pm with some of the best swing sounds around! Admission $12 at 7:30pm or $10 at 8:30pm. All ages welcome, cash bar or restaurants available for food and beverage purchases.s</p>
                <ul>
                    <li><strong>When</strong>: Check the Fountain Square <a href="http://www.fountainsquareindy.com/" target="_blank">calendar</a> for dates throughout the year</li>
                    <li><strong>Where</strong>: <a href="http://www.fountainsquareindy.com/" target="_blank">Fountain Square, </a>1111 Prospect St, Indianapolis, IN 46203</li>
                </ul>
            </div>
            <div class="col-md-3 img-portfolio"><img class="img-responsive img-hover img-thumbnail" src="img/fountainsquare.jpg" alt="Fountain Square Dance banner"/></div>
            <div class="col-md-12">
                <h3>Events </h3>
                <div class="well" style="background-color:#D4D1C2" id="calendar"></div>
            </div>
        </div>
    </div>
</section>
<section class="about section1">
    <div class="container "><!-- Marketing Icons Section -->
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">About the Band</h2>
            </div>
            <div class="col-md-9">
                <p>After playing in and leading numerous bands since 1975, Indianapolis' own Roy Geesa saw the need for an "events" band which would rise above others by delivering tasteful high quality music experiences. Roy's vision of a great party band has been realized with the "Cool City Band".</p>
                <p>What makes the Cool City Band so cool?</p>
                <ul>
                    <li>Favorites from the 'Great American Songbook,' including Cole Porter, Hoagy Carmichael, Duke Ellington and other greats artitsts.</li>
                    <li>Great Party Tunes from the 'Horn Bands' of the 70's right through to today's hit tunes</li>
                    <li>Classic Rock and Roll and Mo-Town</li>
                    <li>Talented and attractive Vocal Performers</li>
                    <li>A tight band including Brass, Saxophones, Keyboards, Bass, Guitar and Drums</li>
                    <li>Instrumentalists versed in all styles from Swing to Rock and Roll</li>
                    <li>Excellent State-of-the-art Sound Equipment</li>
                </ul>
                <p>Since forming in 1999, the band has gained a following in Indiana and has performed throughout the Midwest.</p>
                <p>The Cool City Band is great choice to provide a very special touch to your event.</p>
            </div>
            <div class="col-md-3 text-center">
                <div class="thumbnail" style="background-color: #F2EDDE;"><img class="img-responsive" src="img/roy.png" alt="Roy Geesa">
                    <div class="caption">
                        <h3 class="caption-header">Roy Geesa</h3>
                        <p>Founder/Leader</p>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/Cool-City-Band-149866258393477/?fref=ts"><i class="fa fa-2x fa-facebook-square"></i><span class="sr-only">Cool City Facebook Page</span></a></li>
                            <li><a href="mailto:ieb@prodigy.net,RGeesa@gregoryappel.com"><i class="fa fa-2x fa-envelope"></i><span class="sr-only">Email Us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about section2">
    <div class="container "><!-- Marketing Icons Section -->
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">From Our Clients</h2>
                
                
                
                


    <div class="text-block">
                    <p>Thank you for doing such a great job at our wedding on April 17! The band was so much fun! We've gotten so many compliments on the music.</p>
                    <footer>Kim &amp; Gabe <cite title="Source Title">Bride and Groom</cite></footer>
                </div>


    <div class="text-block">
                    <p>Just came home from an event in Columbus Indiana at the Commons and you guys were fantastic.  Honestly, so great.  Thought you should know everyone was very pleased and talking about how fun you were.</p>
                    <footer>Sue <cite title="Source Title">Event Participant</cite></footer>
                </div>




                <div class="text-block">
                    <p>Thank you so much for helping to make our Gala a smashing success. We are so grateful and appreciative of such wonderful talent and professionalism. Please pass our accolades on to all the artists who Gave it their all and made us look so very good!</p>
                    <footer>Donna <cite title="Source Title">Event Organizer</cite></footer>
                </div>
                <div class="text-block">
                    <p>The family reunion that we planned was a huge success, and you are part of the reason it went so well. Thank you so much for coming all the way to Moline to play for our event.</p>
                    <p>Both the three-piece and the full band did a marvelous job, and we received many comments on how good they were. We could not have asked for a more beautiful night for our formal event, and the wonderful voice of Shannon only added to the beauty. The reunion would not have been the same without the sounds of the Cool City Band. Thank you.</p>
                    <footer>Adrienne <cite title="Source Title">Event Organizer</cite></footer>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
<!-- Script to Activate the Carousel --><script>
    $('.carousel').carousel({
        interval: 50000 //changes the speed
    })</script> 
<script>
    
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
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "Vegas Swing Nights",
  "startDate" : "2015-01-19T21:00",
  "url" : "http://www.thejazzkitchen.com/event/cool-city-band-vegas-swing/",
  "location" : {
    "@type" : "Place",
    "sameAs" : "http://www.thejazzkitchen.com/",
    "name" : "The Jazz Kitchen",
    "address" : "5377 N College Ave, Indianapolis, IN 46220"
  }
}
</script> 
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "Fountain Square Swing Dance",
  "startDate" : "2015-05-27T20:00",
  "url" : "http://www.fountainsquareindy.com/",
  "location" : {
    "@type" : "Place",
    "sameAs" : "http://www.fountainsquareindy.com/",
    "name" : "Fountain Square",
    "address" : "1111 Prospect St, Indianapolis, IN 46203"
  }
}
</script>
</body>
</html>