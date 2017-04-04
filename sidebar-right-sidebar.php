<?php

if ( !is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<aside id="right_sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</aside><!-- #right_sidebar-->
