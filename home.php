
<!-- this file is called Home; but its really Blog Post page.  I'll fix it later. -->
<?php get_header(); ?>

		<div id="primary" class="content-area">
			<div class="primary-inner">
				<div id="content" class="site-content content-list" role="main">
		
		<?php if ( have_posts() ) : ?>
		    <?php /* Start the Loop */ ?>

			 <?php echo ("<h2>$pagename</h2>"); ?> 

			<!-- Control # of Posts Displayed -->
			  <?php $recent_posts = get_posts('numberposts=100');
				if($recent_posts) { ?>
				    <ul>
			    
				<!-- Loop through posts and display title -->
				    <?php foreach( $recent_posts as $recent ) { ?>
				        
				          <a href="<?php echo get_permalink($recent->ID); ?>"><?php echo ("<h4>$recent->post_title</h4>"); ?></a>
				       
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
