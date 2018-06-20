<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_get_document_title(); ?></title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<!--	<script acync src="/wp-content/themes/myWordpressTemplate/script.js"></script>  -->
	<?php wp_head(); ?>
</head>
<body>	

<div id="logo">
	<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/logo.png" style='padding:10px; float:left;'></a>
	<div class="headline">Volkswagen Jetta</div>
</div>
	<div id="header">	
		<?php if ( is_active_sidebar( 'inheader' ) ) : ?>
		<?php dynamic_sidebar( 'inheader' ); ?>
		<?php endif; ?>
		<script>
		//document.writeln(document.body.clientWidth);</script>
	</div>
<div style = 'clear:both;'></div>

<!-- <a id='toggleMenu'>&#9776;</a> -->
<a id="toggleMenu" onclick="toggle();">&#9776;</a>
<script>
	var flag = 0;
	function toggle() {
		if (flag == 0) {document.getElementById('menu').style.display='block'; flag = 1; }
		else {document.getElementById('menu').style.display='none'; flag = 0; }
	}
</script>
<div class = "menu" id = "menu">
<?php
$args = array(
  'theme_location' => 'main-menu',
  'menu' => 'main-menu',
  'container' => 'nav',
  'container_class' => 'menu-{menu-slug}-container',
  'container_id' => 'main-menu',
  'menu_class' => 'menu',
  'menu_id' => 'main-menu',
  'echo' => true,
  'fallback_cb' => '__return_empty_string',
  'before' => '',
  'after' => '',
  'link_before' => '',
  'link_after' => '',
  'items_wrap' => '<ul class = "menu">%3$s</ul>', 
  'depth' => 0,
  'walker' => ''
);
// wp_nav_menu( $args );
// получаем а не выводим меню
$menu = wp_nav_menu( array( 'echo' => 0, ) );
// добавляем ко всем пунктам класс menu-item
$menu = str_replace('class="menu-item', 'class="menu-item menu', $menu );
// выводим на экран
echo $menu;
?> 
</div>
<script>
	/* фиксированное меню
	if (document.body.clientWidth > 700) {
	var el = document.getElementById('menu');
	} else {
	var el = document.getElementById('toggleMenu');
	}
	scrollFloat.init(el);
	*/
</script>