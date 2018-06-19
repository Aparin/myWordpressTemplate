<?php


/** Подключение меню **/
register_nav_menus( array(
  'main-menu' => __( 'main-menu' )
));

/** Подключение сайдбаров **/
function my_register_sidebars() {
	register_sidebar( array(
	  'name' => __( 'В шапке' ),
	  'id' => 'inHeader',
	  'description' => 'Правая часть шапки.',
	  'before_widget' => '<div>',
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