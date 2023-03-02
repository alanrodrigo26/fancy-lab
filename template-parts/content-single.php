<?php
/**
 * The template part for displaying content sigle
 *
 * @package Fancy Lab
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <header>

        <h1><?php the_title(); ?></h1>

        <div class="meta">
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
        <div class="post-thumbnail">
            <?php 
                if(has_post_thumbnail()):
                    the_post_thumbnail('fancy-lab-blog', array('class'=>'img-fluid'));
                endif;
            ?>
        </div> 

    </header>

    <div class="content">

        <?php 
            wp_link_pages(array(
                'before'    => '<p class="inner-pagination">' . esc_html__('Pages', 'fancy-lab'),
                'after'     => '</p>',
            ));
        ?>

        <?php the_content(); ?>

    </div>
</article>