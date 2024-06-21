
<product-grid>
	<h2 class='attention-voice'>Product grid</h2>

	<ol>
		<?php foreach ([1, 2, 3, 4, 1, 3] as $x) { ?>
			<li>
				<article class='product-card'>
					<picture>
						<img src="../images/landscape.jpg" alt="">
					</picture>

					<h1 class='name strong-voice'>Product title</h1>

					<p class='short-description'>Product description...</p>

					<a class='link' href='#'>Learn more about...</a>
				</article>
			</li>
		<?php } ?>
	</ol>
</product-grid>

<style>
	product-grid {
		ol {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
			gap: 40px 20px;

			margin-top: 20px;
		}
	}
</style>