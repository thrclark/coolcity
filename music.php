<?php
# Variables
$page = 'music';
?>

<!DOCTYPE html>
<html lang=en>
<head>
<?php
ob_start();
include("includes/head.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Cool City Band - Music",$buffer);
echo $buffer;
?>
<meta name="description" content="Hear a mix of music styles from Cool City Band. Our goal is to provide a high entertainment value and fill the dance floor at your wedding, fundraiser, gala or special event.">

<style>

.playlist em {
	color: #767676;
    font-size: 12px;
	}
</style>
</head>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container ">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Music</h2>
                <p> Every party is different, so we are sensitive to the needs of the guests as the party flows. With a mix of styles including artists such as Michael Buble, Wilson Pickett, Sinatra, and Classic Rock & Roll, Blues and Swing our goal is provide a high entertainment value and fill the dance floor.</p>
            </div>
            <div class="col-lg-6">
                <h3>Clips</h3>
                <div class="well well-sm">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface">
                                <div class="jp-controls">
                                    <button class="jp-previous"  tabindex="0">previous</button>
                                    <button class="jp-play"  tabindex="0">play</button>
                                    <button class="jp-next"  tabindex="0">next</button>
                                    <button class="jp-stop"  tabindex="0">stop</button>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                                <div class="jp-volume-controls">
                                    <button class="jp-mute"  tabindex="0">mute</button>
                                    <button class="jp-volume-max"  tabindex="0">max volume</button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                </div>
                                <div class="jp-time-holder">
                                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                </div>
                                <div class="jp-toggles">
                                    <button class="jp-repeat"  tabindex="0">repeat</button>
                                    <button class="jp-shuffle"  tabindex="0">shuffle</button>
                                </div>
                            </div>
                            <div class="jp-playlist">
                                <ul>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                            <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 video">
                <h3>Video</h3>
                <div class="well well-sm">
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/SnCspB1kUlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-12">
                <h3>Playlist</h3>
                <div class="panel-group playlist" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-one">Popular Requests</a> </h4>
                        </div>
                        <div id="collapse-one" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">At Last – <em>Etta James</em></li>
                                    <li class="col-md-4">Beyond the Sea -  <em>Bobby Darrin</em></li>
                                    <li class="col-md-4">Come Fly with Me -  <em>Sinatra</em></li>
                                    <li class="col-md-4">Crazy Little Thing Called Love -  <em>Michael Buble</em></li>
                                    <li class="col-md-4">Stuck in The Middle with You -  <em>Michael Buble</em></li>
                                    <li class="col-md-4">For Once in My Life</li>
                                    <li class="col-md-4">Ive Got the World on a String  -  <em>Sinatra</em></li>
                                    <li class="col-md-4">Just the Way You Look Tonight  -  <em>Sinatra</em></li>
                                    <li class="col-md-4">Lady is a Tramp - <em>Sinatra</em></li>
                                    <li class="col-md-4">Love is Here to Stay -  <em>Ella Fitzgerald</em></li>
                                    <li class="col-md-4">Mack the Knife  -  <em>Bobby Darrin</em></li>
                                    <li class="col-md-4">Moondance  -  <em>Harry Connick</em></li>
                                    <li class="col-md-4">Nice N' Easy Does It  -  <em>Sinatra</em></li>
                                    <li class="col-md-4">The Best is Yet to Come</li>
                                    <li class="col-md-4">Where or When  -  <em>Bobby Darin</em></li>
                                    <li class="col-md-4">You Don’t Know Me - <em>Ray Charles</em></li>
                                    <li class="col-md-4">A Kiss to Build A Dream On - <em>Louis Armstrong</em></li>
                                    <li class="col-md-4">Save the last Dance for Me – <em>Michael Buble</em></li>
                                    <li class="col-md-4">Sway – <em>Michael Buble</em></li>
                                    <li class="col-md-4">Soul Man – <em>Blues Brothers</em></li>
                                    <li class="col-md-4">September – <em>Earth Wind and Fire</em></li>
                                    <li class="col-md-4">What a Wonderful World – <em>Louis Armstrong</em></li>
                                    <li class="col-md-4">Signed Sealed Delivered – <em>Stevie Wonder</em></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-two">Classic Rock</a> </h4>
                        </div>
                        <div id="collapse-two" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">I Wish - <em>Stevie Wonder</em></li>
                                    <li class="col-md-4">Signed Sealed Delivered – <em>Stevie Wonder</em></li>
                                    <li class="col-md-4">Stuck in the Middle With You – <em>Michael Buble</em></li>
                                    <li class="col-md-4">See Saw – <em>Aretha</em></li>
                                    <li class="col-md-4">Sitting on the Dock of the Bay</li>
                                    <li class="col-md-4">634-5769 – <em>Wilson Pickett</em></li>
                                    <li class="col-md-4">Chappel of Love- <em>Dixie Cups</em></li>
                                    <li class="col-md-4">I Feel Good - <em>James Brown</em></li>
                                    <li class="col-md-4">I Heard It through the Grapevine – <em>MoTown</em></li>
                                    <li class="col-md-4">Johnny Be Goode- <em>Chuck Berry</em></li>
                                    <li class="col-md-4">Knock on Wood – <em>Eddie Floyd</em></li>
                                    <li class="col-md-4">Midnight Hour - <strong>Wilson Pickett</strong></li>
                                    <li class="col-md-4">Mr. Big Stuff – <em>Jean Knight</em></li>
                                    <li class="col-md-4">Mustang Sally - <em>Wilson Pickett</em></li>
                                    <li class="col-md-4">Old Time Rock and Roll -<em> Bob Seger</em></li>
                                    <li class="col-md-4">She Caught the Katy - <em>Blues Brothers</em></li>
                                    <li class="col-md-4">Twist Medley - <em>Chubby Checker</em></li>
                                    <li class="col-md-4">Walkin the Dog - <em>Rolling Stones</em></li>
                                    <li class="col-md-4">Your Momma Don’t Dance</li>
                                    <li class="col-md-4">You Send Me - <em>Sam Cooke</em></li>
                                    <li class="col-md-4">Rock Steady – <em>Aretha</em></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-four">Jump Swing</a> </h4>
                        </div>
                        <div id="collapse-four" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">Bandstand Boogie</li>
                                    <li class="col-md-4">Boogie Bumper</li>
                                    <li class="col-md-4">Cottontail</li>
                                    <li class="col-md-4">In the Mood</li>
                                    <li class="col-md-4">Jump Jive and Wail</li>
                                    <li class="col-md-4">Jump with My Baby</li>
                                    <li class="col-md-4">Rock This Town</li>
                                    <li class="col-md-4">Two O'clock Jump</li>
                                    <li class="col-md-4">You and Me and Bottle makes Three</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-five">Standard Ballads</a> </h4>
                        </div>
                        <div id="collapse-five" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">All the Way </li>
                                    <li class="col-md-4">At Last</li>
                                    <li class="col-md-4">Embraceable You</li>
                                    <li class="col-md-4">How Long Has This Been Goin On</li>
                                    <li class="col-md-4">I Cant Get Started</li>
                                    <li class="col-md-4">I Left My Heart in San Francisco</li>
                                    <li class="col-md-4">Lover Man</li>
                                    <li class="col-md-4">Man I Love</li>
                                    <li class="col-md-4">Misty</li>
                                    <li class="col-md-4">Moonlight In Vermont</li>
                                    <li class="col-md-4">My Funny Valentine</li>
                                    <li class="col-md-4">Polka Dots and Moonbeams</li>
                                    <li class="col-md-4">San Francisco</li>
                                    <li class="col-md-4">Second Time Around</li>
                                    <li class="col-md-4">Shadow of Your Smile</li>
                                    <li class="col-md-4">Since I fell for You</li>
                                    <li class="col-md-4">Someone to Watch ove Me</li>
                                    <li class="col-md-4">Sophisticated Lady</li>
                                    <li class="col-md-4">Stardust</li>
                                    <li class="col-md-4">Summertime</li>
                                    <li class="col-md-4">Tenderly</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-six">Swing</a> </h4>
                        </div>
                        <div id="collapse-six" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">720 on the books</li>
                                    <li class="col-md-4">A Foggy Day</li>
                                    <li class="col-md-4">All of Me </li>
                                    <li class="col-md-4">Bye Bye Blackbird</li>
                                    <li class="col-md-4">C Jam Blues</li>
                                    <li class="col-md-4">Canadian Sunset</li>
                                    <li class="col-md-4">Do Nothing Till You hear from Me</li>
                                    <li class="col-md-4">Don’t Get Around Much</li>
                                    <li class="col-md-4">Dream A Little Dream of Me</li>
                                    <li class="col-md-4">Five Foot Two</li>
                                    <li class="col-md-4">Georgia on My Mind</li>
                                    <li class="col-md-4">Glory of Love</li>
                                    <li class="col-md-4">Moonglow</li>
                                    <li class="col-md-4">More I See You</li>
                                    <li class="col-md-4">Nice Work if You can Get It</li>
                                    <li class="col-md-4">Night and Day</li>
                                    <li class="col-md-4">Oh lady by good</li>
                                    <li class="col-md-4">Route-66</li>
                                    <li class="col-md-4">Satin Doll</li>
                                    <li class="col-md-4">Sentimental Over You</li>
                                    <li class="col-md-4">September in the Rain</li>
                                    <li class="col-md-4">Shiny Stockings</li>
                                    <li class="col-md-4">Stompin at the Savoy</li>
                                    <li class="col-md-4">String of Pearls</li>
                                    <li class="col-md-4">Swingtime in the Rockies</li>
                                    <li class="col-md-4">Take the A Train</li>
                                    <li class="col-md-4">Takin a Chance on Love</li>
                                    <li class="col-md-4">Tangerine</li>
                                    <li class="col-md-4">Teach Me Tonight</li>
                                    <li class="col-md-4">True Love</li>
                                    <li class="col-md-4">Walk Right In</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('includes/stayintouch.php') ?>
