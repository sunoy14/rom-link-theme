<?php
/*
** This script brings the content
*/
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php get_template_part( 'template-parts/entry-header' ); ?>

	<div class="entry-content">
		<?php
			if( is_search() || ! is_single() ){
				the_excerpt();
			}
			else {
				the_content( __( 'Continue reading', 'rom-link' ) );
			}
		?>
	</div> <!-- .entry-content -->

<?php
	wp_link_pages( array(
		'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
		'after'       => '</nav>',
		'link_before' => '<span class="page-number">',
		'link_after'  => '</span>',
	) );

	if( is_single() ){
		get_template_part( 'template-parts/entry-author-bio' );
	}

	if ( is_single() ) {

                get_template_part( 'template-parts/navigation' );

        }

        /**
         *  Output comments wrapper if it's a post, or if comments are open,
         * or if there's a comment number – and check for password.
         * */
        if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
	?>

                <div class="comments-wrapper section-inner">

                        <?php comments_template(); ?>

                </div><!-- .comments-wrapper -->

	<?php
        }
        ?>

</article> 
