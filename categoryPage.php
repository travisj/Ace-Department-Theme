<?php 
/*Template Name: categoryPage */
?>

<?php get_header() ?>

	<div id="content" class="blog category">
		<div class="padder">

		<?php do_action( 'bp_before_blog_home' ) ?>

		<div class="page" id="blog-latest">
		<img src="<?php bloginfo('stylesheet_directory') ?>/images/pages/<?= $posts[0]->ID ?>.gif" />

			<?php 
				global $query_string;
				parse_str($query_string, $qs);
				if (!isset($qs['paged'])) {
					$qs['paged'] = 1;
				}
				query_posts('paged=' . $qs['paged'] . '&category_name='.get_permalink().'&post_status=publish,future');
			?>
			<?php if ( have_posts() ) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<?php do_action( 'bp_before_blog_post' ) ?>

					<?php global $more; global $testme; ?>
					<?php $more = 0; $testme = "testme" ?>

					<?php include "post.php" ?>

					<?php do_action( 'bp_after_blog_post' ) ?>

				<?php endwhile; ?>

				<div class="navigation">

					<div class="alignleft"><?php next_posts_link( __( '&larr; Previous Entries', 'buddypress' ) ) ?></div>
					<div class="alignright"><?php previous_posts_link( __( 'Next Entries &rarr;', 'buddypress' ) ) ?></div>

				</div>

			<?php else : ?>

				<h2 class="center"><?php _e( 'Not Found', 'buddypress' ) ?></h2>
				<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ) ?></p>

				<?php locate_template( array( 'searchform.php' ), true ) ?>

			<?php endif; ?>
		</div>

		<?php do_action( 'bp_after_blog_home' ) ?>

		</div><!-- .padder -->
		<?php include "blog-sidebar.php" ?>

	</div><!-- #content -->


<?php get_footer() ?>
