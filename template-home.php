<?php 

/*
Template Name: Home Page
*/

get_header();
?>
		<div class="content-area">
			<main>
				<section class="slider">
					<div class="flexslider">
					  <ul class="slides">
					  	<?php  

					  	// Getting data from Customizer to display the Slider section
					  	for ($i=1; $i < 4; $i++) { 
					  		$slider_page[$i]				= get_theme_mod( 'set_slider_page' . $i );
					  		$slider_button_text[$i]			= get_theme_mod( 'set_slider_button_text' . $i );
					  		$slider_button_url[$i]			= get_theme_mod( 'set_slider_button_url' . $i );
					  	}

					  	$args = array(
					  		'post_type'			=> 'page',
					  		'posts_per_page'	=> 3,
					  		'post__in'			=> $slider_page,
					  		'orderby'			=> 'post__in',
					  	);

					  	$slider_loop = new WP_Query( $args );

					  	$j = 1;

					  	if( $slider_loop->have_posts() ):
					  		while( $slider_loop->have_posts() ): 
					  			$slider_loop->the_post();

					  	?>
					    <li>
					      <?php the_post_thumbnail( 'fancy-lab-slider', array( 'class' => 'img-fluid' ) ); ?>
					      <div class="container">
					      	<div class="slider-details-container">
					      		<div class="slider-title">
					      			<h1><?php the_title(); ?></h1>
					      		</div>
					      		<div class="slider-description">
					      			<div class="subtitle"><?php the_content(); ?></div>
					      			<a href="<?php echo esc_url($slider_button_url[$j]); ?>" class="link">
					      			<?php echo esc_html($slider_button_text[$j]); ?></a>
					      		</div>
					      	</div>
					      </div> 	
					    </li>
					    <?php  
					    	$j++;
					    	endwhile;
					    	wp_reset_postdata();
					    endif;
					    ?>
					  </ul>
					</div>
				</section>

				<?php if (class_exists('WooCommerce')): ?>

					<section class="popular-products">
						<?php 
							$popular_limit	= get_theme_mod('set_popular_max_num', 4);
							$popular_col	= get_theme_mod('set_popular_max_col', 4);
							$arrivals_limit	= get_theme_mod('set_new_arrivals_max_num', 4);
							$arrivals_col	= get_theme_mod('set_new_arrivals_max_col', 4);
						?>
						<div class="container">
							<div class="section-title">
								<!--exceção aqui no escapamento-->
								<h2><?php echo esc_html(get_theme_mod( 'set_popular_title', __('Popular products', 'fancy-lab'))); ?></h2>

							</div>
							
							<!--o shortcod abaixo não funciona em php puro deve ter a função do shortcod-->
							<?php echo do_shortcode('[products limit="'. esc_attr($popular_limit) . '" columns="' . esc_attr($popular_col) .'" orderby="popularity"]'); ?>

						</div>
					</section>

					<section class="new-arrivals">
						<div class="container">
							<div class="section-title">

								<h2><?php echo esc_html(get_theme_mod( 'set_new_arrivals_title', __('New Arrivals', 'fancy-lab') )); ?></h2>

							</div>

							<!--o shortcod abaixo não funciona em php puro deve ter a função do shortcod-->
							<?php echo do_shortcode('[products limit="'. esc_attr($arrivals_limit) .'" columns="' . esc_attr($arrivals_col) .'" orderby="date"]'); ?>

						</div>

					</section>
					<?php
						//info do BD imagem, titulo do produto, descrição, preços, id, se a seção vai aparecer
						//$showdeal pega o valor da setting set_deal_show
						//o zero impede de aparecer uma seção vazia quando o user instalar o tema
						$showdeal			= get_theme_mod( 'set_deal_show', 0 );
						//guarda o id do produto em destaque
						$deal 				= get_theme_mod( 'set_deal' );
						//busca o simbolo da moeda
						$currency			= get_woocommerce_currency_symbol();
						//preço normal do produto
						//get_post_meta() pega qualquer valor de uma tabela do wordpres chamada wp_postmeta
						//wp_post_meta guarda valores adicionai dos posts
						$regular			= get_post_meta( $deal, '_regular_price', true );
						//valor com desconto
						$sale 				= get_post_meta( $deal, '_sale_price', true );

						//se o checkbox estiver marcado E se o produto tiver um valor promocioal a seção abaixo vai ser mostrada.
						if( $showdeal == 1 && ( !empty( $deal ) ) ):
							//variavel pra calcular o valor de desconto em porcentagem (Ex: 10% de desconto)
							//a função absint evitar mostrar numeros negativos e mostra numeros inteiros
							$discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );

					?>
					<section class="deal-of-the-week">
						<div class="container">

							<div class="section-title">

								<h2><?php echo esc_html(get_theme_mod( 'set_deal_title', __('Deal of the Week', 'fancy-lab'))); ?></h2>

							</div>

							<div class="row d-flex align-items-center">

								<!--div pra colocar a img do produto-->
								<div class="deal-mg col-md-6 ml-auto col-12 text-center">
									<!-- get_the_post_thumbnail() funciona/usar fora do loop -->
									<?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid')); ?>
								</div>

								<!--div pra colocar dados descritivos do produto-->
								<div class="deal-desc col-md-4 mr-auto col-12 text-center">
									<!--esse trecho so vai aparecer se o valor da promoção n estiver vazio-->
									<?php if(!empty($sale)): ?>
										<!-- Etiqueta de desconto -->
										<span class="discount">
											<?php echo esc_html($discount_percentage) . esc_html__('% OFF', 'fancy-lab'); ?>
										</span>
									<?php endif; ?>

									<h3><!--título do produto com link pra página do produto-->
										<a href="<?php echo esc_url(get_permalink($deal)); ?>"><?php echo esc_html(get_the_title($deal)); ?></a>
									</h3>

									<!--Descrição do produto-->
									<p><?php echo esc_html(get_the_excerpt($deal)); ?></p>
									<div class="prices">
										<span class="regular">
											<?php 
												echo esc_html($currency);
												echo esc_html($regular);
											?>
										</span>
										<?php if(!empty($sale)): ?>

											<span class="sale">
												<?php 
													echo esc_html($currency);
													echo esc_html($sale);
												?>
											</span>

										<?php endif; ?>
									</div>

									<a href="<?php echo esc_url('?add-to-cart=' . $deal); ?>" class="add-to-cart"><?php esc_html_e('Add to Cart', 'fancy-lab'); ?></a>
								</div>
							</div>
						</div>
					</section>

					<?php endif; ?><!-- End $showdeal/$deal verification -->

				<?php endif ?>

				<!---------------------------------------------------------------------------------------------->
				<!-- End class_exists for WooCommerce -->
				<section class="lab-blog">
					<div class="container">
						<div class="section-title">
							<h2><?php echo esc_html(get_theme_mod( 'set_blog_title', __('News From Our Blog', 'fancy-lab'))); ?></h2>
						</div>
						<div class="row">
							<?php 
							//criando loop customizado

							$args = array(
								'post_type'				=> 'post',
								'post_per_pagina'		=> 2,
							);

							$blog_posts = new WP_Query($args);

								if( $blog_posts->have_posts() ):
									while( $blog_posts->have_posts() ): $blog_posts->the_post();
									?>
										<article class="col-12 col-md-6">
											<h3>
												<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
											</h3>
											<a href="<?php the_permalink();?>">
												<?php 
												if(has_post_thumbnail()):
													the_post_thumbnail('fancy-lab-blog', array('class'=>'img-fluid'));
												endif; 
											?>
											</a>
											<div class="excerpt"><?php the_excerpt(); ?></div>
										</article>
									<?php
									endwhile;
									wp_reset_postdata();
								else: 
									?>
									<p><?php esc_html_e('Nothing to display.', 'fancy-lab'); ?></p>
									<?php
								endif;
							?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>