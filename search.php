<?php get_header(); ?>
	

		<div id="content">

<?php if (have_posts()) : ?>

			<h2 class="page-title">Search Results For: &#8220;<?php echo wp_specialchars($s); ?>&#8221; <span class="slash"> /</span></h2>
		
<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="post">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a><span class="slash"> /</span></h2>
				<h3><?php the_time('F j Y') ?><span class="slash"> /</span></h3>

				<h4 class="comments"><?php comments_popup_link('Drop a line, and leave a comment.', 'One person found this post worthy of commenting on.', 'Holy shit, there are % whole comments!'); ?><span class="slash"> //</span></h4>
			</div>

<?php endwhile; ?>

			<div class="navigation">
				<div class="nav-left"><h4 class="nav"><?php next_posts_link('&laquo; Older posts') ?></h4></div>
				<div class="nav-right"><h4 class="nav"><?php previous_posts_link('Newer posts &raquo;') ?></h4></div>
			</div>

<?php else : ?>

			<div id="post-error" class="post">
				<h2 class="page-title" style="margin-bottom:0;">Nothing Found</h2>
				<div class="post-entry">
					<p>Sorry, but &#8220;<?php echo wp_specialchars($s); ?>&#8221; yielded 0 results. Please change your criteria and try your search again.</p>
					<form id="search-searchform" method="get" action="<?php bloginfo('home'); ?>/">
						<p><input id="search-s" name="search-s" type="text" value="<?php echo wp_specialchars($s, 1); ?>" tabindex="1" size="20" /> <input id="search-searchsubmit" name="search-searchsubmit" type="submit" value="Find" tabindex="2" /></p>
					</form> 
				</div>
			</div>

<?php endif; ?>

		</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>