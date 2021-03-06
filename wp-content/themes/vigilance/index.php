<?php get_header(); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post-header">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="date"><span><?php the_time('Y') ?></span> <?php the_time('F j') ?></div>
				<div class="comments"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></div>
			</div><!--end post header-->
			<div class="meta clear">
				<div class="tags"><?php the_tags('tags: ', ', ', ''); ?></div>
				<div class="author">by <?php the_author() ?></div>
			</div><!--end meta-->
			<div class="entry clear">
				<?php the_content('read more...'); ?>
        <?php edit_post_link('Edit This','<p>','</p>'); ?>
				<?php wp_link_pages(); ?>
			</div><!--end entry-->
			<div class="post-footer">
				<p>from &rarr; <?php the_category(', ') ?></p>
			</div><!--end post footer-->
		</div><!--end post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="navigation index">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div><!--end navigation-->
		<?php else : ?>
		<?php endif; ?>
	</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>