<?php
/**
 * Template Name: My contact page
 */

get_header();
?>
 
<?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
?>
<!-- Footer -->
<footer class="container-fluid bg-3 text-center">
  <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/whiteowl_logo_CMYK_final.png" alt="Whiteowl Logo" class="logo"></a>
  <p>&copy; 2018 All Rights Reserved<p> 
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/carousel.js"></script>
<?php wp_footer(); ?>

</body>
</html>

