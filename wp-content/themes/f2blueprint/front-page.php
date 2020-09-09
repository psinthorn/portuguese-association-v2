<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/portuguese-banner-01.png'); ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you join us<strong>  to get</strong> you&rsquo;re special from us?</h3>
        <a href="<?php echo get_post_type_archive_link('program') ?>" class="btn btn--large btn--blue">Become A Member</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <?php 
            $today = date('Ymd');
            $listTwoEventsQuery = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

            while($listTwoEventsQuery->have_posts()){
                $listTwoEventsQuery->the_post(); 
                get_template_part('partials/content', 'event');     
            }
        ?>


          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
            <?php 
             $twoPostsQuery = new WP_Query(array(
                'posts_per_page' => 2
            ));
            while ($twoPostsQuery->have_posts()) {
                    $twoPostsQuery->the_post()  
             ?>
              <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>
                </a>
                <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else { 
                    echo wp_trim_words(get_the_content(), 18);
                } 
                ?>
                    <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                </div>
            </div>

             
            <?php      
                }
                wp_reset_postdata();
            ?>

          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>

        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/portugal-slide-03.png'); ?>">
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
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php get_footer(); ?>