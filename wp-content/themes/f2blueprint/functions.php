<?php 
// Page and post banner auto selection 
    function pageBanner($args = NULL) {
        if (!$args['title']) {
            $args['title'] = get_the_title(); 
        }
        if (!$args['subtitle']) {
            $args['subtitle'] = get_field('page_banner_sub_title');
        }

        if (!$args['photo']) {
            if (get_field('page_banner_background_image')) {
                 $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner']; 
            } else {
                 $args['photo'] = get_theme_file_uri('/images/portuguese-wall.png');
            }
           
        }
    ?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'] ?>"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
            <div class="page-banner__intro">
                <p><?php echo $args['subtitle']; ?></p>
            </div>
            </div>  
        </div>

    <?php 
    }
    
    function f2_blueprint_files() {
        // wp_enqueue_script('primary-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,'1.0', true );
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('fonts-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('bootsrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
        //wp_enqueue_style('primary_main_files', get_stylesheet_uri());

        if (strstr($_SERVER['SERVER_NAME'], 'portugueseasso.local')) {
             wp_enqueue_script('primary-main-js', 'http://localhost:3000/bundled.js', NULL,'1.0', true );
        } else {
            wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
            wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.17900f7e9b3a86b999f2.js'), NULL, '1.0', true);
            wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.17900f7e9b3a86b999f2.css'));
        }
        
    }
    add_action('wp_enqueue_scripts', 'f2_blueprint_files');


    function f2_blueprint_features() {
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerLinksOne', 'Footer Location Links One');
        register_nav_menu('footerLinksTwo', 'Footer Location Links Two');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('teamworkLandscape', 400, 260, true);
        add_image_size('teamworkPortrait', 480, 650, true);
        add_image_size('pageBanner', 1500, 350, true);
    }
    add_action('after_setup_theme', 'f2_blueprint_features');


    function content_adjust_queries($query) {
        if (!is_admin() AND is_post_type_archive() AND $query->is_main_query()){
            $query->set('posts_per_page', -1);
            $query-> set('orderby', 'title');
            $query-> set('order', 'ASC');
        }

        if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
            $today = date('Ymd');
            // $query-> set('posts_per_page', -1);
            $query-> set('meta_key', 'event_date');
            $query-> set('orderby', 'meta_value_num');
            $query-> set('order', 'ASC');
            $query-> set('meta_query', array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                ));
        }   
    }

    add_action('pre_get_posts', 'content_adjust_queries');

    // function f2BlueprintMapApi($api){

    //     $api['key'] = 'AIzaSyD5orD6SnOan3U1J3OSsNYTP2NJfwFsqrc';
    //     return $api;
    // }

    // add_filter('acf/fields/google_map/api', 'f2BlueprintMapApi');

