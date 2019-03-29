<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title" style="text-align: center;color: #222;font-size: 6em;">404</h1>
					<p style="text-align: center;color: #222;font-size: 4em;line-height: 1em;">Page Not Found</p>
				</header><!-- .page-header -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<!-- Footer -->
<footer class="container-fluid bg-3 text-center">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/whiteowl_logo_CMYK_final.png" alt="Whiteowl Logo" class="logo"></a>
  <p>&copy; 2018 All Rights Reserved<p> 
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/carousel.js"></script>
<?php wp_footer(); ?>
</body>
</html>