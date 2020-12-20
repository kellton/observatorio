<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
</div>
</div>
</div><!-- #content -->

<?php do_action('sydney_before_footer'); ?>

<?php if (is_active_sidebar('footer-1')) : ?>
	<?php get_sidebar('footer'); ?>
<?php endif; ?>

<a class="go-top"><i class="sydney-svg-icon"><?php sydney_get_svg_icon('icon-chevron-up', true); ?></i></a>

<footer id="colophon" class="site-footer texto container" role="contentinfo">
	<div class="site-info container">
		<div class="row">
			<div class="col-md-10">
				&copy; Observatório do Transporte. Todos os direitos reservados
				<span class="sep"> | </span>
				<a href="<?php echo site_url('termos-e-condicoes') ?>"><span class="cor-texto">Termos de Uso</span></a> &nbsp&nbsp <span class="cor-texto">Política de Privacidade</span> &nbsp&nbsp <span class="cor-texto">Aviso de Privacidade</span>
			</div>
			<div class="col-md-2">
				<a href="https://www.facebook.com/Observat%C3%B3rio-do-Transporte-de-Teresina-106246441369872"><img style="width: 18%;" src="<?php echo site_url('wp-content/uploads/2020/12/face.png') ?>"></a>
				<a href="https://twitter.com/obs_transp_the"><img style="width: 18%;" src="<?php echo site_url('wp-content/uploads/2020/12/twitter.png') ?>"></a>
				<a href="https://www.instagram.com/obs_transp_the"><img style="width: 18%;" src="<?php echo site_url('wp-content/uploads/2020/12/instagram.png') ?>"></a>
				<a href="https://www.youtube.com/channel/UCg3S8XtNUa7xkRx-BhOP5rg?view_as=subscriber"><img style="width: 18%;" src="<?php echo site_url('wp-content/uploads/2020/12/youtube.png') ?>"></a>
			</div><!-- .site-info -->
		</div>
	</div>
</footer><!-- #colophon -->

<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
<style>
	.site-footer {
		background-color: #333333 !important;
		/*border-right: 5px solid #ccc;
		border-left: 5px solid #ccc;*/
	}

	.texto {
		font-size: 10px;
	}

	.cor-texto {
		color: #d95e57;
		font-size: 10px;
	}
</style>