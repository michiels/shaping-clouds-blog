<?php 
  $sideimg_state = get_option('V_sideimg_state'); 
  $feed_state = get_option('V_feed_state');
?>
	<div id="sidebar">
  	<?php if ($sideimg_state == 'Do not show an image') : else : ?>
  		<?php include (TEMPLATEPATH . '/sidebar-imagebox.php'); ?>
  	<?php endif; ?>
    <?php if ($feed_state == 'Disabled') : else : ?>
  		<?php include (TEMPLATEPATH . '/sidebar-feedbox.php'); ?>
  	<?php endif; ?>
  	<ul>
  		<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Wide Sidebar') ) : ?>
				<li class="widget widget_recent_entries">
					<h2 class="widgettitle"><?php _e('Recent Articles'); ?></h2>
					<ul>
						<?php $side_posts = get_posts('numberposts=10'); foreach($side_posts as $post) : ?>
						<li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>		
  		<?php endif; ?>
  	</ul>
  	<ul class="thin-sidebar spad">
  		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>	
  		<?php endif; ?>
  	</ul>
  	<ul class="thin-sidebar">
  		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
  		<?php endif; ?>
  	</ul>
	</div><!--end sidebar-->