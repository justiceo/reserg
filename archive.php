<?php get_header(); ?>

<div class="row">
    <div class="span8">
        <h1>Archives</h1>

        <?php if ( have_posts() ) : ?>
		  <?php while ( have_posts() ) : ?>
			<?php the_post(); ?>        
            <article>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt_rss(); ?></p>
              <p><em><?php the_time('l, F jS, Y'); ?></em></p>
            </article>
            <hr>
          
		  <?php endwhile; else: ?>
          <p><?php _e('Sorry, there are no posts'); ?></p>
        <?php endif; ?>
    </div>
    <div class="span4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>