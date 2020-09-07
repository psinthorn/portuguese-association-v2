<?php get_header(); ?>

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/city-of-angle.png'); ?>"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">All Events </h1>
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
        <p>All events around the world.</p>
      </div>
    </div>  
</div>

<div class="container container--narrow page-section">
    <?php 
        while (have_posts()) {
            the_post();
            get_template_part('partials/content', 'event');       
        }

        echo paginate_links();
    ?>

    <hr class="section-break" />
    <p>Looking for our past events. <a href="<?php echo site_url('past-events'); ?>">recap all past events here.</a> </p>   
</div>


<?php get_footer(); ?>