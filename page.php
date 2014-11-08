<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="blog-page">
	<div class="container wrap">
			<div class="main-content">

			<?php
				// Start the Loop.
				while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

		</div><!-- #content -->
        <?php get_sidebar(); ?>
	</div><!-- #primary -->
</section><!-- #main-content -->

<?php get_footer(); ?>
