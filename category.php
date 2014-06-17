<?php get_header(); ?>
<?php get_template_part("banner", "category"); ?>


<div class="row">
    
       
        <?php if ( have_posts() ) : ?>
		  <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>  
                 
            <article class="article-post<?php if(!((1 + $wp_query->current_post) % 2)) echo ' article-post-right' ?>">
                <a class="cat-post" href="<?php the_permalink(); ?>">
                <div class="bottom_outside">
                    <?php echo get_the_post_thumbnail(); ?>
                    <div class="bottom_inside">
                        <h2><?php the_title_rss(); ?></h2>
                    </div>
                </div>
                </a>
            </article>
                 
            
          
		  <?php endwhile; else: ?>
          <p><?php _e('Sorry, there are no posts'); ?></p>
        <?php endif; ?>

        
    
</div>

<?php get_footer(); ?>