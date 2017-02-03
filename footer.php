<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */
?>
<footer>
      <div id="foot_cont">
        <div class="foot_one_left">
        	<img src="<?php bloginfo('template_url'); ?>/img/f_doctor.png" alt="Acerca del doctor">
        	<?php
				$temp_post = $post;
				$args_home = array('category_name' => 'Footer-Especialista',
						                            'post_per_page' => 1);
				$category_posts = new WP_Query($args_home);
				if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
					<h3><?php the_title();?></h3>
					<?php the_content(); ?>
			<?php endwhile; else: ?>
					<div class="post-vacio">
						<h3>¡Contenido en edición!</h3>
						<strong>categoría sin asignar</strong>
						<p>Pronto estará disponible este contenido</p>
					</div>
			<?php endif;?>
        </div>
          <div class="foot_two_left">
       	 	<img src="<?php bloginfo('template_url'); ?>/img/f_education.png" alt="Educación del paciente">
          	<?php
				$temp_post = $post;
				$args_home = array('category_name' => 'Footer-Educacion',
						                            'post_per_page' => 1);
				$category_posts = new WP_Query($args_home);
				if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
					<h3><?php the_title();?></h3>
					<?php the_content(); ?>
			<?php endwhile; else: ?>
					<div class="post-vacio">
						<h3>¡Contenido en edición!</h3>
						<strong>categoría sin asignar</strong>
						<p>Pronto estará disponible este contenido</p>
					</div>
			<?php endif;?>
        </div>
        <div class="foot_one_right">
          	<img src="<?php bloginfo('template_url'); ?>/img/f_link.png" alt="Links">
          	<?php
				$temp_post = $post;
				$args_home = array('category_name' => 'Footer-Links',
						                            'post_per_page' => 1);
				$category_posts = new WP_Query($args_home);
				if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
					<h3><?php the_title();?></h3>
					<?php the_content(); ?>
			<?php endwhile; else: ?>
					<div class="post-vacio">
						<h3>¡Contenido en edición!</h3>
						<strong>categoría sin asignar</strong>
						<p>Pronto estará disponible este contenido</p>
					</div>
			<?php endif;?>
        </div>
        <div class="foot_two_right">
          	<img src="<?php bloginfo('template_url'); ?>/img/f_contact.png" alt="Informacion de contacto">
        	<?php
				$temp_post = $post;
				$args_home = array('category_name' => 'Footer-Contacto',
						                            'post_per_page' => 1);
				$category_posts = new WP_Query($args_home);
				if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
					<h3><?php the_title();?></h3>
					<?php the_content(); ?>
			<?php endwhile; else: ?>
					<div class="post-vacio">
						<h3>¡Contenido en edición!</h3>
						<strong>categoría sin asignar</strong>
						<p>Pronto estará disponible este contenido</p>
					</div>
			<?php endif;?>
        </div>
      </div>
      <?php wp_footer(); ?>
    </footer>
  </section>
  <div id="obif">
      <span><a href="https://plus.google.com/+DoctorilabacaCl" rel="publisher">Síguenos en Google+</a> | <?php wp_loginout(); ?> | doctorilabaca.cl | 2017 </span>
  </div>
</body>
</html>
