<?php
# Variables
$page = 'photos';
?>

<!DOCTYPE html>
<html lang=en>
<?php
ob_start();
include("includes/head.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Cool City Band - Photos",$buffer);
echo $buffer;
?>

<body>
<!-- Navigation -->
<?php include ('includes/navigation.php') ?>
<section class="section1">
    <div class="container ">
        <div class="row section-content">
            <div class="col-lg-12">
                <h2 class="page-header">Photos</h2>
            </div>
            <div class="col-lg-12">
                <div class="well well-sm fotorama"   data-width="100%" data-ratio="800/600" data-navposition="top"  data-nav="thumbs">

<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-002.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-005.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-006.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-007.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-008.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-009.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-010.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-012.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-013.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-014.png"><img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-001.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-016.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-017.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-018.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-019.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-020.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-021.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-022.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-023.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-024.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-026.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-027.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-028.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-029.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-030.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-031.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-032.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-033.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-034.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-035.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-037.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-038.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-039.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-040.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-041.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-042.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-043.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-044.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-045.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-046.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-047.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-049.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-050.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-052.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-053.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-054.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-055.png">
<img class="img-responsive" alt="Live performance with the Cool City Band" src="img/gallery/gallery-056.png"> </div>
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