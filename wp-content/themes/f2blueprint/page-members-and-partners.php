<?php get_header(); 
    pageBanner();
?>

    <div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Our Members</h2>     
            <?php  showPostListQuery(array('posttype'=>'member', 'perpage'=>'4')); ?>
    </div>
    </div>

      <div class="full-width-split__two">
        <div class="full-width-split__inner">
           <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Our Partners</h2>

            <?php  showPostListQuery(array('posttype'=>'partner', 'perpage'=>'4')); ?>
                </div>
            </div>  
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">


        <?php 
            $today = date('Ymd');
            $spotlightListQuery = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'spotlight',
                // 'meta_key' => 'event_date',
                // 'orderby' => 'meta_value_num',
                'order' => 'ASC',
            ));

            while($spotlightListQuery->have_posts()){
                $spotlightListQuery->the_post(); 
                get_template_part('partials/content', 'spotlight');     
            }
        ?>

          <!-- <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/portugal-slide-03.png'); ?>">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">GASTRONOMY OF PORTUGAL</h2>
                <p class="t-center">World class culinary and award winning wine</p>
                <p class="t-center no-margin"><a href="http://portugueseasso.local/gastronomy-of-portugal/" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/portugal-slide-02.png'); ?>">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">PORTUGAL FOR FAMILIES</h2>
                <p class="t-center">The perfect destination for the entire family</p>
                <p class="t-center no-margin"><a href="http://portugueseasso.local/slides/portugal-for-families/" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/portugal-slide-01.png'); ?>">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">PORTUGAL HIGHLIGHTS</h2>
                <p class="t-center">Wellness trips, shopping tours or honeymooners, we will definitely find the perfect tour for
you. </p>
                <p class="t-center no-margin"><a href="http://portugueseasso.local/slides/portugal-highlights/" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div> -->


        </div>
        <div class="slider__bullets glide__bullets hide" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php get_footer(); ?>