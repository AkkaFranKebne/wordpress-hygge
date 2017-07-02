<?php 


// adding feature image_type_to_extension
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 100, 50, true );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// sidebars

register_sidebars( 4, array( 'name' => 'Sidebar %d' ) );

// add custom post type

Include 'post-types/headerPhoto.php';
register_post_type('post-types/headerPhoto', 'headerPhoto');





?>


