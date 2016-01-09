<?php theme_include('header'); ?>

<div class="header">
    <h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
</div>


<?php if(has_search_results()): ?>

	<ul class="items">
		<?php $i = 0; while(search_results()): $i++; ?>
        <article>
			<h1>
                <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
            </h1>
            <span class="post-date">Posted <?php echo article_date(); ?> by <?php echo article_author(); ?>.</span>

            <div class="content">
                <?php echo article_description(); ?>
            </div>

        </article>
		<?php endwhile; ?>
	</ul>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
        <div class="previous">
            <?php echo search_prev(); ?>
        </div>
        <div class="next">
            <?php echo search_next(); ?>
        </div>
    </nav>
    <?php endif; ?>
<?php else: ?>
	<p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;.</p>
<?php endif; ?>

<?php theme_include('footer'); ?>