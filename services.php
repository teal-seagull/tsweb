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

  <body class="body-ts">
    
    <?php 
    $current_page = "services";
    include("include/menu.php"); 
   ?>

    <div class="container marketing">

        <!-- START THE FEATURETTES -->
        <a id="sap"></a>
        <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">SAP <br/><span class="text-muted">The best run companies run SAP.</span></h2>
              <p class="lead">Enterprise information systems, such as Enterprise Resource Planning (ERP) and Customer Relationship Management (CRM), are powerful, complex pieces of software that require skillful customization, implementation and use in order for you to maximize your returns. Let us walk with you through the entire process, from truly understanding how your business operates to customizing (and extending, if necessary) your system to providing support to your users. We are committed to helping you maximize your investment in your business' information systems. </p>
          </div>
          <div class="col-md-5">
              <img class="featurette-image img-responsive" src="assets/img/sap-500.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <a id="mobile"></a>
        <div class="row featurette">
            <div class="col-md-5">
              <img class="featurette-image img-responsive" src="assets/img/android-500.png" alt="Generic placeholder image">
          </div>
          <div class="col-md-7">
              <h2 class="featurette-heading">Android Development <br/><span class="text-muted">Speed up your business.</span></h2>
              <p class="lead">Growing businesses need to speed up their processes and workflows, specially the ones that take place on the field. Mobile applications have helped to improve efficiency by providing real time information wherever your location is. If you are looking for a custom tool that helps your business manage information effectively, our team is able to identify your needs and help you deliver the information that will make the difference. For end customers, our team will soon offer iOS developtment as well. Some of our application features:</p>
              <p class="lead">
                <ul>
                    <li>Business applications that enhance workflows</li>
                    <li>Facebook integration</li>
                    <li>Geolocation solutions. ¿Which of my team members is the most suitable to get the work done based on his location?</li>
                </ul>
              </p>
          </div>
        </div>

        <hr class="featurette-divider">

        <a id="ecommerce"></a>
        <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">E-Commerce <br/><span class="text-muted">Empowering your online business.</span></h2>
              <p class="lead">We are passionate about creating world-class, vibrant digital spaces where you can effectively market your products and services as well as actively engage your customers through unique user experiences. From stunning theme/catalog designs to analytics strategy to total backend integration, we are committed to coming alongside your business and making our creativity a vital part of your engine of success.</p>
          </div>
          <div class="col-md-5">
              <img class="featurette-image img-responsive" src="assets/img/ecommerce-500.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <a id="cms"></a>
        <div class="row featurette">
            <div class="col-md-5">
              <img class="featurette-image img-responsive" src="assets/img/cms-500.png" alt="Generic placeholder image">
          </div>
          <div class="col-md-7">
              <h4 class="featurette-heading">Content Management Systems <br/><span class="text-muted">Centralized and shared content.</span></h4>
              <p class="lead">Content management systems are at the cutting edge of web presence today, allowing for a truly rich way to push information at high velocity in various directions. However, there are many factors to consider as well as expertise in various technologies needed to implement a truly appropriate CMS system. We bring the knowledge, expertise and commitment in order to produce an engaging, easily-administered custom CMS for your business or organization. Because your content deserves it.</p>
          </div>
        </div>

    </div> <!-- /container -->

    <?php include("include/footer.php"); ?>

    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>