
<graphic-diptych>
	<picture>
		<img src='../images/landscape.jpg' alt='$todo'>
	</picture>

	<text-content>
		<h2 class='attention-voice'>Heading</h2>

		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit voluptatem nesciunt consectetur voluptas.</p>

		<a class='button' href='#'>Call to action</a>
	</text-content>
</graphic-diptych>

<style>
	graphic-diptych {
		display: grid;
		gap: 20px;

		padding-block: clamp(100px, 8vh, 200px);

		@container (min-width: 700px) {
			grid-template-columns: 1fr 1fr;

			text-content {
				align-self: center;
			}
		}

		.flipped & {
/*			border: 4px solid green; */
			/* revisit */
		}

		.button {
			margin-top: 10px;
		}
	}

	.flipped {
		graphic-diptych {
			picture {
				order: 2;
			}
		}
	}

	.centered {
		graphic-diptych {
			text-content {
				display: grid;
				place-items: center;
				text-align: center;
			}
		}
	}
</style>