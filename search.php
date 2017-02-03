<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */

 get_header(); ?>
    <section id="main">
      <span><a href="http://www.doctorilabaca.cl">Inicio</a> <img src="http://www.doctorilabaca.cl/wp-content/themes/doctor-ilabaca/images/arrow.png" alt=">"/><?php the_title(); ?></span>
      <section id="main_cont_left">
        <article class="main_article">
            <h2 style="text-align:center; color:#F93; letter-spacing:-.05em;">Resultados de tu búsqueda</h2>
            <!--Loop page-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
            <div style="border-bottom:1px dotted #DADADA; border-top:1px solid #FBFBFB; margin:2px 0;">                  
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_excerpt(); ?>
            </div>
            <?php endwhile; else :?>
            <h3>No se encontró ningún resultado</h3>
            <p>Por favor revise las palabras ingresadas en la búsqueda o 
            también puede consular en el mapa del sitio. </p>
      <?php endif; ?>
        </article>
      </section>
      <?php get_sidebar(); ?>
    </section>
    <?php get_footer(); ?>