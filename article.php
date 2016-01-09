<?php theme_include('header'); ?>


	<article id="article-<?php echo article_id(); ?>">
		<h1><?php echo article_title(); ?></h1>

		<span class="post-date">Posted <?php echo article_date(); ?> by <?php echo article_author(); ?>.</span>

		<div class="content">
			<?php echo article_markdown(); ?>
		</div>
	</article>

	<?php if(comments_open()): ?>
	<?php endif; ?>

<?php theme_include('footer'); ?>
