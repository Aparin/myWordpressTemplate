<?php get_header(); ?>
<div style = 'clear:both;'></div>
<div id = 'content'>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php global $post;	setup_postdata( $post );  $parts = get_extended( $post->post_content ); ?>
			<h2><?php the_title(); ?></h2>
			<?php echo $parts['main']; // часть до тега more ?> 
			<p style = 'text-align:right; padding-right:10px;'><a style = 'font-weight: bold;' href="<?php the_permalink(); ?>">Читать далее</a></p>
		<?php endwhile; ?>
		<?php else: ?>
			<h1 class="post-title">По запросу ни чего не найдено!</h1>
			<h4 class="post-text">Попробуйте еще раз с другими ключевыми словами.</h4>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>