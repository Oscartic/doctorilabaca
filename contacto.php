<?php
/**
 * Themplate name: Contacto
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */

get_header(); ?>
    <section id="main">
      <span><a href="http://www.doctorilabaca.cl">Inicio</a> <img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt=">"/><?php the_title(); ?></span>
      <section id="main_cont_left">
        <article class="main_article">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                    
            <header>
              <h1><?php the_title(); ?></h1>
            </header>
            <div id="contentForm">
              <?php the_content(); ?>
            </div>
            <?php endwhile; else :?> 
            <h3>Página no disponible</h3>
            <?php endif; ?>
        </article>
      </section>
      <?php get_sidebar(); ?>
    </section>
    <?php get_footer(); ?>