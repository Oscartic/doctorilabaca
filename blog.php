<?php
/**
 * Template for all publications (Written by Dr. Ilabaca)
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */
 get_header(); ?>
    <section id="main">
      <span><a href="http://www.doctorilabaca.cl">Inicio</a> <img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt=">"/><?php the_title(); ?></span>
      <section id="main_cont_left">
        <article class="post">
        <header>
            <h2>Artículos recientes</h2>
        </header>
          <?php 
            $temp_post = $post; 
            $args_home = array('category_name' => 'Articulos', 
                                            'post_per_page' => 5);
            $category_posts = new WP_Query($args_home);
            if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                <span class="data_post"><?php the_time('F jS, Y') ?></span>
                <?php the_excerpt (" + Continuar leyendo... " . the_title('', '', false)); ?>
            <?php endwhile; ?>
              <div class="meta">
                  <p>Escrito por: <?php the_author() ?>, categoria(s): <?php the_category(', ') ?></p>
              </div>
              <?php next_posts_link('&laquo; Entradas Previas') ?>
              <?php previous_posts_link('Entradas Anteriores &raquo;') ?>
            <?php else: ?>
              <div class="post-vacio">
                <h3>¡Contenido en edición!</h3>
                <strong>categoría sin asignar</strong>
                <p>Pronto estará disponible este contenido</p>
              </div>
          <?php endif;?>
        </article>
      </section>
      <?php get_sidebar(); ?>
    </section>
    <?php get_footer(); ?>
