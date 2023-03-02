<?php
/**
 * The template part for displaying content search
 *
 * @package Fancy Lab
 */
?>

<article <?php post_class(); ?>>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<!--chama imagem destacada do post-->
	<div class="post-thumbnail">
		<?php 
			if(has_post_thumbnail()):

				the_post_thumbnail('fancy-lab-blog', array('class'=>'img-fluid'));

			endif;
		?>
	</div>
	<div class="meta">
		<br />
		<p>
			<?php esc_html_e('Publish by', 'fancy-lab'); ?> <?php the_author_posts_link(); ?> <?php esc_html_e('on', 'fancy-lab'); ?> <?php echo esc_html(get_the_date()); ?><br />

			<?php if(has_category()): ?>

				<!--função que tras uma lista de categorias-->
				<?php esc_html_e('Categories', 'fancy-lab'); ?>: <span><?php the_category(' | '); ?></span><br />

			<?php endif; ?>

			<?php if(has_tag()): ?>

				<!--o espaço entre as aspas simples é o separador de categorias-->
				<?php esc_html_e('Tags', 'fancy-lab'); ?>: <span><?php the_tags('', ', '); ?></span><br />

			<?php endif; ?>
		</p>

	</div>

	<!--the_excerpt() mostra as primeiras 55 palavras da descrição do post-->
	<div><?php the_excerpt(); ?></div>

	<br />
</article>