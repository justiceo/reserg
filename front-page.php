<?php get_header(); ?>
<?php get_template_part("banner", "home"); ?>

 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title_rss(); ?></h1>
        <?php the_content(); ?>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist'); ?></p>

        <?php endif; ?>


<?php get_footer(); ?>