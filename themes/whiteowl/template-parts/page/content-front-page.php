<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php
	/* translators: %s: Name of current post */
	the_content( sprintf(
		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		get_the_title()
	) );
?>