<?php get_header(); ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1>Такой страницы не существует!</h1>
      <img src="<?php bloginfo('template_url') ?>/images/404.jpg" />
      <?php endwhile; ?>

      <?php else: ?>

      <?php endif; ?>


  <?php get_sidebar(); ?>

<?php get_footer(); ?>