<?php
/**
 * Template Name: Thanks Page packages
 */
?>
<!DOCTYPE html>
<!-- <html <?php language_attributes(); ?> class="no-js no-svg"> -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!--<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<!--<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/whiteowl-landing.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" rel="stylesheet">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
<?php wp_head(); ?>
<!-- Event snippet for Get Started conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-778286214/Cr0ZCKjUg5ABEIbpjvMC'});
</script>
</head>
<body <?php body_class(); ?>>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/whiteowl_logo_CMYK_final.png" alt="Whiteowl Logo" class="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Home</a></li>
        <li><div class="purple-line"></div></li>
        <li><a href="#">Blog</a></li>
        <li><div class="purple-line"></div></li>
        <li><a href="/contact-us">Contact</a></li>
      </ul> -->
    </div>
  </div>
</nav>
<?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
?>
<!-- Footer -->
<footer class="landing-footer">
<div class="row">
  <div class="col-sm-offset-4 col-sm-4">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-4">
        <div class="outer-box">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/small-white-logo.png" alt="Whiteowl Logo"></a>         
        </div>
        <div class="purple-line"></div>
      </div>
      <div class="col-sm-6">
        <div class="outer-box">
          Travis@WhiteOwl.Agency<br/>
          1 (888) 969-7361
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>