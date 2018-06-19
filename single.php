<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class="post-title"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php the_category();?>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>