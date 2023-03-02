<?php
/**
 * The template part for displaying content page
 *
 * @package Fancy Lab
 */
?>

<article class="col">

	<h1><?php the_title(); ?></h1>

	<div><?php the_content(); ?></div>

	<?php 
		//comentário abertos? ou retorna qtd de comentários que já existe no post
		if(comments_open() || get_comments_number()):

            //mostra um form de comentários
            comments_template();

		endif;
	?>
	
</article>