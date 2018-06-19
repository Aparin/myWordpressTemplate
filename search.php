<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div><?php the_excerpt(); ?></div>
<div class="readmore"><a href="<?php the_permalink(); ?>">Читать далее</a></div>

   
<?php endwhile; ?>
<?php else: ?>
<h1 class="post-title">По запросу ни чего не найдено!</h1>
<h4 class="post-text">Попробуйте еще раз с другими ключевыми словами.</h4>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>