<div class='lateral'>

    <div class='slideshow'>
        <?php include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
    </div>

	<div class='newsletter'>
		<h2>Assine nossa Newsletter!</h2>
		<h3>Receba promo&ccedil;&otilde;es exclusivas por e-mail!</h3>

		<?php //yphplista() ?>
		
		<?php if (class_exists('ajaxNewsletter')): ?>
			<!-- place your HTML code here -->
			<?php ajaxNewsletter::newsletterForm(); ?>
			<!-- place your HTML code here -->
		<?php endif; ?>
	</div>

    <div class="local">
        <h2>Localiza&ccedil;&atilde;o Privilegiada!</h2>
        <div class="texto">
            Situada em endere&ccedil;o privilegiado, a Contisaude &eacute; de f&aacute;cil acesso tanto para quem est&aacute; em Niter&oacute;i, quanto para quem vem do Rio de Janeiro.
            Estamos localizados na principal rua do centro de Niter&oacute;i, a poucos metros da esta&ccedil;&atilde;o das Barcas.
        </div>
        <h3><a href="/spaurbano/como-chegar" />Clique aqui e veja o mapa!</a></h3>
    </div>

</div>