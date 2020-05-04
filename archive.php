<?php
get_header();
?>

<main id="site-content" role="main">
	<?php
	if( have_posts() ){
		while( have_posts() ){
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	get_template_part( 'template-parts/pagination' );
	?>
</div> <!-- #site-content -->

<?php
get_footer();
?>
