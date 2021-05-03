<?php

function enqueue_parent_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');


// add_action('wp_enqueue_scripts', 'my_custom_script_load');
// function my_custom_script_load()
// {
//   wp_enqueue_script('my-login-script', get_stylesheet_directory_uri() . '/login-scripts', array('jquery'));
// }



// require get_template_directory() . '/inc/themefarmer-functions.php';

// require get_theme_file_path('inc/themefarmer-functions.php');

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


// Add read_private_posts capability to subscriber
// function add_sub_caps()
// {
//   global $wp_roles;

//   $role = get_role('subscriber');
//   $role->add_cap('read_private_posts');
// }
// add_action('admin_init', 'add_sub_caps');

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


// handle login ajax request
// add_action('wp_ajax_custom_login', 'handle_custom_login');
// function handle_custom_login()
// {
//   $param = isset($_REQUEST['param']) ? trim($_REQUEST['param']) : "";

//   if ($param == "login_test") {
//     $info = array();
//     $info['user_email'] = $_POST['user_email'];
//     $info['user_pass'] = $_POST['user_pass'];

//     $user_signon = wp_signon($info, false);

//     if (is_wp_error($user_signon)) {
//       echo json_encode(array("status" => 0));
//     } else {
//       echo json_encode(array("status" => 1));
//     }
//   }

//   wp_die();
// }


// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);