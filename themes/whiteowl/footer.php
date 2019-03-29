<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php
include("inc/testimonial.php");
include("inc/contact-section.php");
?>
<!-- Footer -->
<footer class="container-fluid bg-3 text-center">
  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/whiteowl_logo_CMYK_final.png" alt="Whiteowl Logo" class="logo"></a>
  <p>&copy; 2018 All Rights Reserved<p> 
</footer>
<script async src="<?php echo get_template_directory_uri(); ?>/js/carousel.js"></script>
<?php wp_footer(); ?>

</body>
</html>
