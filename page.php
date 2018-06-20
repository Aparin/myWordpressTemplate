<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div style = 'clear:both;'></div>
<div id = 'content'>
	<h1 class="post-title"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>