<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Style Guide Boilerplate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Theme and Custom styles -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <div class="logo">
        <div class="logo logo-kt-logotype"></div>
        <div class="logo logo-kt-symbol"></div>
      </div>
      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <a class="sg-btn--top" href="#top">Back to Top</a>
        <div class="section section-intro">
          <div>
            <h2>What is a Design System?</h2>
            A tool to promote visual consistency across our products, unify designers and front-end engineers, as well as speed up workflow. A source of truth/reference and a modular, systematic approach to building software.
            <a href="https://uxdesign.cc/everything-you-need-to-know-about-design-systems-54b109851969" target="_blank">[External Window Icon] What is a Design System?</a>
          </div>
          <div>
            <h2>How to use</h2>
            <a href="https://docs.google.com/document/d/1u8VTsBls06bXzYfSzGh7mYYBWnz906uxGTy-3UUb_Nw/edit?usp=sharing" target="_blank">[External Window Icon] How To Use</a>
          </div>
        </div>
        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>
