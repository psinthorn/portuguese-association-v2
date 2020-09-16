<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/f979b6ac3c85e2a91da0acc0e/22c37e3e9d35cede55948e9f5.js");</script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url(); ?>">Portuguese<strong>Association</strong></a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">

         
          
          <ul>
              <li <?php 
              if (is_page('about-us') or wp_get_post_parent_id(0) == 12) { 
              echo 'class="current-menu-item"'; }?>>
              <a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>

              <!-- <li <?php if (get_post_type() == 'program') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('program'); ?>">Programs</a></li> -->

              

              <!-- <li <?php if (get_post_type() == 'field') echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('field'); ?>"><a href="<?php echo get_post_type_archive_link('field'); ?>">Fields</a></li> -->

               <li <?php if (is_page('members-and-partners') or wp_get_post_parent_id(0) == 184) echo 'class="current-menu-item"' ?> ><a href="<?php echo site_url('/members-and-partners'); ?>">Members & Partners</a></li>

                <li <?php 
              if (get_post_type() == 'thingtodo' or wp_get_post_parent_id(0) == 132 or is_page('thing-to-do')) echo 'class="current-menu-item"' ?>>
              <a href="<?php echo site_url('/thing-to-do'); ?>">Things To Do</a></li>

               <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>

              <li <?php 
              if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>>
              <a href="<?php echo site_url('/blog'); ?>">Blog</a></li>

               <li <?php 
              if (is_page('contact') or wp_get_post_parent_id(0) == 108) echo 'class="current-menu-item"' ?>>
              <a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
            
          </nav>
          <div class="site-header__util">
            <?php 
              if(is_user_logged_in()) { ?>
                <a href="<?php echo wp_logout_url() ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
                <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                <span class="btn__text">Log Out</span>
              </a>
            <?php  } else { ?>
               <a href="<?php echo wp_login_url() ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="<?php echo wp_registration_url() ?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <?php } ?>
           <!-- will update search funtion soonest -->
            <!-- <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
          </div>
        </div>
      </div>
    </header>
