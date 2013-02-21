<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pressed and squeezed
 * @since pressed and squeezed 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title invisible"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_post_thumbnail();?>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'pressed_and_squeezed' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'pressed_and_squeezed' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
