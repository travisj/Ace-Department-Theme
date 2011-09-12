<?php 
/*Template Name: chatPage */

wp_get_current_user();
?>
<?php get_header() ?>
	<div id="content" class="blog category">
		<div class="padder">
			<img src="/wp-content/themes/Ace-Department-Theme/images/ChatHeader2.gif" />
			<div class="page" id="chat">
				<iframe src="http://status.no.de/?username=<?= $current_user->user_login ?>" height="500px" width="100%"></iframe>
			</div>
		</div><!-- .padder -->
		<?php include "blog-sidebar.php" ?>
	</div><!-- #content -->
<?php get_footer() ?>
