<?php get_header(); ?>

	<div id="content">
		<div class="padder">

		<?php do_action( 'bp_before_404' ) ?>

		<div class="page 404">

			<h2 class="pagetitle"><?php _e( 'Page Not Found', 'buddypress' ) ?></h2>


			<p>We're sorry, we weren't able to find the page you're looking for.
			If you continue to have trouble, please email us at <a href="mailto:info@acedepartment.com" title="email Ace Dept">info@acedepartment.com</a>.</p>


			<?php do_action( 'bp_404' ) ?>

		</div>

		<?php do_action( 'bp_after_404' ) ?>

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php locate_template( array( 'sidebar.php' ), true ) ?>

<?php get_footer(); ?>