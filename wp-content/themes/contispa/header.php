<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" />
        <title><? bloginfo('name'); ?></title>

        <?php comments_popup_script(430, 450); ?>

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>


        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/css_browser_selector.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-easing-1.3.pack.js"></script>        
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-easing-compatibility.1.2.pack.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.kwicks-1.5.1.pack.js" ></script>

        <script type="text/javascript">			

            /*
                        if('<? the_permalink(); ?>' == 'http://www.contisaude.com.br/spaurbano/blog'){			
                                ativo = 4;
                        }*/
								
            switch('<? echo $_SERVER['REQUEST_URI']; ?>')
            {
				case '/spaurbano/':
                    ativo= 0;
                    break;
                case '/spaurbano/quem-somos/contisaude-estetica-spa-urbano':
                    ativo= 1;
                    break;
                case '/spaurbano/estetica':
                    ativo= 2;
                    break;
                case '/spaurbano/spa-urbano':
                    ativo= 3;
                    break;
                case '/spaurbano/blog':
                    ativo = 4;
                    break;
                case '/spaurbano/contato':
                    ativo= 5;
                    break;
                case '/spaurbano/como-chegar':
                    ativo= 6;
                    break;
                default:
                    ativo= 4;
                    break;
					
                }

			
                jQuery().ready(function() {
                    jQuery('.menu ul').kwicks({defaultKwick:ativo, max: 240, duration: 300,sticky: true, event: 'click', easing: 'easeOutQuad'});
                });
			
        </script>
		
    </head>


    <? global $post; ?>


    <body id="<?php echo get_post_meta($post->ID, '_wp_page_template', true); ?>" <?php body_class($class); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <div class='rel'>	
            <div class='conteudo' id="wrapper">

                <div class='topo' id="header">
                    <div class="logo">
                        <a href='/spaurbano/'><img src='<?php bloginfo('template_directory'); ?>/img/logo2.png' alt="contisaude" title="contisaude" width="141" height="132" /></a>
                        <a href='/spaurbano/'><h1>CONTISAUDE
                                <span class="titulo">Est&eacute;tica & Spa Urbano</span>
                            </h1></a>
                    </div>
                </div>
                <div class='menu' style="margin-bottom:30px">
                    <ul>
                        <li id="home"><a href="/spaurbano/"></a></li>
                        <li id="quemsomos"><a href="/spaurbano/quem-somos/contisaude-estetica-spa-urbano"></a></li>
                        <li id="estetica"><a href="/spaurbano/estetica"></a></li>
                        <li id="spa"><a href="/spaurbano/spa-urbano"></a></li>
                        <li id="blogwp"><a href="/spaurbano/blog"></a></li>
                        <!--<li id="fotos"><a href="?page_id=54 ">Fotos</a></li>-->
                        <li id="contato"><a href="/spaurbano/contato"></a></li>
                        <li id="comochegar"><a href="/spaurbano/como-chegar"></a></li>
                    </ul>
                </div>

                <div class='clear'></div>
                
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style right">
					<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4de92ffc27be4bf7"></script>
				<!-- AddThis Button END -->

<div class="fb-like" data-href="http://www.facebook.com/contisaude" data-send="false" data-layout="button_count" data-show-faces="false" data-font="arial" style="width:85px; height:21px; margin-left:4px" class="right"></div>               
			