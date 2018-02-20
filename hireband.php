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
         <h2 class="page-header">Hiring a band</h2>
        <div class="col-md-12 hidden-xs"> <img src="img/hireband.png" class="img-responsive img-hover img-thumbnail" alt="Cool City Band" style="width:100%"> </div>
        
        
            <div class="col-lg-12">
               <hr>
                <p> 10 Tips for Hiring a Live Band for your Wedding, Fundraiser or Event</p>
                <p>Live musical entertainment adds excitement and energy to any gathering. Whether you're planning your dream wedding reception, putting together a fundraiser for a good cause, or setting up a gala corporate celebration, a live musical band transforms your festivities into unforgettable enjoyment. To choose the right performers for your event, keep these important considerations in mind.</p>
                <ol>
                    <li> Get a sense of (party) purpose. For example, if you're planning a company event, suit the entertainment to the reason for your gathering. Is it a formal occasion? Is it lighthearted? Are you aiming to impress a client or to celebrate a milestone? Choose the music-and the band-accordingly. </li>
                    <li>Select an event-appropriate style of music. Choose a group that performs music all your guests will enjoy. The age range of your attendees makes as big a difference in your band selection as the type of occasion. </li>
                    <li>Dance party or sit-down gathering? Some events naturally lend themselves to getting out on the dance floor and finding a groove. Others demand musical accompaniment instead of a chance to boogie. Look for a live band that suits your expectations and those of your audience.  With a range of packages from 3pieces to full band Cool City Band has your covered no matter what type of live music you need for your event. </li>
                    <li>Facebook page, or send an e-mail an inquiry to your attendee list. You may find an interesting option among the recommendations you receive. </li>
                    <li>Audition musicians in person if you can. Choose a group you can see at a preview they present for you or at a gig they're playing in your area.  Are the performers dynamic? Do they acknowledge and interact with the audience? Along with listening to the music, watch the crowd and see how attendees respond to the performers. </li>
                    <li>Ask about location, location, location-the band's location, that is. When you search online for entertainment, it's easy to land on the websites of bands located outside your city or even beyond your state. Many groups gig in a multi-state area, but you'll need to verify that the live act you want will travel to your location. The Cool City Band is available for engagements throughout the Midwest. </li>
                    <li>The best ability is availability. You've found the perfect performers for your event, but are they able to play at your event? The earlier you book, the likelier you are to secure a date with your first-choice musicians. </li>
                    <li>Along with availability, timing is everything. Ask the band how much advance notice they'll need to add your event to their schedule. One group's busy season may be another band's down time. Don't wait until the last minute to book your combo, only to find out that they already have a gig on your event date. </li>
                    <li>Lights, fog machine, action. Does the group perform with special effects? Can they be used safely in your venue? </li>
                    <li>Think big-and little. Even if you're planning the type of event that typically calls for a multi-piece combo, you may find that a soloist/accompanist duo or a singer/pianist will provide the right intimate accent to your event. Look for a live band that suits the size of your party-or a band that can configure itself into various types and sizes of ensembles. </li>
                </ol>
                <p> To find the perfect live act for your wedding, fundraiser or gala event, allow enough time to make a thoughtful decision-and take care of the details that add up to make your event special. If you've done your homework, you'll reap the compliments for planning a memorable occasion. </p>
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