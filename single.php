<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

	<div class="container wrap">
			<div class="main-content">
            <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;?>
            <div id=”navigation”>
                <?php previous_post_link(); ?>
                <?php next_post_link(); ?>
            </div><!--next nav -->
		</div><!-- #content -->
	</div><!-- #main-content -->

<?php
get_sidebar();

get_footer();
