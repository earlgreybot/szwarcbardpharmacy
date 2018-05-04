<?php
/*
changes the default text for describing posts to instead refer to them as announcements in the dashboard
based on the code described here
https://stackoverflow.com/questions/12949722/change-label-posts-to-articles-in-wordpress
*/

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Announcements';
    $submenu['edit.php'][5][0] = 'Announcements';
    $submenu['edit.php'][10][0] = 'Add Announcements';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Announcements';
        $labels->singular_name = 'Announcement';
        $labels->add_new = 'Add Announcement';
        $labels->add_new_item = 'Add Announcement';
        $labels->edit_item = 'Edit Announcement';
        $labels->new_item = 'Announcement';
        $labels->view_item = 'View Announcement';
        $labels->search_items = 'Search Announcements';
        $labels->not_found = 'No Announcements found';
        $labels->not_found_in_trash = 'No Announcements found in Trash';
		$labels->name_admin_bar = 'Add Announcement'; 
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

?>