<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>KeepTruckin Design System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" sizes="16x16 32x32 64x64" href="images/favicon.ico" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600|Roboto:300,400,400i,700" rel="stylesheet">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- Theme and Custom styles -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body id="top">

  <div class="sg-header" role="banner">
    <div class="sg-container">
      <div class="sg-nav-toggle button button-size-md button-subtle"></div>
      <a class="logo logo-kt" href="#top"></a>
      <div class="container-search">
        <input id="sg-search" class="input input-icon input-search" type="search" placeholder="Search coming soon…">
      </div>
    </div>
    <div id="nav" class="sg-sidebar" role="navigation">
      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div class="section-hero">
      <div class="container">
        <div class="content-wrapper">
          <h1>Welcome to SprayShop</h1>
          <p class="lead">What's SprayShop? A source of truth and reference for our product design language. It's a modular, systematic approach to designing and building software for KeepTruckin.</p>
          <div class="button-row">
            <a class="button button-size-lg" href="https://www.useloom.com/share/ad8fd6553e2c46dbb7a3f63a2a674de6" target="_blank">Watch Video</a>
            <a class="button button-size-lg" href="#main">Get Started</a>
          </div>
          <p>We want to hear from you! <a href="https://goo.gl/forms/6YjWZOspfgfXz90r2" target="_blank">Send us feedback</a></p>
        </div>
      </div>
    </div>
    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
    <div class="section-hero footer-cta">
      <div class="container">
        <div class="content-wrapper">
          <h1>Thanks for reading</h1>
          <p class="lead">A company-wide initiative that we'd love you to be involved in.</p>
          <div class="button-row">
            <a class="button button-size-lg" href="https://k2labs.atlassian.net/wiki/spaces/UXD/pages/734167675/Design+System+SprayShop" target="_blank">Learn More</a>
            <a class="button button-size-lg" href="https://goo.gl/forms/6YjWZOspfgfXz90r2" target="_blank">Send Us Feedback</a>
          </div>
        </div>
      </div>
    </div>
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>
