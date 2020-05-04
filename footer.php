<?php
/*
** Footer
*/
?>

<footer id="site-footer">
	<?php get_sidebar( 'footer'); ?>

	<div id="copyright-container">
		<div id="copyright">
			Copyright &copy;
			<?php echo date_i18n( _x( 'Y', 'copyright date format', 'rom-link' ) ); ?>
			<a href=" <?php echo esc_url( home_url( '/' ) ); ?> "><?php bloginfo( 'name' ); ?></a>
		</div> <!-- #copyright -->
		
		<div id="top"></div>
	</div> <!-- #copyright-container -->
</ooter> <!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>
