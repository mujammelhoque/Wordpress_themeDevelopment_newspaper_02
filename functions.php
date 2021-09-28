<?php

define('CSS_ASSETS',get_template_directory_uri()."/assets/css");
define('JS_ASSETS',get_template_directory_uri()."/assets/js");
// define('ASSETS_IMAGES',get_template_directory_uri()."/assets/images");
// define('ASSETS_JS',get_template_directory_uri()."/assets/js");

    function newstoday_bootstrap(){
        wp_enqueue_style( 'bootstrap-css', CSS_ASSETS.'/bootstrap.min.css' );
        wp_enqueue_style( 'fontawesome-css', CSS_ASSETS.'/font-awesome.min.css' );
        wp_enqueue_style( 'animate-css', CSS_ASSETS.'/animate.css' );
        wp_enqueue_style( 'font-css', CSS_ASSETS.'/font.css' );
        wp_enqueue_style( 'scroller-css', CSS_ASSETS.'/li-scroller.css' );
        wp_enqueue_style( 'slick-css', CSS_ASSETS.'/slick.css' );
        wp_enqueue_style( 'jq-fancy-css', CSS_ASSETS.'/jquery.fancybox.css' );
        wp_enqueue_style( 'theme-css', CSS_ASSETS.'/theme.css' );
        wp_enqueue_style( 'style-css', CSS_ASSETS.'/style.css' );
        wp_enqueue_style( 'main-css', get_template_directory_uri().'/style.css' );
        // wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'),time(),true);
    }
    add_action( 'wp_enqueue_scripts', 'newstoday_bootstrap' );



