<?php get_header(); ?>

		<div id="primary" class="content-area">
			<div class="primary-inner">
				<div id="content" class="site-content content-list" role="main">

		
	<?php if ( have_posts() ) : ?>

		    <?php /* Start the Loop */ ?>

			  <?php $recent_posts = get_posts('numberposts=100');
				if($recent_posts) { ?>
				    <ul>
			        <?php foreach( $recent_posts as $recent ) { ?>
				        <li>
				          <a href="<?php echo get_permalink($recent->ID); ?>"><?php echo $recent->post_title; ?></a>
				        </li>
			        <?php } ?>
				    </ul>
			  <?php } ?>

		     <?php dw_minion_content_nav( 'nav-below' ); ?>

	  <?php else : ?>

             <?php get_template_part( 'no-results', 'index' ); ?>

    <?php endif; ?>

                </div>
            </div>
        </div>

<?php get_footer(); ?>
