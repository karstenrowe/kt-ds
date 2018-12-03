<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Style Guide Boilerplate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <!-- <h1 class="sg-logo">
        <span class="sg-logo-initials">KT</span>
        <span class="sg-logo-full">KT</span> <em>Design System</em>
      </h1> -->
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 id="sg-markup-01-introduction" class="sg-h2 sg-title">KT Design System</h2>
      <p>A tool to promote visual consistency across our products, unify designers and front-end engineers, as well as speed up workflow. A source of truth/reference and a modular, systematic approach to building software.</p>
      <ul class="sg-nav-group">
        <li><a href="https://uxdesign.cc/everything-you-need-to-know-about-design-systems-54b109851969" target="_blank">[External Window Icon] What is a Design System?</a></li>
        <li><a href="https://docs.google.com/document/d/1u8VTsBls06bXzYfSzGh7mYYBWnz906uxGTy-3UUb_Nw/edit?usp=sharing" target="_blank">[External Window Icon] How To Use</a></li>
      </ul>
      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>
