<?php
/**
 * HTML for outputting blog comments as defined by the WP comment API
 *
 * @param mixed $comment Comment record from database
 * @param array $args Arguments from wp_list_comments() call
 * @param int $depth Comment nesting level
 * @see wp_list_comments()
 * @package BuddyPress Theme
 * @since 1.2
 */

function acedept_blog_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>

	<?php if ( 'pingback' == $comment->comment_type ) return false; ?>

	<li id="comment-<?php comment_ID(); ?>">
		<div class="comment-avatar-box">
			<div class="avb">
				<a href="<?php echo get_comment_author_url() ?>" rel="nofollow">
					<?php if ( $comment->user_id ) : ?>
						<?php echo bp_core_fetch_avatar( array( 'item_id' => $comment->user_id, 'width' => 50, 'height' => 50, 'email' => $comment->comment_author_email ) ); ?>
					<?php else : ?>
						<?php echo get_avatar( $comment, 50 ) ?>
					<?php endif; ?>
				</a>
			</div>
		</div>

		<div class="comment-content">
			<div class="comment-meta">
				<a class="comment-author" href="<?php echo get_comment_author_url() ?>" rel="nofollow"><?php echo get_comment_author(); ?></a> 
				<a class="comment-date" href="#comment-<?php comment_ID() ?>" title=""><?php comment_date() ?></a>

				<div class="comment-controls">
				<?php edit_comment_link( __( 'Edit' ),'','' ); ?>
				</div>
			</div>


			<div class="comment-text">
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="moderate"><?php _e('Your comment is awaiting moderation.'); ?></em><br />
				<?php endif; ?>

				<?php comment_text() ?>
			</div>

			<br class="clear" />
		</div> <!-- comment-content -->
<?php
}
?>
