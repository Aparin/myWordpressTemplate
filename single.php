<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div style = 'clear:both;'></div>
<div id = 'content'>
	<?php if ( is_active_sidebar( 'before_headline' ) ) : ?>
	<?php dynamic_sidebar( 'before_headline' ); ?>
	<?php endif; ?>
	
	<h1 class="post-title"><?php the_title(); ?></h1>
		<?php if ( is_active_sidebar( 'after_headline' ) ) : ?>
		<?php dynamic_sidebar( 'after_headline' ); ?>
		<?php endif; ?>
	<?php the_content(); ?>
		<?php if ( is_active_sidebar( 'bottom_content' ) ) : ?>
		<?php dynamic_sidebar( 'bottom_content' ); ?>
		<?php endif; ?>
	<div class="comments"><?php comments_template(); ?></div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>