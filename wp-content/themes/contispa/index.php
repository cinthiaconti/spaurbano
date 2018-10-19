<?php
/*
  Template Name: Home
 */
?>

<?php get_header(); ?>

<!-- begin gallery scripts -->
<link rel="stylesheet" href="http://www.contisaude.com.br/spaurbano/wp-content/plugins/featured-content-gallery/css/jd.gallery.css.php" type="text/css" media="screen" charset="utf-8"/>
<link rel="stylesheet" href="http://www.contisaude.com.br/spaurbano/wp-content/plugins/featured-content-gallery/css/jd.gallery.css" type="text/css" media="screen" charset="utf-8"/>
<script type="text/javascript" src="http://www.contisaude.com.br/spaurbano/wp-content/plugins/featured-content-gallery/scripts/mootools.v1.11.js"></script>
<script type="text/javascript" src="http://www.contisaude.com.br/spaurbano/wp-content/plugins/featured-content-gallery/scripts/jd.gallery.js.php"></script>

<script type="text/javascript" src="http://www.contisaude.com.br/spaurbano/wp-content/plugins/featured-content-gallery/scripts/jd.gallery.transitions.js"></script>
<!-- end gallery scripts -->

<br clear=all />

<div class='principal clear' id='container'>

    <div class='coluna'>

        <div class="empresa">
            <h2>Quem Somos</h2>
            <div class="texto">
                <p>A Contisaude - Est&eacute;tica & Spa Urbano &eacute; um espa&ccedil;o destinado &agrave; cuidar da sa&uacute;de e do bem-estar.</p>
                <p>Oferecemos diversos servi&ccedil;os com o objetivo de proporcionar a cada cliente um estilo de vida mais saud&aacute;vel.</p>
                <p>Navegue em nosso site e escolha o tratamento que desejar!</p>

                <span class="frase">"Estar de bem com a vida &eacute; estar de bem com seu corpo e sua mente. &Eacute; sentir-se bonito por dentro e por fora."</span>
            </div>
        </div>
            <div class='posts' id='content' role='main' style="display: block">

                <h2>Novidades</h2>

            <?php
                query_posts('posts_per_page=1');
                if (have_posts ()) :
                    while (have_posts ()) : the_post();
            ?>
                <div class="post rel">
                    <h3><a href='<? the_permalink() ?>'><?php the_title(); ?></a></h3>
                        <div class='data'>
                <?php
                        the_time(get_option('date_format'));
                ?>
                    </div>

                    <div class="texto">
                <?php the_excerpt(); ?>
                    </div>
                    <span class="comments-link"><?php //comments_popup_link( __( 'Deixe aqui o seu relato!', 'contispa' ));    ?></span>
                </div>
            <?php endwhile; ?>

            <?php endif; ?>
                    </div>

					
			<div class='comentarios'>
            <h2>Relatos de Clientes</h2>
            <?php if (function_exists('get_recent_comments')) { ?>
                <?php get_recent_comments(); ?>
            <?php } ?>
            <h3 class="relato"><a href="?comments_popup=1" onclick="wpopen(this.href); return false" target="_blank" title="Deixe aqui o seu relato!">Deixe aqui o seu relato!</a></h3>
        </div>
    </div>


    <?php get_sidebar(); ?>
        <br clear='all' />

        <div class='base'>

            <div>
                <h3>Hor&aacute;rio de Funcionamento:</h3>
                Segunda &agrave; Sexta, das 9h as 20h.
                <br />
                S&aacute;bados, à combinar.
            </div>

            <div>
                <h3>Agende uma avalia&ccedil;&atilde;o grátis:</h3>
                (21) 2722-1077
            </div>

            <div>
                <h3>Acompanhe-nos pelo:</h3>
                <a href="http://www.facebook.com/contisaude" target='_blank'><img src='<?php bloginfo('template_directory'); ?>/img/facebook.png' alt="facebook" title="facebook" width="32" height="32"/></a>
                <a href="http://twitter.com/contisaude" target='_blank'><img src='<?php bloginfo('template_directory'); ?>/img/twitter.png' alt="twitter" title="twitter" width="32" height="32"/></a>
            </div>

            <div>
                <h3>Aceitamos:</h3>
                <img src='<?php bloginfo('template_directory'); ?>/img/visa.png' alt="visa" title="visa" width="50" height="32"/>
                <img src='<?php bloginfo('template_directory'); ?>/img/master.png' alt="mastercard" title="mastercard" width="50" height="32"/>
            </div>

        </div>

    <? get_footer(); ?>