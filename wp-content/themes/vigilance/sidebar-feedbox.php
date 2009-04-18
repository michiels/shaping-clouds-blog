<?php 
  $feed_title = get_option('V_feed_title'); 
  $feed_intro = get_option('V_feed_intro');
  $feed_email = get_option('V_feed_email');
	$twitter = get_option('V_twitter');
	$twitter_toggle = get_option('V_twitter_toggle');
?>
    <h2 class="widgettitle"><?php if ($feed_title != '') echo stripslashes(wp_filter_post_kses($feed_title)); else echo "Get Free Updates"; ?></h2>
    <div id="rss-feed" class="clear"> 
      <p><?php if ($feed_intro != '') echo stripslashes(wp_filter_post_kses($feed_intro)); else echo "Get the latest and the greatest news delivered for free to your reader or your inbox:"; ?></p>
      <a class ="rss" href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a>
      <a class="email" href="<?php echo htmlspecialchars(wp_filter_post_kses($feed_email, UTF-8)); ?>">Email Updates</a>
			<?php if ($twitter_toggle == 'true') : ?>
				<a class="twitter" href="<?php if ($twitter !== '') echo htmlspecialchars(wp_filter_post_kses($twitter, UTF-8)); else echo "#"; ?>">Twitter</a>
			<?php endif; ?>
    </div>
  	