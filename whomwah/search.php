<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small>posted by <?php the_author() ?> at <span><?php the_time() ?></span> on <span><?php the_time('F j S, Y') ?></span></small>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', ''); ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div<?php if (($paged > 1)) : ?> class="alignleft"<?php endif; ?>><?php next_posts_link('&laquo; older stuff') ?></div>
			<div class="alignright"><?php previous_posts_link('newer stuff &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
  <?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
