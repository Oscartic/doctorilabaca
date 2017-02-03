<?php
/**
 * Template Name: About
 * Template for about (Doctor Francisco Ilabaca)
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
            <figure>
              <figcaption>
                <header>
                  <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>
              </figcaption>
              <img src="<?php echo get_post_meta($post->ID, "retrato", true);?>" alt="Francisco Ilabaca" />
            </figure>
          <?php endwhile; else : endif; ?>
        </article>
      </section>
      <?php get_sidebar(); ?>
    </section>
    <?php get_footer(); ?>