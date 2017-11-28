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
                    <iframe src="https://www.youtube.com/embed/le24pFMpSEY" style="border:none" allowfullscreen></iframe>
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
                                    <li class="col-md-4">Beyond the Sea</li>
                                    <li class="col-md-4">Come Fly with Me</li>
                                    <li class="col-md-4">Crazy Llittle Thing Called Love</li>
                                    <li class="col-md-4">Stuck In The Middle With You</li>
                                    <li class="col-md-4">If You Love Me Like You Say</li>
                                    <li class="col-md-4">For Once in My Life</li>
                                    <li class="col-md-4">Ive Got the World on a String</li>
                                    <li class="col-md-4">Just the Way you Look Tonight</li>
                                    <li class="col-md-4">Lady is  a Tramp</li>
                                    <li class="col-md-4">Love is Here to Stay</li>
                                    <li class="col-md-4">Mack the Knife</li>
                                    <li class="col-md-4">Mambo #5</li>
                                    <li class="col-md-4">Moondance</li>
                                    <li class="col-md-4">Nice N' Easy Does It</li>
                                    <li class="col-md-4">The Best is Yet to Come</li>
                                    <li class="col-md-4">Where or When</li>
                                    <li class="col-md-4">Save the Last Dance for Me</li>
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
                                    <li class="col-md-4">634-5769</li>
                                    <li class="col-md-4">Chappel of Love</li>
                                    <li class="col-md-4">I Feel Good</li>
                                    <li class="col-md-4">I Heard It through the Grapevine</li>
                                    <li class="col-md-4">Johnny Be Goode</li>
                                    <li class="col-md-4">Knock on Wood</li>
                                    <li class="col-md-4">Midnight Hour</li>
                                    <li class="col-md-4">Mr. Big Stuff</li>
                                    <li class="col-md-4">Mustang Sally</li>
                                    <li class="col-md-4">Old Time Rock and Roll</li>
                                    <li class="col-md-4">Only In It For the Money</li>
                                    <li class="col-md-4">Proud Mary</li>
                                    <li class="col-md-4">Rock Around the Clock</li>
                                    <li class="col-md-4">She Caught the Katy</li>
                                    <li class="col-md-4">She Caught the Katy</li>
                                    <li class="col-md-4">Shes Lookin Good</li>
                                    <li class="col-md-4">Twist Medley</li>
                                    <li class="col-md-4">Walkin the Dog</li>
                                    <li class="col-md-4">Watermelon Man</li>
                                    <li class="col-md-4">Wooly Bully</li>
                                    <li class="col-md-4">You Don’t Know Me</li>
                                    <li class="col-md-4">Your Momma Don’t Dance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-three">70's soft rock</a> </h4>
                        </div>
                        <div id="collapse-three" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">After the Lovin</li>
                                    <li class="col-md-4">Didn’t We</li>
                                    <li class="col-md-4">Evergreen</li>
                                    <li class="col-md-4">From a Distance</li>
                                    <li class="col-md-4">Theme From Ice Castles</li>
                                    <li class="col-md-4">Traces</li>
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
                                    <li class="col-md-4">Hot Seats</li>
                                    <li class="col-md-4">In the Mood</li>
                                    <li class="col-md-4">Jump Jive and Wail</li>
                                    <li class="col-md-4">Jump with My Baby</li>
                                    <li class="col-md-4">Jumpin Jack</li>
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
                                    <li class="col-md-4">A Nightingale Sang in Berkley Square</li>
                                    <li class="col-md-4">Aint Misbehavin</li>
                                    <li class="col-md-4">All of Me Instrumental</li>
                                    <li class="col-md-4">All of Me Vocal</li>
                                    <li class="col-md-4">All the Things You Are</li>
                                    <li class="col-md-4">Arent you glad youre you</li>
                                    <li class="col-md-4">Avalon</li>
                                    <li class="col-md-4">Bill Bailey</li>
                                    <li class="col-md-4">Blue Moon</li>
                                    <li class="col-md-4">Bye Bye Blackbird</li>
                                    <li class="col-md-4">C Jam Blues</li>
                                    <li class="col-md-4">Canadian Sunset</li>
                                    <li class="col-md-4">Caravan</li>
                                    <li class="col-md-4">Chattanooga Choo Choo</li>
                                    <li class="col-md-4">Chattanooga Choo Choo</li>
                                    <li class="col-md-4">Chattanooga/Kalamazoo/Tuxedo</li>
                                    <li class="col-md-4">Coquette</li>
                                    <li class="col-md-4">Dancing on the Ceiling</li>
                                    <li class="col-md-4">Day in Day Out</li>
                                    <li class="col-md-4">Days of Wine and Roses</li>
                                    <li class="col-md-4">Deep Purple</li>
                                    <li class="col-md-4">Do Nothing Till You hear from Me</li>
                                    <li class="col-md-4">Don’t Get Around Much</li>
                                    <li class="col-md-4">Dream A Little Dream of Me</li>
                                    <li class="col-md-4">Eager Beaver</li>
                                    <li class="col-md-4">Five Foot Two</li>
                                    <li class="col-md-4">Five on A Time</li>
                                    <li class="col-md-4">Georgia on My Mind-Instrumental</li>
                                    <li class="col-md-4">Georgia on My Mind-Vocal</li>
                                    <li class="col-md-4">Give Me the Simple Life</li>
                                    <li class="col-md-4">Glory of Love</li>
                                    <li class="col-md-4">Harlem Nocturne</li>
                                    <li class="col-md-4">Have you Met Miss Jones</li>
                                    <li class="col-md-4">How About You</li>
                                    <li class="col-md-4">I cant give you anthing but love</li>
                                    <li class="col-md-4">I Don’t Know Why</li>
                                    <li class="col-md-4">I Got it Bad</li>
                                    <li class="col-md-4">I RememberYou</li>
                                    <li class="col-md-4">I'm gonna sit right down </li>
                                    <li class="col-md-4">In  Mellow tone</li>
                                    <li class="col-md-4">Isnt it Romantic</li>
                                    <li class="col-md-4">It could happen to you</li>
                                    <li class="col-md-4">It’s a Blue World</li>
                                    <li class="col-md-4">Its only a Paper Moon</li>
                                    <li class="col-md-4">Johnson Rag</li>
                                    <li class="col-md-4">Just You Just Me</li>
                                    <li class="col-md-4">Lullaby ofBroadway</li>
                                    <li class="col-md-4">LuLus back in Town</li>
                                    <li class="col-md-4">Melody of Love</li>
                                    <li class="col-md-4">Miller Medley</li>
                                    <li class="col-md-4">Mister Five by Five</li>
                                    <li class="col-md-4">Moonglow</li>
                                    <li class="col-md-4">More I See You-Wolpe</li>
                                    <li class="col-md-4">Mr. Lucky</li>
                                    <li class="col-md-4">My heart stood still</li>
                                    <li class="col-md-4">Nice Work if You can Get It</li>
                                    <li class="col-md-4">Night and Day</li>
                                    <li class="col-md-4">Oh lady by good</li>
                                    <li class="col-md-4">Oh You Beautiful doll</li>
                                    <li class="col-md-4">On a Clear Day</li>
                                    <li class="col-md-4">Out of Nowhere</li>
                                    <li class="col-md-4">Peg O my heart</li>
                                    <li class="col-md-4">Perdido</li>
                                    <li class="col-md-4">Pink Panther</li>
                                    <li class="col-md-4">Route-66</li>
                                    <li class="col-md-4">Satin Doll</li>
                                    <li class="col-md-4">Sentimental Over You</li>
                                    <li class="col-md-4">September in the Rain</li>
                                    <li class="col-md-4">Shiny Stockings</li>
                                    <li class="col-md-4">Singing the Blues</li>
                                    <li class="col-md-4">Somebody Loves Me</li>
                                    <li class="col-md-4">Stars Fell on Alabama</li>
                                    <li class="col-md-4">Stella By Starlight</li>
                                    <li class="col-md-4">Stompin at the Savoy</li>
                                    <li class="col-md-4">String of Pearls</li>
                                    <li class="col-md-4">Swingtime in the Rockies</li>
                                    <li class="col-md-4">Take the A Train</li>
                                    <li class="col-md-4">Takin a Chance ON Love</li>
                                    <li class="col-md-4">Tangerine</li>
                                    <li class="col-md-4">Teach Me Tonight</li>
                                    <li class="col-md-4">True Love</li>
                                    <li class="col-md-4">Until I met You</li>
                                    <li class="col-md-4">Walk Right In</li>
                                    <li class="col-md-4">Whiffenpoof Song</li>
                                    <li class="col-md-4">Who's Sorry Now ?</li>
                                    <li class="col-md-4">Willow weep for me</li>
                                    <li class="col-md-4">You and the night and the music</li>
                                    <li class="col-md-4">You Do Something to Me</li>
                                    <li class="col-md-4">You stepped out of a dream</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-seven">Tango, ChaCha, Rhumba</a> </h4>
                        </div>
                        <div id="collapse-seven" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="col-md-4">Besame Mucho</li>
                                    <li class="col-md-4">Brazil</li>
                                    <li class="col-md-4">Cherry Pink</li>
                                    <li class="col-md-4">Chu Chu Cha Cha</li>
                                    <li class="col-md-4">Dansero</li>
                                    <li class="col-md-4">Flamingo</li>
                                    <li class="col-md-4">For All We Know</li>
                                    <li class="col-md-4">Frenesi</li>
                                    <li class="col-md-4">Green Eyes</li>
                                    <li class="col-md-4">La Cumparasita</li>
                                    <li class="col-md-4">Lady IN Red</li>
                                    <li class="col-md-4">Latin Fantasy</li>
                                    <li class="col-md-4">Mancini Medley</li>
                                    <li class="col-md-4">Perfidia</li>
                                    <li class="col-md-4">Poinciana</li>
                                    <li class="col-md-4">Tea For Two Cha Cha</li>
                                    <li class="col-md-4">Undecided Cha-Cha</li>
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
        }, [{
                mp3: '../audio/coolcityband-15.mp3',
                title: 'All The Way',

            }, {
                mp3: '../audio/coolcityband-01.mp3',
                title: 'I Love Being Here With You',
            }, {
                mp3: '../audio/coolcityband-02.mp3',
                title: 'Oo Shoo Be Do Be',
            }, {
                mp3: '../audio/coolcityband-04.mp3',
                title: 'Route 66',
            }, {
                mp3: '../audio/coolcityband-05.mp3',
                title: 'How Long Has This Been Going On?',
            }, {
                mp3: '../audio/coolcityband-06.mp3',
                title: 'Accentuate The Positive',
            },




          
            {
             mp3:'../audio/coolcityband-08.mp3',
        title:'Nice n\' Easy',
            }, {
                mp3:'../audio/coolcityband-09.mp3',
        title:'Let The Good Times Roll',
            }




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