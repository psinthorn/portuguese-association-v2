
 <footer class="site-footer">
  
      <div class="site-footer__inner container">
      <div class="group">
         <p class="text-center pb-5">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_file_uri('/images/logo-white.png'); ?>" alt="Portuguese Association" style="width: 11rem">
          </a>
           </p>
        </div>
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url(); ?>"><strong>Portuguese</strong>Association</a>
            </h1>
            <!-- <p><a class="site-footer__link" href="tel:+971 55 5959935">+971 55 5959935</a></p> -->
            
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">

                    <!-- <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerLinksOne'
                        ));
                    ?> -->

                
                <ul>
                <li <?php 
              if (is_page('about-us') or wp_get_post_parent_id(0) == 12) { 
              echo 'class="current-menu-item"'; }?>>
              <a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>

               <li <?php if (get_post_type() == 'member') echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('member'); ?>">Our Members</a></li>

               <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>

              <li <?php 
              if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>>
              <a href="<?php echo site_url('/blog'); ?>">Blog</a></li>

               <li <?php 
              if (is_page('contact') or wp_get_post_parent_id(0) == 108) echo 'class="current-menu-item"' ?>>
              <a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                </ul>
               
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                   <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerLinksTwo'
                        ));
                    ?>

                <!-- 
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
                -->
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.facebook.com/Aurora-Agency-141107776579616/" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a>
                </li>
                <!-- <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>