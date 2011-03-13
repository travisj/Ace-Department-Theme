<?php get_header() ?>

	<div id="content">
		<div class="padder">

		<?php do_action( 'bp_before_blog_home' ) ?>

		<?php $post_count = 0; ?>

		<div class="page" id="blog-latest">

			<?php if ( have_posts() ) : ?>

				<?php while (have_posts()) : the_post(); ?>
				<?php $post_count++ ?>

					<?php if($post_count == 1) : ?>

						<div class="post" id="post-<?php the_ID(); ?>">

							<h2 class="posttitle">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h2>

							<div class="entry">
								<?php the_content( __( 'Read the entire post...', 'buddypress' ) ); ?>

								<?php# wp_link_pages(array('before' => __( '<p><strong>Pages:</strong> ', 'buddypress' ), 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div> <!-- /entry -->

							
							<div class="meta">
									<?php echo get_avatar( get_the_author_meta( 'user_email' ), '50' ); ?>

								<p class="author"><?php printf( __( 'by %s', 'buddypress' ), bp_core_get_userlink( $post->post_author ) ) ?></p>
								<p class="categorization">
									<span class="time">posted <?php the_date() ?> </span>
									<span class="comments"><?php comments_popup_link( __( '<span class="separator">&bull;</span> no comments (yet)', 'buddypress' ), __( '<span class="separator">&bull;</span> 1 comment;', 'buddypress' ), __( '<span class="separator">&bull;</span> % comments', 'buddypress' ) ); ?></span>
									<span class="category"><?php _e( '<span class="separator">&bull;</span> filed under', 'buddypress' ) ?> <?php the_category(', ') ?></span>
									<span class="tags"><?php the_tags( __( '<span class="separator">&bull;</span> tagged with ', 'buddypress' ), ', ', '<br />'); ?></span> 
								</p>
								<br class="clear" />
							</div> <!-- /meta -->

						</div>



					<?php endif; ?>

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

		<div class="home-sidebar">
			<div class="sidebar-box search">
				<form action="<?php echo bp_search_form_action() ?>" method="post" id="search-form">
					<input type="text" id="search-terms" name="search-terms" value="" />
					<?php echo bp_search_form_type_select() ?>

					<input type="submit" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ) ?>" />
					<?php wp_nonce_field( 'bp_search_form' ) ?>
				</form><!-- #search-form -->
			</div>
			<div class="sidebar-box about">
				<h2>welcome</h2>
				<p>
				 Imagine a room filled with the smartest, kindest people you know. Good ideas abound, the room itself is beautiful, you're smiling. Ace Dept is that room.
			 </p>
			</div>

			<div class="sidebar-box twitter">
				<h2>tweets </h2>

				<ul id="twitter_update_list"></ul>
				<div id="follow-us">
					(You should follow us at <a id="twitter-link"  href="http://twitter.com/acedept">@acedept</a>.)
				</div>
				<!--<script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script></ -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/blogger.js" type="text/javascript"></script>
				<script src="http://twitter.com/statuses/user_timeline/acedept.json?callback=twitterCallback2&amp;count=4" type="text/javascript"></script>
				

				
			</div>



		</div>
		<br class="clear" />
	</div><!-- #content -->


<?php get_footer() ?>