function newstoday_bootstrapping(){
    load_theme_textdomain("newstoday");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    // $newstoday_custom_logo = array(
    //   "width"=>'100',
    //   "height"=>'100',
    // );
    // add_theme_support("custom-logo",$newstoday_custom_logo);
    $defaults = array(
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
  );

    add_theme_support( 'custom-logo', $defaults );
    add_theme_support("custom-header");
    register_nav_menu("topmenu", __("Top Menu", "newstoday"));
    register_nav_menu("footermenu", __("Footer Menu", "newstoday"));
    add_theme_support("post-formats", array("image","quote","video", "audio","link"));
}
add_action("after_setup_theme", "newstoday_bootstrapping");
    
    
    // function newstoday_bootstrap() {
    // wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    // wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css' );
    // wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    // wp_enqueue_style( 'font-css', get_template_directory_uri() . '/assets/css/font.css' );
    // wp_enqueue_style( 'jquery-fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
    // wp_enqueue_style( 'li-scroller-css', get_template_directory_uri() . '/assets/css/li-scroller.css' );
    // wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
    // wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css' );
    // wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css' );
    // //js
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.2', true );
    // wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '3.3.2:26', true );
    // // wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/assets/js/html5shiv.min.js', array(), '3.0.0', true );
    // wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array(), '3.3.2', true );
    // wp_enqueue_script( 'li-scroller-js', get_template_directory_uri() . '/assets/js/jquery.li-scroller.1.0.js', array(), '3.3.2', true );
    // wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.3.2', true );
    // wp_enqueue_script( 'newsTicker-js', get_template_directory_uri() . '/assets/js/jquery.newsTicker.min.js', array(), '3.3.2', true );
    // // wp_enqueue_script( 'respond-js', get_template_directory_uri() . '/assets/js/respond.min.js', array(), '3.0.0', true );
    // wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '3.3.2', true );
    // wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '3.3.2', true );

    // }
    // add_action( 'wp_enqueue_scripts', 'newstoday_bootstrap' );



   function newstoday_sidebar(){
    register_sidebar(
      array(
        'name' => __('Left Rss', 'newstoday'),
        'id' => 'sidebar-rss',
        'description' => __('left Sidebar', 'news'),
        'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after-_widget' => '</ul>',
        'before-title' => '<h2 class="widget-title">',
        'after-title' => '<h2>',
      )
    );
     
	register_sidebar(
		array(
			'name' => __('Header Adds', 'newstoday'),
			'id' => 'header-ads',
			'description' => __('Header ads right of the logo', 'newstoday'),
			'before-_widget' => '<ul id="%1$s" class="widget %2$s">',
      'after_widget' => '</ul>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
		)
	);
  register_sidebar(
		array(
			'name' => __('Sponsor ads', 'newstoday'),
			'id' => 'sponsor-ads',
			'description' => __('Header ads right of the logo', 'newstoday'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
		)
	);

        register_sidebar(
            array(
                'name'          =>__('Single Post Sidebar Right-1', 'newstoday'),
                'id'            => 'Right Sidebar-1',
                'description'   =>__('Right Sidebar', 'newstoday'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
                
            )
            );
        register_sidebar(
            array(
                'name'          =>__('Single Post Sidebar Right-2', 'newstoday'),
                'id'            => 'Right Sidebar-2',
                'description'   =>__('Right Sidebar', 'newstoday'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
                
            )
            );
        register_sidebar( array(
            'name' => 'Footer Sidebar 1',
            'id' => 'footer-sidebar-1',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
            register_sidebar( array(
            'name' => 'Footer Sidebar 2',
            'id' => 'footer-sidebar-2',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
            register_sidebar( array(
            'name' => 'Footer Sidebar 3',
            'id' => 'footer-sidebar-3',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
     }
    
     add_action('widgets_init', 'newstoday_sidebar');

     //for menu register
     function register_my_menus() {
        register_nav_menus(
          array(
            'My top menu' => __( 'My Top Menu' ),
            'header-menu' => __( 'Header Menu' ),
            'footer-bottom-menu' => __('Footer Bottom Menu'),
          )
        );
      }
      add_action( 'init', 'register_my_menus' );

      // function atg_menu_classes($classes, $item, $args) {
      //   if($args->theme_location == 'header-menu') {
      //     $classes[] = 'list-inline-item';
      //   }
      //   return $classes;
      // }
      // add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

      
function scl_simple_options_page() {
	?>
	<div class="wrap">
	<form method="post" id="scl_simple_options" action="options.php">
  <?php
  settings_fields('scl_simple_options');
  
  $options = get_option( 'scl_simple_options' );
  var_dump($options);
  
  //$d = get_option( 'recently_edited' );
  //var_dump($d);
  ?>
	<h2><?php _e('Sample Options' ); ?></h2>
  <table class="form-table">
  <tr>
  <th scope="row"><?php _e('Short Links' ); ?></th>
  <td colspan="3">
  <p> <label>
  <input type="text" id="show"
  name="scl_simple_options[show]" value="<?php echo esc_attr($options['show']); ?>" />
  </label></p>
  </td>
  </tr>
  <tr>
  <th scope="row"><?php _e('Admin Message' ); ?></th>
  <td colspan="3">
  <input size=150 type="text" id="google_meta_key"
  name="scl_simple_options[message]" value="<?php echo esc_attr($options['message']); ?>" />
  <br /><span class="description">
  </td>
  </tr>
  <tr>
  <th scope="row"><?php _e('Home page post column width' ); ?></th>
  <td colspan="3">
  <input size=150 type="text" id="google_meta_key"
  name="scl_simple_options[col]" value="<?php echo esc_attr($options['col']); ?>" />
  <br />
  </td>
  </tr>
  </table>
	<p class="submit">
	<input type="submit" value="<?php esc_attr_e('Update Options'); ?>"
	class="button-primary" />
	</p>
	</form>
	</div>
	<?php
	}
	add_action('admin_menu', 'scl_simple_options_add_pages');
	function scl_simple_options_add_pages() {
	add_options_page('Admin Message Form', 'Sample Options', 'manage_options', 'simple-options-example', 'scl_simple_options_page');
  register_setting( 'scl_simple_options', 'scl_simple_options' );    
  }
  // sample option end


  register_post_type('Gal',[

    'public'    =>  true,
    'labels'    =>  [

      'name'                 =>  'Gallery',
      'all_items'            =>  'All Gallery',
      'add_new'              =>  'Add New Gallery',
      'add_new_item'         =>  'Add Gallery',
      'featured_image'       =>  'Cover Photo',
      'set_featured_image'   =>   'Set Gallery Image',

    ],

      'supports'        =>  ['thumbnail','title'],
      'menu_icon'       =>  'dashicons-format-gallery',
      'menu_position'   =>  20,    

  ]);

 


