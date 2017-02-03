<?php
/**
 * The main template file Category
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */
 get_header(); ?>
    <section id="main">
      <span><a href="http://www.doctorilabaca.cl">Inicio</a> <img src="<?php bloginfo('template_url'); ?>/img/arrow.png" alt=">"/><?php the_category(' | '); ?></span>
      <section id="main_cont_left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="extract">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
          </div>
        <?php endwhile; else : endif; ?>
      </section>
      <?php get_sidebar(); ?>
    </section>
    <?php get_footer(); ?>
