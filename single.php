<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Fancy Lab
 */ 

get_header(); ?>
<!--modificando o conteúdo do post tirando o index e colocando p single.php-->
<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <?php 
                        //não precisa do has_post() pq já estamos dentro do post
                        while(have_posts()): the_post(); 
                            
                            get_template_part('template-parts/content', 'single');

                            //comentário abertos? ou retorna qtd de comentários que já existe no post
                            if(comments_open() || get_comments_number()):
                                //mostra um form de comentários
                                comments_template();
                            endif;
                        endwhile;
                    ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>