<?php
/**
 * Template Name: Whiteowl Reviews
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
<link href="<?php echo get_template_directory_uri(); ?>/css/whiteowl-reviews.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" rel="stylesheet">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Ads: 778286214 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-778286214"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-778286214');
</script>
<script async src="//44625.tctm.co/t.js"></script>
</head>
<body <?php body_class(); ?>>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="row">
    <div class="col-sm-offset-1 col-sm-10">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-reviews.png" alt="Whiteowl Logo" class="logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="/">Home</a></li>
        <li><div class="green-line"></div></li>
        <li><a href="#">Blog</a></li>
        <li><div class="green-line"></div></li>
        <li><a href="/contact-us">Contact</a></li>-->
        </ul>
      </div>
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
	<div class="col-sm-offset-3 col-sm-6">
		<div class="row">
			<div class="col-sm-3">
				<div class="outer-box">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/small-white-logo.png" alt="Whiteowl Logo"></a>					
				</div>
				<div class="green-line"></div>
			</div>
			<div class="col-sm-6">
				<div class="outer-box">
					3712 Garibaldi Heights<br/>BC, V0N 1T0
				</div>
				<div class="green-line"></div>
			</div>
			<div class="col-sm-3">
				<div class="outer-box">
					info@whiteowl.agency<br/>1(888)969-7361
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>