<?php 

// FONCTION POUR AJOUTER LE LIEN ADMIN AU MENU 
function add_admin_link_to_menu( $items, $args ) 
{ 
    if ( is_user_logged_in() ) 
    { $dashboard_url = admin_url(); 
        $admin_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-66 current_page_item parent hfe-creative-menu menu-admin"><a href="' . $dashboard_url . '">Admin</a></li>'; 
        $items_array = explode( '</li>', $items ); 
        array_splice( $items_array, 1, 0, $admin_link );
        $items = implode( '</li>', $items_array ); 
    } return $items; 
} 

// 10 = valeur par défaut (priorité)| 2 = nombre d'arguments du callback 
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

function theme_enqueue_style()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_style');