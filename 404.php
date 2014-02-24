<?php get_header(); ?>

		<div id="primary" class="content-area">
			<div class="primary-inner">
				<div id="content" class="site-content" role="main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php _e( '{Error 404} You lost, feller?', 'dw-minion' ); ?></h1>
						</header>

						<div class="page-content">
							<p><?php _e( 'You don\'t look like you\'re from around here... maybe you better skedaddle.', 'dw-minion' ); ?></p>

							<?php get_search_form(); ?>
						</div>
					</section>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
