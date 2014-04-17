<!-- HERE COMES OUR UGLY CODING. SHOULD BE TEMPORARY SINCE WE HAVE NO FRAMEWORK YET, JUST PURE PHP -->
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">TealSeagull</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo $current_page == "index" ? "active" : "" ?>"><a href="index.php">Home</a></li>
            <li class="<?php echo $current_page == "about" ? "active" : "" ?>"><a href="about.php">About</a></li>
            <li class="dropdown <?php echo $current_page == "services" ? "active" : "" ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cms.php">Content Management Solutions</a></li>
                <li class="divider"></li>
                <li><a href="ecommerce.php">E-Commerce Solutions</a></li>
                <li class="divider"></li>
                <li><a href="sap.php">Information Systems Consulting</a></li>
                <li class="divider"></li>
                <li><a href="mobile.php">Mobile Solutions</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>