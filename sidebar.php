<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>
<aside class="right-aside">
    <div class="post-author">
					<div class="avatar"><img src="upload/Emily2.jpg" alt=""></div>
					<div class="intro-text">I’m Emily, the lead developer at <a href="http://skillcrush.com/">Skillcrush</a> as well as an instructor in Ruby and JavaScript. This is my blog full of inspiration.</div>
	</div>
			<div class="widget">
	<?php if (is_active_sidebar('sidebar-1')): ?>

                <?php dynamic_sidebar('sidebar-1'); ?>
			<?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
<!--                    <div id="sidebar-module-1">-->
                <ol>
                    <?php query_posts('category_name=icecream'); ?>  
                    <?php while (have_posts()): the_post(); ?>
                    <li>
                        <h3><a href="<?php the_permalink;?>"><?php the_title(); ?></a></h3>
                    </li>
                    <?php endwhile; ?>
                    </div><!--widgets --!>
                </ol>
            </div>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>
</aside><!-- #secondary -->
