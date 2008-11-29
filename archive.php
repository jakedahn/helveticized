<?php get_header(); ?>
	

		<div id="content">

<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // HACK FROM KUBRICK ?>
<?php /* IF CATEGORY ARCHIVE */ if (is_category()) { ?>				
			<h2 class="page-title">Category Archives: <?php echo single_cat_title(); ?> <span class="slash"> /</span></h2>
<?php /* IF MONTHY ARCHIVE */ } elseif (is_date()) { ?>
			<h2 class="page-title">Monthly Archives: <?php the_time('F Y'); ?> <span class="slash"> /</span></h2>
<?php /* IF ANOTHER PAGE OF ARCHIVES */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="page-title">Blog Archives <span class="slash"> /</span></h2>
<?php } ?>

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
				<h2 class="post-title">Not Found</h2>
				<div class="post-entry">
					<p>Apologies. But something you were looking for just can't be found. Please have a look around or try searching for what you're looking for.</p>
				</div>
			</div>

<?php endif; ?>
		
		</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>