<?php

function enqueue_parent_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');


function team_members()
{
  $args = array(
    'labels' => array(
      'name' => 'Team Members',
      'singular_name' => 'Team Member'
    ),
    'public' => true,
    'has-archive' => true,
    'supports' => array('editor', 'thumbnail', 'title', 'page-attributes'),
    'hierarchical' => true,
    'menu_icon' => 'dashicons-admin-users',
    'publicly_queryable'  => true,
    'query_var'           => true,
    'rewrtie' => array('slug' => 'kontakter'),
  );

  register_post_type('kontakter', $args);
}
add_action('init', 'team_members');

// Redirect for single team_member to kontakter page 
function redirect_team_members_cpt()
{
  if (!is_singular('kontakter'))
    return;
  wp_redirect(get_home_url() . '/kontakter');
  exit;
}
add_action('template_redirect', 'redirect_team_members_cpt');


$subRole = get_role('subscriber');
$subRole->add_cap('read_private_posts');
$subRole->add_cap('read_private_pages');

// Remove "Private: " from private page titles
function remove_private_title_from_priavte_page_titles($title)
{
  $title = str_replace('Private: ', '', $title);
  return $title;
}
add_filter('the_title', 'remove_private_title_from_priavte_page_titles');


// Disable admin bar for all users except administrators
function remove_admin_bar_except_admins()
{
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}
add_action('after_setup_theme', 'remove_admin_bar_except_admins');



// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);