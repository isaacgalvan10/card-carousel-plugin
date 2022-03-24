<?php
/*
  Plugin Name: Card Carousel IG
  Plugin URI: https://github.com/isaacgalvan10/card-carousel-plugin
  Description: Card Carousel plugin test
  Version: 0.1
  Author: Isaac Galvan
  Author URI: https://github.com/isaacgalvan10
  Text Domain: Card Carousel IG
*/

function create_em_cards_cpt() {
  $labels = array(
      'name' => __( 'EM Cards', 'Post Type General Name', 'em_cards' ),
      'singular_name' => __( 'EM Cards', 'Post Type Singular Name', 'em_cards' ),
      'menu_name' => __( 'EM Cards', 'em_cards' ),
      'name_admin_bar' => __( 'EM Cards', 'em_cards' ),
      'add_new' => __( 'Add New', 'em_cards' ),
      'add_new_item' => __( 'Add New Card', 'em_cards' ),
      'new_item' => __( 'New card', 'em_cards' ),
      'edit_item' => __( 'Edit card', 'em_cards' ),
      'view_item' => __( 'View card', 'em_cards' ),
      'view_items' => __( 'View cards', 'em_cards' ),
      'search_items' => __( 'Search Cards', 'em_cards'),
      'all_items' => __( 'All cards', 'em_cards' ),
      'featured_image' => __('Featured Image', 'em_cards'),
      'set_featured_image' => __('Set Featured Image', 'em_cards'),
      'remove_featured_image' => __('Remove Featured Image', 'em_cards'),
      'use_featured_image' => __('Use as Featured Image', 'em_cards'),
      'not_found' => __( 'No cards found.', 'em_cards' ),
      'not_found_in_trash' => __( 'No cards found in Trash.', 'em_cards' ),
      'archives' => __( 'Cards archives', 'em_cards' ),
      'attributes' => __( 'Card Attributes', 'em_cards'),
      'parent_item_colon' => __( 'Parent Card', 'em_cards'),
      'insert_into_item' => __('Insert Into Card', 'em_cards'),
      'uploaded_to_this_item' => __('Uploaded to Card', 'em_cards'),
      'items_list' => __('Cards list', 'em_cards'),
      'items_list_navigation' => __('Cards list navigation', 'em_cards'),
      'filter_items_list' => __('Filter Cards List', 'em_cards')
  );     
  $args = array(
      'labels' => $labels,
      'description' => 'Card custom post type.',
      'supports' => array( 'title', 'excerpt', 'thumbnail', 'custom-fields' ),
      'public' => true,
      'exclude_from_search' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'cards' ),
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'show_in_rest' => true
  );
    
  register_post_type( 'em_cards', $args );
}

add_action( 'init', 'create_em_cards_cpt' );

function register_card_block() {
  // wp_register_script( 'card-block-js', get_template_directory_uri() './js/card-block.js', array());

  // register_block_type( 'em_cards/cards', array(
  //   'editor_script' => 'card-block-js'
  // ));

  register_block_type(__DIR__);
}

add_action( 'init', 'register_card_block' );