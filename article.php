<?php theme_include('header'); ?>


	<article id="article-<?php echo article_id(); ?>">
		<h1><?php echo article_title(); ?></h1>

		<span class="post-date">Posted <?php echo article_date(); ?> by <?php echo article_author(); ?>.</span>

		<div class="content">
			<?php echo article_markdown(); ?>
		</div>
	</article>

	<?php if(comments_open()): ?>

        <div id="disqus_thread"></div>
            <script>
            /**
            * RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            * LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
            */

            var disqus_config = function () {
                this.page.url = <?php echo current_url(); ?>; // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = <?php echo article_id(); ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');

            s.src = '//aaronfoleynet.disqus.com/embed.js';

            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	<?php endif; ?>

<?php theme_include('footer'); ?>
