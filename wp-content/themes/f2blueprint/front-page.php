<?php 
get_header(); 
homePageBanner();
?>
    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">

      <?php 

           if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
       
          if($lang == 'pt'){
          ?>  
           <h2 class="headline headline--small-plus t-center"> Próximos eventos ... Ver todos os eventos </h2>
       
          <?php 
        } else {
          ?>
          
           <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
       
          <?php
        }
          ?>
         
          


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

        <?php 
              if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
          if($lang == 'pt'){
          ?>  
           <p class="t-center no-margin"> <a href="<?php echo get_post_type_archive_link('event'); ?>" 
            class="btn btn--blue" >Ver todos eventos</a></p>
       
          <?php 
        } else {
          ?>
          
          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" 
          class="btn btn--blue">View all events</a></p>
       
          <?php
        }
          ?>
          
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <?php 
             if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
          if($lang == 'pt'){
          ?>  
           <h2 class="headline headline--small-plus t-center"> do nosso blogue ... ver entradas blogue  </h2>
       
          <?php 
        } else {
          ?>
          
           <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
       
          <?php
        }
          ?>
                          
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

                 <?php 
               if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
          if($lang == 'pt'){
          ?>  
           <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">Ver todas entradas blogue</a></p>
       
          <?php 
        } else {
          ?>
          
          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View all blog posts</a></p>
       
          <?php
        }
          ?>
              

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

        </div>
        <div class="slider__bullets glide__bullets hide" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php get_footer(); ?>