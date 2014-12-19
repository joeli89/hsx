<?php get_header(); ?>

<div class="blog-single">
<div class="container">

  	<div class="col-md-3 left-side-bar">

  		<?php dynamic_sidebar('single'); ?>

    </div> <!-- end col-md-3 -->


    <div class="col-md-9">

    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<div class="single-body text-center">
		    	<h2><?php the_title();?></h2>
				<hr>
					<p class="about-post">
						<?php echo get_avatar( get_the_author_meta('ID'), 24, array('class'=>'img-circle') ); ?> by <?php the_author_posts_link(); ?> | 
						<i class="ion-ios7-calendar-outline"></i> <?php the_time('F j, Y'); ?> | 
						<i class="ion-ios7-pricetags"></i> <?php the_category( ', ' ); ?>
					</p>
				<hr>
				<?php if( get_the_post_thumbnail() ): ?>
					<?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?>
				<?php endif; ?>

				<?php the_content(); ?>
			</div>

			<!-- Comments -->

			<?php comments_template(); ?>

      
        <?php endwhile; endif; ?>

    </div> <!-- end col-md-8 -->

  </div> <!-- end row -->

</div><!--  end container -->
</div>

<?php get_footer(); ?>