<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="widecolumn">

  <div id="archive">

  <?php include (TEMPLATEPATH . '/searchform.php'); ?>

  <h2>Archives by Month:</h2>
	<ul class="cm">
		<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
	</ul>

  </div>

</div>

<?php get_footer(); ?>
