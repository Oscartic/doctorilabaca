<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="wrapper">
 *
 * @package WordPress
 * @subpackage Theme_DrIlabaca
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_post_meta($post->ID, "meta_descript", true) ?>" />
    <meta name="keywords" content="<?php echo get_post_meta($post->ID, "meta_keywords", true) ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.slides.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/myscript.js"></script>
	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37788432-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

	</script>
	<?php wp_head(); ?>
</head>
<body>
  <div class="menu_bar">
    <a href="#" class="btn-menu">Menu<span class="icon-menu3"></span></a>
  </div>
  <section id="wrapper">
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
	</script>
    <header>
      <section id="logo">
        <h3>Doctor Francisco Ilabaca // Especialista en cirugoa de Columna</h3>
        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url');?>/img/logo.png" height="90" width="258" alt="Dr. Francisco Ilabaca"/></a>
      </section>
      <div id="brows_date"><!--brows_date-->
        <div class="fandg face"><!--F-->
          <div class="fb-like" data-href="http://www.doctorilabaca.cl/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
        </div><!--end F-->
        <div class="fandg"><!--G+-->
          <div class="g-plusone" data-size="medium" data-href="http://www.doctorilabaca.cl/"></div>
            <script type="text/javascript">
              window.___gcfg = {lang: 'es'};
              (function() {
              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
              po.src = 'https://apis.google.com/js/platform.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
        </div><!--end G+-->
        <form method="get" id="searchform" action="http://www.doctorilabaca.cl/">
        <input type="text" value="Buscar..." name="s" id="s" onblur="if (this.value == '') {this.value = 'Buscar...';}" onfocus="if (this.value == 'Buscar...') {this.value = '';}" />
        <input type="hidden" id="searchsubmit" />
        </form>
              <p><script type="text/javascript">document.write (Muestrafecha());</script></p>
      </div><!--END brows_date-->
    </header>
    <?php wp_nav_menu(
        array(
        	'container' => 'nav',
        	'container_id' => 'menu',
        	'container_class' => 'nav-collapse',
        	'theme_location' => 'menu',
        	'depth' => 1
        ));
    ?>
