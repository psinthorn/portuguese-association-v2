<?php get_header(); ?>

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Past Events </h1>
    <!-- Traditional way to show category or author -->
          <!-- 
      <h1 class="page-banner__title"> <?php the_archive_title(); ?>

      <?php
            if (is_category()) {
                single_cat_title();
            }
            if (is_author()) {
                echo 'Post by: '; the_author();
            }
          ?> 


      </h1>
      -->


      <div class="page-banner__intro">
        <p>Recap of our past events around the world.</p>
      </div>
    </div>  
</div>

<div class="container container--narrow page-section">
    <?php 
        $today = date('Ymd');
            $pastEventsQuery = new WP_Query(array(
                'paged' => get_query_var('paged', 1),
                // 'posts_per_page' => 1, (wordpress default is 10)
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '<',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

        while ($pastEventsQuery->have_posts()) {
            $pastEventsQuery->the_post();
            get_template_part('partials/content', 'event'); 
        }

        echo paginate_links(array(
            'total' => $pastEventsQuery->max_num_pages
        ));
    ?>

    <hr class="section-break" />
    <p>All future popular events. <a href="<?php echo site_url('/events'); ?>">Click here.</a> </p>  
</div>


<?php get_footer(); ?>