
<div class="blog sidebar">
	<div class="sidebar-box search">
		<?php include "search-form.php"; ?>
	</div>

	<div class="sidebar-box contact">
		<a href="http://twitter.com/acedept" class="twitter">Twitter</a>
		<a href="http://www.facebook.com/pages/Ace-Department/173136476045079" class="facebook">Facebook</a>
		<a href="http://www.acedepartment.com/activity/feed/" class="rss">RSS</a>
		<a href="/contact" class="contact">Contact</a>
	</div>

	<div class="sidebar-box active-members">
		<h4>Active Members</h4>
		<?php echo do_shortcode('[hts-displaymembers count="10" field="display_name"]'); ?>
	</div>

	<div class="sidebar-box ask-ace">
		<a href="/contact">Ask Ace</a>
	</div>

	

	<div class="sidebar-box also-like">
		<h4>You May Also Like...</h4>
		<div class="linkwithin_div"></div>
	</div>

	<?php # include "test-linkwithin.php" ?>

</div>

