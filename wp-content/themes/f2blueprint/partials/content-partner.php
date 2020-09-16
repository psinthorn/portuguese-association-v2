    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <?php 
            $today = date('Ymd');
            $listTwoMembersQuery = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'member',
                'order' => 'ASC',
            ));

            while($listTwoMembersQuery->have_posts()){
                $listTwoMembersQuery->the_post(); 
                get_template_part('partials/content', 'member');     
            }
        ?>


          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
            <?php 
            $today = date('Ymd');
            $listTwoMembersQuery = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'member',
                'order' => 'ASC',
            ));

            while($listTwoMembersQuery->have_posts()){
                $listTwoMembersQuery->the_post(); 
                get_template_part('partials/content', 'member');     
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