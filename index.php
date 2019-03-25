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
          <h1>Welcome to Spray Shop</h1>
          <p>What is Spray Shop? A source of truth and reference—a modular, systematic approach to designing and building software. In short a design system.</p>
          <div class="button-row">
            <button type="button" name="button" class="button button-size-lg">Watch Video</button>
            <button type="button" name="button" class="button button-size-lg">Get Started</button>
          </div>
          <a href="#">Provide Feedback</a>
        </div>
      </div>
    </div>
    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <!-- <div class="sg-sub-section section-intro">
          <div class="col col-4">
            <div class="container">
              <h2>What is a Design System?</h2>
              A source of truth and reference—a modular, systematic approach to designing and building software.
            </div>
            <div class="container">
              <h2>Why do we need one?</h2>
              A tool to promote visual consistency across our products, unify designers and front-end engineers, as well as speed up workflow.
            </div>
            <div class="container">
              <h2>How do I use it?</h2>
              Before you start you should know the house rules. We created a simple <a href="https://docs.google.com/document/d/1u8VTsBls06bXzYfSzGh7mYYBWnz906uxGTy-3UUb_Nw/edit?usp=sharing" target="_blank">how to use document</a> to help you get up and running.
            </div>
            <div class="container">
              <h2>How do I contribute?</h2>
            The Design System is a company-wide initiative and we'd love you to be involved. Want to learn more? <a href = "mailto:karsten.rowe@keeptruckin.com?Subject=Design%20System" target="_top">Email Karsten</a>.
            </div>
          </div>
        </div> -->
        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>
