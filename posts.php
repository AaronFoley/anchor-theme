<?php theme_include('header'); ?>

	<?php if(has_posts()): ?>
		<ul class="items">
			<?php while(posts()): ?>
			<li>
                <article>
                    <h1>
                    	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                    </h1>
                    <span class="post-date">Posted <?php echo article_date(); ?> by <?php echo article_author(); ?>.</span>

					<div class="content">
						<?php echo article_markdown(); ?>
					</div>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
        <div class="previous">
            <?php echo posts_prev(); ?>
        </div>
        <div class="next">
            <?php echo posts_next(); ?>
        </div>
    </nav>
    <?php endif; ?>

<?php theme_include('footer'); ?>
