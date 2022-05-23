<?php
# Variables
$page = 'home';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include( "includes/head.php" );
$buffer = ob_get_contents();
ob_end_clean();
$buffer = str_replace( "%TITLE%", "Indianapolis Wedding Music, Live Event Band and Gala Fundraiser Entertainment", $buffer );
echo $buffer;
?>
<meta name="description" content="Cool City Band – live music, weddings, fundraisers, galas, special events, and concerts. Experienced, talented musicians and vocalists play a variety of popular tunes.">

	<style>
		.cal-block {
			max-width: 400px;
		}
		.cal-date {
			font-size: 2rem;
		}
		.cal-location {
			margin-bottom: 1rem
		}
		.cal-description {
			padding-bottom: 2rem;
			margin-bottom: 2rem;
			border-bottom: solid 1px #ADADAD;
			
		}
	
	
	</style>
	
	
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
                <p>Make your wedding unforgettable. Cool City Band provides the perfect atmosphere to make your wedding reception the event of a lifetime. We specialize in music for all ages. <a class="" href="contact.php">Book now!</a></p>
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
                <p> Whether you are looking for a full 11 piece band and DJ, a quintet or a trio this well established and experienced group of top-notch musicians has you covered. The Cool City Band offers a variety of <a href="packages.php">live music packages</a> appropriate for any occasion including weddings, anniversaries, galas, concerts and fundraisers. With years of experience performing in Indianapolis, Chicago, Louisville, Cincinnati and throughout the Midwest, Cool City is professional, reliable and impressive. <a href="music.php">Give a listen</a> to the Cool City Band in action. Live wedding music makes a memorable day unforgettable.</p>
            </div>
        </div>
    </div>
</section>
<section class="section2">
    <div class="container">
        <div class="row section-content" >
            <div class="col-lg-12">
                <h2 class="page-header">Calendar - new</h2>
            </div>
            
            <!--                <div class="input-group">
                    <input type="text" id="quicksearch" class="form-control" placeholder="Search" />
                </div>
                <div id="filter" class="btn-group" role="group">
                    <button id="allbuttons" class="btn btn-default is-checked" data-value="*">Show All</button>
                </div>-->
            
            <div class="col-lg-12" id="database">
                <div class="cal-block">
                    <div class="cal-date"> June 7, 2022</div>
                    <div class="cal-location"> Carnegie Hall</div>
                    <div class="cal-description">Description goes here asdf asdf asdf asdf asdf asdf asdf asfd asdf asdf asdf asdf asdf asdf asdf asdf asdf as df.</div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
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
                            <li><a href="mailto:ieb@prodigy.net,roygeesa@gmail.com"><i class="fa fa-2x fa-envelope"></i><span class="sr-only">Email Us</span></a></li>
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
                    <p>I write this as a solid recommendation of the Cool City Band. For the better part of 10 years we have had this wonderful band in our monthly rotation here at The Jazz Kitchen. We are a dinner / dancing / live music venue that specializes in jazz of all kinds. The Cool City Band mostly performs big band classics and danceable hits from the Motown and R&B oldies songbooks. Something of special note is that I seldom book a band every month, but Roy Geesa and his band seem to always be evolving and adding new musical perspectives. They are a huge hit with their fans and in addition to being very versatile and utilizing a number of stellar performers they are a complete class act and a great compliment to our establishment. I would again highly recommend this great group for your next event!</p>
                    <footer>David Allee <cite title="Source Title">Owner, The Jazz Kitchen</cite></footer>
                </div>
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
<script id="rendered-js" >
// Get Google sheet data using Papa Parse example by Frank Bültge - www.frankbueltge.de
// Code published here: https://github.com/frrrrank/Google-Sheet-Stuff
// Instructions can be found here: https://frankbueltge.de/en/google-sheets-as-database-or-tiny-cms/

// Publish your sheet to the web and use the URL you get from the sharing option on the top/right of the sheet and add /pub?output=csv at the end of the URL      
var public_spreadsheet_url = 'https://docs.google.com/spreadsheets/d/13lP-96izM95kbpBlY9Wx1XfcyPNF9Lsc26ApQN-95Qo/pub?output=csv';

var qsRegex;
var buttonFilter;
var $quicksearch = $('#quicksearch');
var $container = $('#database');
var timeout;

function init() {
  Papa.parse(public_spreadsheet_url, {
    download: true,
    header: true,
    complete: showInfo });

}
window.addEventListener('DOMContentLoaded', init);

function showInfo(results) {
  var data = results.data;
  var result = [];
  var count = 1;
  // data comes through as a simple array since simpleSheet is turned on
  // alert("Successfully processed " + data.length + " rows!");
  // console.log(data);

  // loop to get the data from JSON and write it to the div's with the id's database and quicksearch 
  $.each(data, function (i, v) {
    // Parses the resulting JSON into the individual squares for each row
    $container.append('<div id="element-item"><div class="category">' + v.Filter_category + '</div><img src="' + v.Pic_Link + '"><div class="name">' + v.Title + '</div><div class="boldsubhed">' + v.Location + '</div><div class="boldsubhed">' + v.City + '</div><div class="description">' + v.Date + '</div><div class="readmore"><a href="' + v.Website + ' " target="_blank">Website</a></div></div>');
    // Gets all unique filtercategory values and puts them into an array
    if ($.inArray(v.Filter_category, result) == -1) {
      result.push(v.Filter_category);
      // Creates the filter buttons
      $('#filter').append('<button id="' + v.Filter_category + '" class="btn btn-default" data-value="choice' + count++ + '">' + v.Filter_category + '</button>');
    }
  });
  // search function
  $quicksearch.keyup(debounce(function () {
    qsRegex = new RegExp($quicksearch.val(), 'gi');
    $container.isotope();
  }));
  //  wait until images are loaded 
  $container.imagesLoaded(function () {
    // Sorts them into responsive square layout using isotope.js
    $container.isotope({
      itemSelector: '#element-item',
      layoutMode: 'masonry',
      // so that isotope will filter both search and filter results
      filter: function () {
        var $this = $(this);
        var searchResult = qsRegex ? $this.text().match(qsRegex) : true;
        var buttonResult = buttonFilter ? $this.is(buttonFilter) : true;
        return searchResult && buttonResult;
      } });

  });
  // debounce so filtering doesn't happen every millisecond
  function debounce(fn, threshold) {
    return function debounced() {
      if (timeout) {
        clearTimeout(timeout);
      }

      function delayed() {
        fn();
        timeout = null;
      }
      timeout = setTimeout(delayed, threshold || 100);
    };
  }
  // Adds a click function to all buttons in the group
  $('.btn-group').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    var allbuttonids = $("button").attr('id');
    $buttonGroup.on('click', 'button', function () {
      // Changes to .is-checked class when clicked
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
      // Gets all values that matches the clicked button's data value
      buttonFilter = $(this).attr('data-value');
      textFilter = $(this).text();

      function getitems() {
        var name = $(this).find('.category').text();
        if (textFilter != "Show All") {
          return name.match(textFilter);
        } else {
          return "*";
        }
      }
      buttonFilter = getitems || buttonFilter;
      $container.isotope();
    });
  });
}
//# sourceURL=pen.js
    </script> 

<!-- Script to Activate the Carousel --><script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
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