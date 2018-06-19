<?php get_header(); ?>
<h1><?php single_cat_title('Рубрика: ');?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<div><?php the_excerpt(); ?></div> <!-- текст статьи -->
<div><a href="<?php the_permalink(); ?>">Читать далее</a></div>
   
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>