<?php
/**
 * The template for displaying woocommerce shop widget area
 *
 * @package Fancy Lab
 */

?>

<!--verificando se existe uma sidebar ativa-->
<?php if(is_active_sidebar('fancy-lab-sidebar-shop' )): ?>
	<?php dynamic_sidebar('fancy-lab-sidebar-shop') ?>
<?php endif; 