<?php 
get_header(); 
pageBanner(array('title'=>'All past event(s)', 'subtitle'=>'Recap of our past events around the world.'));
?>


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