<?php

/**
 * Trigger this file on uninstall
 * @package Genesis
 */

 if (!defined('WP_UNINSTALL_PLUGIN')) { // security check to make sure user not access this script directly
    die;
 }

// Clear database stored data
$books = get_post(array('post_type' => 'book', 'numberposts' => -1)); // get all the posts for custom post

foreach($books as $book){ // collect each value in the array and store them in $book
   wp_delete_post($book -> ID, true); // true means to force delete even in trash 
}

// globe $wpdb; // allow the use of SQL
// $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'Book'") // delete all post for Book
// $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id from wp_posts)") // delete all post meta except existing posts
