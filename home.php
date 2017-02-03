<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */
get_header(); ?>
	<?php include(TEMPLATEPATH. '/banner.php'); ?>
    <div id="bar">
      <h1>Especialista en Cirugía de Columna Vertebral</h1>
    </div>
    <section id="main">
    	<?php 
		$temp_post = $post; 
		$args_home = array('category_name' => 'Home-Bienvenidos', 'post_per_page' => 1);
		$category_posts = new WP_Query($args_home);
		if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
			<article class="inibox_left">
				<h2><?php the_title();?></h2>
				<?php the_content(); ?>
			</article>
			<?php endwhile; else: ?>
				<article class="inibox_left">
					<div class="post-vacio">
						<h3>¡Contenido en edición!</h3>
						<strong>categoría sin asignar</strong>
						<p>Pronto estará disponible este contenido</p>
					</div>
				</article>
			<?php endif;?>
			<?php 
				$temp_post = $post; 
				$args_home = array('category_name' => 'Home-Servicios', 'post_per_page' => 1);
				$category_posts = new WP_Query($args_home);
				if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
				<article class="inibox_right">
					<h2><?php the_title();?></h2>
					<?php the_content(); ?>
				</article>
			<?php endwhile; else: ?>
				<article class="inibox_right">
					<div class="post-vacio">
						<h3>¡Contenido en edición!</h3>
						<strong>categoría sin asignar</strong>
						<p>Pronto estará disponible este contenido</p>
					</div>
				</article>
			<?php endif;?>
    </section>
    <?php get_footer(); ?>