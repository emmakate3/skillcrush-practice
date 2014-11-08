<article class="post-entry individual-post">
					<div class="entry-wrap">
						<header class="entry-header">
							<div class="entry-meta">
								<time class="entry-time" itemprop="datePublished"><?php the_date(); ?></time>
							</div>
        <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
	</header>
                        
    <div class="entry-summary">
	<?php the_content() ?>
    </div>
                        
	<footer class="entry-footer">
        <div class="entry-meta">
            <span class="entry-terms author">Written by <?php the_author(); ?></span> 
            <span class="entry-terms category">/ Posted in <?php $category = get_the_category();
echo $category[0]->cat_name; ?></span>
               <span class="entry-terms comments"> / <?php echo get_comments_number() ?> Comments</span>
	</footer>
</article>