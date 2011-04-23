<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<title><?php bp_page_title() ?></title>

		<?php do_action( 'bp_head' ) ?>

		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<?php if ( function_exists( 'bp_sitewide_activity_feed_link' ) ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php _e('Site Wide Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_sitewide_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_member_activity_feed_link' ) && bp_is_member() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_displayed_user_fullname() ?> | <?php _e( 'Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_member_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_group_activity_feed_link' ) && bp_is_group() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_current_group_name() ?> | <?php _e( 'Group Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_group_activity_feed_link() ?>" />
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

		<!-- typekit -->
		<script type="text/javascript" src="http://use.typekit.com/gxc4dpr.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<!-- Google Analytics -->
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-4478035-6']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>


	</head>

	<body <?php body_class() ?> id="bp-default"><div id="body-wrap">

		<?php do_action( 'bp_before_header' ) ?>

		<div id="header">

			<h1 id="logo"><a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' ) ?>"><?php bp_site_name() ?></a></h1>
			<h4 id="tagline">the secret society of the entrepreneuse</h4>

		<div id="nav">
			<ul>
				<li<?php if ( bp_is_front_page() ) : ?> class="selected"<?php endif; ?>>
					<a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' ) ?>"><?php _e( 'Home', 'buddypress' ) ?></a>
				</li>
				<li <?php if ( $post->post_name === 'gazette' ) : ?> class="selected"<?php endif; ?>>
					<a href="/gazette">Gazette</a>
				</li>
				<li <?php if ( $post->post_name === 'diversions' ) : ?> class="selected"<?php endif; ?>>
					<a href="/diversions/">Diversions</a>
				</li>

				<?php if ( bp_is_active( 'groups' ) ) : ?>
					<li<?php if ( bp_is_page( BP_GROUPS_SLUG ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo BP_GROUPS_SLUG ?>/" title="<?php _e( 'Groups', 'buddypress' ) ?>"><?php _e( 'Groups', 'buddypress' ) ?></a>
					</li>
					<?php if ( bp_is_active( 'forums' ) && ( function_exists( 'bp_forums_is_installed_correctly' ) && !(int) bp_get_option( 'bp-disable-forum-directory' ) ) && bp_forums_is_installed_correctly() ) : ?>
						<li<?php if ( bp_is_page( BP_FORUMS_SLUG ) ) : ?> class="selected"<?php endif; ?>>
							<a href="<?php echo site_url() ?>/<?php echo BP_FORUMS_SLUG ?>/" title="<?php _e( 'Forums', 'buddypress' ) ?>"><?php _e( 'Forums', 'buddypress' ) ?></a>
						</li>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ( is_user_logged_in() ) : ?>
				<li <?php if ( $post->post_name === 'chat' ) : ?> class="selected"<?php endif; ?>>
					<a href="/chat">Chat</a>
				</li>
				<li>
					<a href="<?php echo bp_loggedin_user_domain() ?>/messages">Inbox</a>
				</li>
				<?php endif ?>



				<?php if ( bp_is_active( 'blogs' ) && bp_core_is_multisite() ) : ?>
					<li<?php if ( bp_is_page( BP_BLOGS_SLUG ) ) : ?> class="selected"<?php endif; ?>>
						<a href="<?php echo site_url() ?>/<?php echo BP_BLOGS_SLUG ?>/" title="<?php _e( 'Blogs', 'buddypress' ) ?>"><?php _e( 'Blogs', 'buddypress' ) ?></a>
					</li>
				<?php endif; ?>

				<li <?php if ( $post->post_name === 'about' ) : ?> class="selected"<?php endif; ?>>
					<a href="/about">About Ace</a>
				</li>

				<?php do_action( 'bp_nav_items' ); ?>

			</ul>

		</div><!-- #nav -->

		<div id="user-account">

			<?php if ( is_user_logged_in() ) : ?>

				<?php do_action( 'bp_before_sidebar_me' ) ?>

				<div id="sidebar-me">
					<a href="<?php echo bp_loggedin_user_domain() ?>" class="avatar">
						<?php bp_loggedin_user_avatar( 'type=thumb&width=40&height=40' ) ?>
					</a>
					<a href="<?php echo bp_loggedin_user_domain() ?>" class="name">
						<?php bp_loggedin_user_fullname() ?>
					</a>


					<?php do_action( 'bp_sidebar_me' ) ?>
				</div>

				<?php do_action( 'bp_after_sidebar_me' ) ?>

				<?php if ( function_exists( 'bp_message_get_notices' ) ) : ?>
					<?php bp_message_get_notices(); /* Site wide notices to all users */ ?>
				<?php endif; ?>

			<?php else : ?>

				<?php do_action( 'bp_before_sidebar_login_form' ) ?>

				<form name="login-form" id="sidebar-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
					<label><?php _e( 'Username', 'buddypress' ) ?></label>
					<input type="text" name="log" id="sidebar-user-login" class="input" value="<?php echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" />

					<label><?php _e( 'Password', 'buddypress' ) ?></label>
					<input type="password" name="pwd" id="sidebar-user-pass" class="input" value="" tabindex="98" />


					<?php do_action( 'bp_sidebar_login_form' ) ?>
					<input type="submit" name="wp-submit" id="sidebar-wp-submit" value="<?php _e('Log In'); ?>" tabindex="100" />
					<input type="hidden" name="testcookie" value="1" />
				</form>


				<?php do_action( 'bp_after_sidebar_login_form' ) ?>

			<?php endif; ?>
		</div>

		<?php if ( is_user_logged_in() ) : ?>
			<a class="logout" href="<?php echo wp_logout_url( bp_get_root_domain() ) ?>" id="logout-link">
				<?php _e( 'Log Out', 'buddypress' ) ?>
			</a>
		<?php endif; ?>

		<?php do_action( 'bp_header' ) ?>

		</div><!-- #header -->

		<?php do_action( 'bp_after_header' ) ?>
		<?php do_action( 'bp_before_container' ) ?>

		<div id="container">
