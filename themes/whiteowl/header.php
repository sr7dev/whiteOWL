<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
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
<link href="<?php echo get_template_directory_uri(); ?>/css/whiteowl.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" rel="stylesheet">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122078412-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122078412-1');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 778286214 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-778286214"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-778286214');
</script>
<!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59L3J38');</script>
<!-- End Google Tag Manager -->
<script async src="//44625.tctm.co/t.js"></script>
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
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">About Us</a></li> -->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="glyphicon glyphicon-menu-down"></a>
          <ul class="dropdown-menu">
            <li><a href="/content-writing">Content Writing</a></li>
            <li><a href="/digital-marketing">Digital Marketing</a></li>
            <li><a href="/reputation-management">Reputation Management</a></li>
            <li><a href="/sem">SEM</a></li>
            <li><a href="/seo">SEO</a></li>
            <li><a href="/smm">SMM</a></li>
            <li><a href="/web-affiliate">Affiliate Marketing</a></li>
            <li><a href="/web-conversion">Conversion Rate Optimization</a></li>
            <li><a href="/web-design">Web Design</a></li>
            <li><a href="/web-development">Web Development</a></li>
            <li><a href="/white-label-marketing">White Label Marketing</a></li>
			<li><a href="/whistler-digital-marketing">Whistler Digital Marketing Agency</a></li>
          </ul>
        </li>
        <li><a href="/contact-us">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
