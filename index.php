<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  
  <title>TealSeagull</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/tealseagull.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">
</head>
<!-- NAVBAR
  ================================================== -->
  <body class="body-index">
    <?php 
      $current_page = "index";
      include("include/menu.php"); 
    ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/ts1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Content Management Systems</h3>
              <p>We offer solutions with WordPress, MediaWiki, Drupal, Joomla, TYP03, and more customized solutions including but not limited to theme and plugin development.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/TS2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Mobile Solutions</h3>
              <p>We can provide your business a great tool to improve its effectiveness or help your app ideas to become a reality.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/TS3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h3>Information Systems Consulting.</h3>
              <p>Complete visibility into all the important processes, increase efficiencies and sales.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="assets/img/wdev140.png" alt="Generic placeholder image">
          <h2>CMS</h2>
          <p>Your content management system is the engine for pushing your message to the world. Find out how we can help ensure your content is be presented in the most consistent and comprehensive way possible.</p>
          <p><a class="btn btn-default" href="services.php#cms" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="assets/img/droid140.png" alt="Generic placeholder image">
          <h2>Mobile</h2>
          <p>We can help you with your mobile apps needs whether they are for your services or just an app idea that you want to turn into a reality.<br><br></p>
          <p><a class="btn btn-default" href="services.php#mobile" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="assets/img/sap140.png" alt="Generic placeholder image">
          <h2>ERP & CRM</h2>
          <p>We will work together with you to take your Information Systems to where they need to be to make your project take flight.<br><br></p>
          <p><a class="btn btn-default" href="services.php#ecommerce" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
      <!--
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
      -->

    </div>

    <?php include("include/footer.php") ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
  </html>
