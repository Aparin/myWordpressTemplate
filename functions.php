<?php


/** Подключение меню **/
register_nav_menus( array(
  'main-menu' => __( 'main-menu' )
));

/** Подключение сайдбаров **/
function my_register_sidebars() {
	register_sidebar( array(
	  'name' => __( 'В шапке' ),
	  'id' => 'in_header',
	  'description' => 'Правая часть шапки.',
	  'before_widget' => '<div style = "display: block">',
	  'after_widget' => '</div>',
	  'before_title' => '<div>',
	  'after_title' => '</div>',
	));
	register_sidebar( array(
	  'name' => __( 'Перед заголовком' ),
	  'id' => 'before_headline',
	  'description' => 'Перед заголовком',
	  'before_widget' => '<div style = "display: block">',
	  'after_widget' => '</div>',
	  'before_title' => '<div>',
	  'after_title' => '</div>',
	));
	register_sidebar( array(
	  'name' => __( 'После заголовка' ),
	  'id' => 'after_headline',
	  'description' => 'После заголовка',
	  'before_widget' => '<div style = "display: block">',
	  'after_widget' => '</div>',
	  'before_title' => '<div>',
	  'after_title' => '</div>',
	));
	register_sidebar( array(
	  'name' => __( 'Низ контента' ),
	  'id' => 'bottom_content',
	  'description' => 'Низ контента',
	  'before_widget' => '<div style = "display: block">',
	  'after_widget' => '</div>',
	  'before_title' => '<div>',
	  'after_title' => '</div>',
	));
	register_sidebar( array(
		'name' => __( 'Первая колонка' ),
	  'id' => 'sidebar1',
	  'description' => 'Сайдбар 1.',
	  'before_widget' => '<div class = "sidebar">',
	  'after_widget' => '</div>',
	  'before_title' => '<div class = "widget-title">',
	  'after_title' => '</div>',
	));
	register_sidebar( array(
	  'name' => __( 'Вторая колонка' ),
	  'id' => 'sidebar2',
	  'description' => 'Сайдбар 2.',
	  'before_widget' => '<div class = "sidebar">',
	  'after_widget' => '</div>',
	  'before_title' => '<div class = "widget-title">',
	  'after_title' => '</div>',
	));
}
add_action( 'widgets_init', 'my_register_sidebars' );

?>