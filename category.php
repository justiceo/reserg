<?php get_header(); ?>
<?php get_template_part("banner", "category"); ?>


<div class="row">
    <div class="span12 category-listing">

        <?php if ( have_posts() ) : ?>
		  <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>        
            <article>
                <?php echo get_the_post_thumbnail(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><em><?php the_time('l, F jS, Y'); ?></em></p>                
                <p><?php the_excerpt_rss(); ?></p>
            </article>
            
          
		  <?php endwhile; else: ?>
          <p><?php _e('Sorry, there are no posts'); ?></p>
        <?php endif; ?>


    </div>
</div>

<?php get_footer(); ?>