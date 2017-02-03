<?php
/**
 * The sidebar containing the main widget area and external links
 *
 *
 * @package WordPress
 * @subpackage theme_drilabaca
 */
?>
    <aside id="main_cont_right">
          <!--Query Sidebar-->
           <div class="none-dis">
           <?php
                $temp_post = $post;
                $args_home = array('category_name' => 'Sidebar-contacto',
                                                    'post_per_page' => 1);
                $category_posts = new WP_Query($args_home);
                if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post(); ?>
                <article>
                    <h3><?php the_title();?></h3>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else: ?>
                <article>
                    <div class="post-vacio">
                        <h3>¡Contenido en edición!</h3>
                        <strong>categoría sin asignar</strong>
                        <p>Pronto estará disponible este contenido</p>
                    </div>
                </article>
            <?php endif;?>
            <!--End Query sidebar-->
            <br/>
            <!-- ///////Research/facebook/linkedIn link`s-->
            <br/>
          </div>
          <a id="contact-mail" href="mailto:doctorilabaca@gmail.com">doctorilabaca@gmail.com</a>
          <h5>Red Profesional</h5>
          <a class="face" href="https://www.facebook.com/doctorilabaca" target="new">Facebook</a>
          <a class="link" href="http://cl.linkedin.com/in/doctorilabaca" target="new">Linkedin</a>
          <a class="rg" href="http://www.researchgate.net/profile/Francisco_Ilabaca/" target="new">Researchgate</a>
          <a class="twit" href="https://twitter.com/doctorilabaca" target="new">Researchgate</a>
        <!-- END///////Research/facebook/linkedIn/twitter link`s-->
			<?php
        		dynamic_sidebar('sidebar_rigth');
        	?>
    </aside>
