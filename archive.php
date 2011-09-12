<?php get_header(); ?>

	<div id="content" class="blog category">
		<div class="padder">

		<?php do_action( 'bp_before_archive' ) ?>

		<div class="page" id="blog-archives">


			<?php if ( have_posts() ) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php do_action( 'bp_before_blog_post' ) ?>

					<?php include "post.php" ?>

					<?php do_action( 'bp_after_blog_post' ) ?>

				<?php endwhile; ?>

				<div class="navigation">

					<div class="alignleft"><?php next_posts_link( __( '&larr; Previous Entries', 'buddypress' ) ) ?></div>
					<div class="alignright"><?php previous_posts_link( __( 'Next Entries &rarr;', 'buddypress' ) ) ?></div>

				</div>

			<?php else : ?>

				<h2 class="center"><?php _e( 'Not Found', 'buddypress' ) ?></h2>
				<?php locate_template( array( 'searchform.php' ), true ) ?>

			<?php endif; ?>

		</div>

		<?php do_action( 'bp_after_archive' ) ?>

		</div><!-- .padder -->
		<?php include "blog-sidebar.php" ?>
	</div><!-- #content -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_footer(); ?>
