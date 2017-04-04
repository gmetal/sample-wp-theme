<?php

if ( !is_active_sidebar( 'left-sidebar' ) ) {
	return;
}
?>

<aside id="left_sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'left-sidebar' ); ?>
</aside><!-- #left_sidebar-->
