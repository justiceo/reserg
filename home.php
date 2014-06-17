<?php get_header(); ?>

<div class="row">
    <div class="span8">
        <h1>News</h1>
        <?php
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<?php the_date(); ?>
        <?php echo get_the_post_thumbnail(); ?>
		<br />
		<?php the_title(); ?>   
		<?php the_excerpt(); ?>
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>
            
    </div>
    <div class="span4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>