<?php include ('includes/footer.php') ?>

<!-- /.container -->
<?php include ('includes/scripts.php') ?>
<script type="text/javascript" src="node_modules/jplayer/dist/jplayer/jquery.jplayer.min.js"></script> 
<script type="text/javascript" src="node_modules/jplayer/dist/add-on/jplayer.playlist.min.js"></script> 
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function() {
        new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [
			{ mp3: '../audio/2018-05-01-signedsealed.mp3', title: 'Signed Sealed Delivered',},
			{ mp3: '../audio/2018-05-01-stuckinthemiddle.mp3', title: 'Stuck In The Middle With You',},
			{ mp3: '../audio/2018-05-01-rocksteady.mp3', title: 'Rock Steady',},
			{ mp3: '../audio/2018-05-01-knockonwood.mp3', title: 'Knock on Wood',},
			{ mp3: '../audio/2018-05-01-sway.mp3', title: 'Sway',},
			{ mp3: '../audio/2018-05-01-accentuate.mp3', title: 'Accentuate the Positive',},
			{ mp3: '../audio/2018-05-01-blueskies.mp3', title: 'Blue Skies',},
			{ mp3: '../audio/2018-05-01-iwontdance.mp3', title: 'I Won\'t Dance',},
			{ mp3: '../audio/2018-05-01-niceeasy.mp3', title: 'Nice and Easy',},
			{ mp3: '../audio/2018-05-01-thewayyoulook.mp3', title: 'The Way You Look Tonight',},
			{ mp3: '../audio/2018-05-01-whereorwhen.mp3', title: 'Where or When',},
			{ mp3: '../audio/coolcityband-01.mp3', title: 'I Love Being Here With You',}, 
			{ mp3: '../audio/coolcityband-04.mp3', title: 'Route 66',}, 
			{ mp3: '../audio/2018-05-01-gotitbad.mp3', title: 'I\'ve Got It Bad',},
			{ mp3: '../audio/coolcityband-05.mp3', title: 'How Long Has This Been Going On?',}, 
			{ mp3: '../audio/coolcityband-09.mp3', title: 'Let The Good Times Roll',}	
        ], {
            swfPath: "../dist/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        });
        $("#jplayer_inspector_1").jPlayerInspector({
            jPlayer: $("#jquery_jplayer_1")
        });
    });
    //]]>
</script>
</body>
</html>