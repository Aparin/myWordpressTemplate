<?php get_header(); ?>
<div style = 'clear:both;'></div>
<div id = 'content'>
	<?php if ( is_active_sidebar( 'before_headline' ) ) : ?>
	<?php dynamic_sidebar( 'before_headline' ); ?>
	<?php endif; ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php global $post;	setup_postdata( $post );  $parts = get_extended( $post->post_content ); ?>
			<h2><?php the_title(); ?></h2>
			<?php echo do_shortcode($parts['main']); // часть до тега more ?>
			<p style = 'text-align:right; padding-right:10px;'><a style = 'font-weight: bold;' href="<?php the_permalink(); ?>">Читать далее</a></p>
		<?php endwhile; ?>
		<?php else: ?>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'bottom_content' ) ) : ?>
	<?php dynamic_sidebar( 'bottom_content' ); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>