<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Theme_DrIlabaca
 */

get_header(); ?>
    <section id="main">
      <span><a href="http://www.doctorilabaca.cl">Inicio</a> <img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt=">"/><?php the_title(); ?></span>
      <section id="main_cont_left">
        <article class="main_article">
            <h2 style="text-align:center; color:#F93; letter-spacing:-.05em;"><?php _e( 'Not Found', 'www.doctorilabaca.cl' ); ?></h2>
            <hr />
            <strong><p><?php _e( 'Lo sentimos, pero la página solicitada no se pudo encontrar. La barra de búsqueda le proporciona resultados especificos de su consulta.', 'www.doctorilabaca.cl' ); ?></strong>
        </article>
      </section>
      <?php get_sidebar(); ?>
    </section>
    <?php get_footer(); ?>