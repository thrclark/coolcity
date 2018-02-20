<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" style="background-image:url(img/logo.png); position:absolute; width:230px; height:77px" href="index.php">
            <h1 class="sr-only">Cool City Band</h1>
            </a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if( $page == 'home' ) { echo 'class="active"'; } ?> ><a href="index.php">Home</a> </li>
                <li <?php if( $page == 'music' ) { echo 'class="dropdown active"'; } ?> class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Music <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="music.php"> Cool City playlist</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="hireband.php">Hiring a band</a></li>
                    </ul>
                </li>
                <li <?php if( $page == 'photos' ) { echo 'class="active"'; } ?> ><a href="photos.php">Photos</a></li>
                <li <?php if( $page == 'testimonials' ) { echo 'class="active"'; } ?> ><a href="testimonials.php">Testimonials</a></li>
                <li <?php if( $page == 'packages' ) { echo 'class="active"'; } ?> ><a href="packages.php">Packages</a></li>
                <li <?php if( $page == 'contact' ) { echo 'class="dropdown active"'; } ?> class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="tel:1-317-529-3640"> call 1-317-529-3640</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="contact.php">Send a message</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
</nav>
