<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="svg"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title><?php echo (isset($title) ? $title." - " : "")."MER Machine Learning" ?></title>
  <meta name="description" content="">
  <meta name="author" content="Elliot Greenwood">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

  <!-- CSS
  ================================================== -->

  <link rel="stylesheet" href="<?php echo $GLOBALS['base'] ?>/assets/stylesheets/style.css">
  <!-- TODO: Add typekit files -->

  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 7]><script src="javascript/lte-ie7.js"></script><![endif]-->

  <!-- Favicons
  ================================================== -->
  <!-- TODO: create Favicons -->
  <link rel="shortcut icon" href="<?php echo $GLOBALS['base'] ?>/assets/images/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo $GLOBALS['base'] ?>/assets/images/apple-touch-icon.png">

</head>
<!-- !Header -->
<body class="<?php echo (isset($class) ? $class : '') ?>">
  <?php echo $header_content; ?>
  <?php echo $body_content; ?>
  <?php echo $footer_content; ?>
</body>
</html>
