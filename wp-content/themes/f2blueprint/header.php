<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

               <li <?php if (get_post_type() == 'member') echo 'class="current-menu-item"' ?> ><a href="<?php echo get_post_type_archive_link('member'); ?>">Our Members</a></li>

                <li <?php 
              if (get_post_type() == 'ppotlight') echo 'class="current-menu-item"' ?>>
              <a href="<?php echo site_url('/portugal-spotlight'); ?>">Spotlight</a></li>

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
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
