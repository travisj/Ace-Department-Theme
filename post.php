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

