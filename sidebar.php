<div id="sidebar">
  
  <div class="search">
		<h5><label for="s">Search <span class="slash"> /</span></label></h5>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </div>
  
  <div class="recentposts">
    <h5>Recent Posts <span class="slash"> /</span></h5>
    <ul>
      <?php query_posts('showposts=10'); ?>
      
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a><span class="slash"> /</span></li>

    <?php endwhile; ?>

    <?php endif ?>
    </ul>
  </div>
  
  <div class="archives">
		<h5>Archives <span class="slash"> /</span></h5>
		<ul>
			<?php wp_get_archives('type=monthly&after=<span class="slash"> /</span>'); ?>
		</ul>
	</div>
	
	<div class="subscribe">
    <h5>Subscribe <span class="slash"> /</span></h5>
    <a href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" rel="alternate" type="application/rss+xml">RSS</a>
	</div>



<div class="copy">
  <p>&copy; <?php echo(date('Y')); ?> Jake Dahn</p>
</div>