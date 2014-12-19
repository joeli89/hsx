<?php 
get_header(); 
?>

<!-- ===== START OF PROFILE ===== -->
    <?php
      $args = array(
        'post_type' => 'profile'
        );
      $query = new WP_Query($args);
      if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); 

    ?>

    <!-- ===== START OF PROFILE ===== -->

        <div class="row profile overlay black" style="background-image: url('<?php the_field('background_image'); ?>');">
            <div class="row ">
              <div class="col-md-4 col-md-offset-4 text-center profile-section">
                  <img class='img-circle profile-pic animated fadeIn duration-3' src="<?php the_field('profile_image'); ?>">
                <h1 class="animated fadeInUp delay-1"><?php bloginfo('name'); ?></h1>
                <h3 class="animated fadeInUp delay-1"><?php the_field('position'); ?> <br><span>@ <?php the_field('gym_name'); ?> </span></h3>
                <a href="<?php the_field('gym_website'); ?> ">
                  <?php if( get_field('gym_logo') ): ?>
                    <img class="img-circle gym-pic animated fadeInUp delay-1" src="<?php the_field('gym_logo'); ?>">
                  <?php endif; ?>
                </a>
                
                  <h3 class="animated fadeInUp delay-2 ">
                    <hr>
                    <?php if( !dynamic_sidebar('social')): ?>
                      <p>Please add widgets via the admin area.</p>
                    <?php endif; ?>
                    <hr>
                  </h3>
      
              </div>
          </div>
        </div>
      <?php endwhile; endif; wp_reset_postdata();?>
    <!-- ===== END OF PROFILE ===== -->


    <!-- ======= START OF PROGRAMS ========= -->
    <section>
      <div class="container programs">

          <h2 class="text-center"><i class="ion-clipboard"></i> Programs</h2>
              <hr>

          <div class="row text-center" id="program-filters">
            <div class="col-md-12">
              <button class="btn btn-default filter" data-filter="all">All</button>
              <button class="btn btn-default filter" data-filter=".program">Programs</button>
              <button class="btn btn-default filter" data-filter=".meal">Meal Plans</button>
            </div>
          </div>

            <div class="row">

              <div id="Container">

                  <?php 

                  foreach($programs as $program) { ?>

                  <div class='col-sm-6 col-md-4 mix <?php echo $program["filter"]; ?>'>
                    <div class="thumbnail">
                      <img src='<?php echo $program["image"]; ?>' alt="...">
                      <div class="caption">
                        <h3><?php echo $program["name"]; ?></h3>
                        <p><?php echo $program["caption"]; ?></p>
                        <p><a href="#" class="btn btn-default" data-toggle="modal" data-target='#<?php echo $program["modalId"]; ?>' role="button">Preview</a> <a href="#" class="btn btn-default" role="button">Buy</a></p>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $program["modalId"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $program["name"]; ?></h4>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-4">
                                    <img src='<?php echo $program["image"]; ?>' alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                                      Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                                      Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-default">BUY NOW</button>
                              </div>
                            </div>
                          </div>
                        </div> <!-- end of modal -->

                      </div>
                    </div>
                  </div>

                  <?php } ?>


              </div> <!-- end ID Container -->

        </div> <!-- end row -->

      </div>
    </section>
    <!-- ======= END OF PROGRAMS ========= -->

    <!-- ==== BLOG ==== -->
    <section class="blog">
      <div class="container">

        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="text-center">
              <a href="home.php"><h2><i class="ion-ios7-chatbubble"></i> Blog</h2></a>
              <hr>
            </div>
          </div>
        </div>

        <div class="row blog-body">

          <div class="row">
              <?php 
                $args = array(
                  'posts_per_page' => 3,
                  'category_name' => 'featured'
                  );
                $query = new WP_Query($args);

                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
              ?>

                <div class="media-body col-xs-12 col-md-4 ">
                  <div class="posts">
                    <a class="media-left media-middle" href="<?php the_permalink(); ?>">
                      <?php if( get_the_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
                      <?php endif; ?>
                    </a>
                    <a href="<?php the_permalink(); ?>"><h3 class="media-heading"><?php the_title(); ?></h3></a>
                    <hr>
                      <p class="about-post">
                        <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?> by <?php the_author_posts_link(); ?> | 
                        <i class="ion-ios7-calendar-outline"></i> <?php the_time('F j, Y'); ?> | 
                        <i class="ion-ios7-pricetags"></i> <?php the_category( ', ' ); ?>
                      </p>

                    <p class="excerpt">
                      <?php echo strip_tags( get_the_excerpt()); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"><button class="btn btn-default">VIEW</button></a>
                  </div>
                </div>
              <?php endwhile; endif; wp_reset_postdata();?>
          </div>  

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <a href="http://localhost:8888/hsx/blog/">
              <button class="btn btn-default">view blog <i class="ion-chevron-right"></i></button>
            </a>
          </div>
        </div>



      </div> <!-- end of container -->

    </section>
<!-- ======= END OF BLOG ========= -->


<!-- ====== CONTACT FORM ====== -->

  <section id="contact">

        <div class="container"> <!-- Start Container -->
            <div class="row"> <!-- Start Row -->
                <div class="col-md-10 col-md-offset-1">
                
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div id="form" class="contact-form">

                            <div class="text-center contact-top-text">
                              <h3>Contact Form</h3>
                              <span class="fa fa-angle-double-down fa-2x"></span>
                            </div>
                            <!-- CONTACT FORM -->
                            <?php if( !dynamic_sidebar('contactform')): ?>
                              <p>Please add widgets via the admin area.</p>
                            <?php endif; ?>
                            <!-- END CONTACT FORM -->
                        </div>
                        
                    </form>

                </div>
            </div> <!-- End Row -->
        </div><!-- End Container -->

    </section>

<!-- ======= END OF CONTACT ========= -->






<?php get_footer(); ?>