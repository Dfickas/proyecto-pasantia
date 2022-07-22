<?php
function your_script_enqueue()
{
   wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), NULL, true);

   wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', false, NULL, 'all');
   wp_enqueue_style('custom_style', get_stylesheet_uri() , array(), '1.0.0', 'all');
   wp_enqueue_style('blog_style', 'https://getbootstrap.com/docs/5.0/examples/blog/blog.css');
}

add_action('wp_enqueue_scripts', 'your_script_enqueue');


