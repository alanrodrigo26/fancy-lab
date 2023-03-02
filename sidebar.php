<?php
/**
 * The template for displaying widget area
 *
 * @package Fancy Lab
 */

?>

<!--verificando se existe uma sidebar ativa-->
<?php if(is_active_sidebar('fancy-lab-sidebar-1' )): ?>
    <!--chama o conteúdo da área de widget-->
    <aside class="col-lg-3 col-md-4 col-12 h-100">
        <?php dynamic_sidebar('fancy-lab-sidebar-1') ?>
    </aside>
<?php endif; 