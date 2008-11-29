<?php get_header(); ?>
		<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="post">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a><span class="slash"> /</span></h2>
      	<h3><?php the_time('F j Y') ?><span class="slash"> /</span></h3>
				<div class="post-entry">
					<?php the_content('<span class="more-link">Continue Reading &raquo;</span>'); ?>
					<?php link_pages('<p class="page-link">Pages: ', '</p>', 'number'); ?>
					
				</div>
				<blockquote class="single-post-footer">
				<p>	This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>. You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { // COMMENTS & PINGS OPEN ?>
					<a href="#respond">Post a comment</a> or leave a trackback: <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback URI</a>.
<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { // PINGS ONLY OPEN ?>
					Comments are closed, but you can leave a trackback: <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback URI</a>.
<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { // COMMENTS OPEN ?>
					Trackbacks are closed, but you can <a href="#respond">post a comment</a>.
<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { // NOTHING OPEN ?>
					Both comments and trackbacks are currently closed.			
<?php } ?></p>
				</blockquote>
				
			</div>

<?php comments_template(); ?>

<?php endwhile; else: ?>

			<div id="post-error" class="post">
				<h2 class="post-title">Not Found</h2>
				<div class="post-entry">
					<p>Apologies. But something you were looking for just can't be found. Please have a look around or try searching for what you're looking for.</p>
				</div>
			</div>

<?php endif; ?>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>