<?php get_header(); ?>
    <div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" class="post">
    	<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a><span class="slash"> /</span></h2>
    	<h3><?php the_time('F j Y') ?><span class="slash"> /</span></h3>
      <div class="post-entry">
        <?php the_content('<span class="more-link">Continue Reading &raquo;</span>'); ?>
        <?php link_pages('<p class="page-link">Pages: ', '</p>', 'number'); ?>
      </div>
    	<h4 class="comments"><?php comments_popup_link('Drop a line, and leave a comment.', 'One person found this post worthy of commenting on.', 'Holy shit, there are % whole comments!'); ?><span class="slash"> //</span></h4>
    </div>


<?php endwhile; ?>

<?php else : ?>

		<div id="post-error" class="post">
			<h2 class="post-title">Not Found</h2>
			<div class="post-entry">
				<p>Couldn't find whatever you were searching for.</p>
			</div><!-- END POST-ENTRY  -->
		</div><!-- END POST -->

<?php endif; ?>
<div class="navigation">
	<div class="nav-left"><h4 class="nav"><?php next_posts_link('&laquo; Older posts') ?></h4></div>
	<div class="nav-right"><h4 class="nav"><?php previous_posts_link('Newer posts &raquo;') ?></h4></div>
</div>
	</div><!-- END CONTENT -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>