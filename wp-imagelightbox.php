<?php
/**
 * Plugin Name: ImageLightbox.js
 * Plugin URI: https://linge-ma.ro/wp-imagelightbox
 * Description: Responsive and Touch-Friendly Lightbox for Wordpress, JS by Osvaldas Valutis.
 * Version: r13
 * Author: Znuff
 * Author URI: https://linge-ma.ro
 * License: MIT
 */

function iljs_enqueue() {
   wp_enqueue_style('imagelightbox', plugin_dir_url(__FILE__).'imagelightbox.css', false, 'r13');
   wp_enqueue_script('imagelightbox', plugin_dir_url(__FILE__).'imagelightbox.js', array('jquery'), 'r13', true);
}

// adding the 'data-imagelightbox' attribute to the attachment links
function iljs_mod_tags ($content) {
   global $post;

   $pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
   $replacement = '<a$1href=$2$3.$4$5$6 data-imagelightbox>';
   $content = preg_replace($pattern, $replacement, $content);

   return $content;
}

function iljs_add_trigger () { ?>
<script>
jQuery('a[data-imagelightbox]').imageLightbox({
    animationSpeed: 125,                     // integer;
    activity:       true,                    // bool;            show activity indicator
    arrows:         true,                    // bool;            show left/right arrows
    button:         true,                    // bool;            show close button
    caption:        true,                    // bool;            show captions
    enableKeyboard: true,                    // bool;            enable keyboard shortcuts (arrows Left/Right and Esc)
    history:        false,                   // bool;            enable image permalinks and history
    fullscreen:     false,                   // bool;            enable fullscreen (enter/return key)
    navigation:     true,                    // bool;            show navigation
    overlay:        true,                    // bool;            display the lightbox as an overlay
    preloadNext:    true,                    // bool;            silently preload the next image
    quitOnDocClick: true,                    // bool;            quit when anything but the viewed image is clicked
    quitOnEscKey:   true,                    // bool;            quit when Esc key is pressed
    zoom:           true,
	});
</script>
<?php
}

// run only on posts, pages, attachments(?) and galleries, no reason to run on the front page, yet...?
function iljs_mod_content() {
   if (is_singular()) {
      
      // registering styles and scripts
      add_action( 'wp_enqueue_scripts', 'iljs_enqueue' );

      // adds the filter for single content images
      add_filter('the_content', 'iljs_mod_tags');

      // adds the filter for image galleries
      add_filter('wp_get_attachment_link','iljs_mod_tags');

      // add init script
      add_action('wp_footer', 'iljs_add_trigger', 9999);
   }
}

add_filter("template_redirect", "iljs_mod_content", 10, 1);
?>
