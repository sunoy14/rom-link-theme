<?php
/*
**
**/
?>

<header class="entry-header">
	<?php
		if( is_single() ){
			the_title( '<h1 class="entry-title">', '</h1>' );
		}
		else {
			the_title( '<h2 class="entry-title entry-title-2"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}
	?>
</header>
