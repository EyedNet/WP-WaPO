<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://seconsultorweb.ml
 * @since      1.0.0
 *
 * @package    Wp_Wapo
 * @subpackage Wp_Wapo/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Wapo
 * @subpackage Wp_Wapo/public
 * @author     Peter   <yormabusiness@gmx.com>
 */
class Wp_Wapo_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Wapo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Wapo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-wapo-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Wapo_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Wapo_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-wapo-public.js', array( 'jquery' ), $this->version, false );

	}
	
        function scripts_footer() 
        {
                remove_action('wp_head','wp_print_scripts');
                remove_action('wp_head','wp_print_head_scripts', 9);
                remove_action('wp_head','wp_enqueue_scripts', 1);
                
        }

        function deregister_jsembed()
        { 
                wp_deregister_script( 'wp-embed' );
        }
        
        function ayala_eyednet()
        {
               remove_action('wp_head', 'wp_generator');
               remove_action('wp_head', 'rsd_link'); 
               remove_action('wp_head','wlwmanifest_link'); 
               remove_action('wp_head','wp_shortlink_wp_head'); 
               remove_action ('wp_head', 'rel_canonical');
               remove_action('wp_head', 'feed_links_extra', 3 );
               remove_action('wp_head', 'feed_links', 2 ); 
               remove_action('wp_head','wp_shortlink_wp_head', 10, 0 ); 
               remove_action( 'wp_head','print_emoji_detection_script', 7 ); 
               remove_action('admin_print_scripts', 'print_emoji_detection_script' ); 
               remove_action('wp_print_styles', 'print_emoji_styles' );
               remove_action('admin_print_styles', 'print_emoji_styles' );
               remove_action('wp_head', 'start_post_rel_link', 10,0 ); 
               remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
               remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
               remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
               remove_action('wp_head', 'rest_output_link_wp_head', 10);
               remove_action('template_redirect', 'rest_output_link_header', 11, 0);
        
        }

}
