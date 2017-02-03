<?php
/**
 * Template for displaying posts banner set
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */
?>	
	<div id="no-slide">
        <section id="slideshow">
          	<?php 
			$temp_post = $post; 
			$args_bienvendos = array('category_name' => 'Home-Slide', 
					                            'post_per_page' => 6);
			$category_posts = new WP_Query($args_bienvendos);
			
			if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
				<div class="thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?>
				</div>
			<?php endwhile; else: ?>
				<div class="vacio">
					<h3>Entrada Vacia</h3>
					<strong>categoria inexistente</strong>
				</div>
			<?php endif;?>	
      	</section>
    </div>

    			