<?php
define('THEME_URI', get_template_directory_uri());

// Enable custom fields in functions.php
// add_filter('acf/settings/remove_wp_meta_box', '__return_false');
add_filter('show_admin_bar', '__return_false');
// add_action('admin_head', 'mw_hide_description_field');
// add_action('admin_notices', 'id_WPSE_114111');

add_action('admin_menu', 'remove_themes_menu_submenu_page', 999);


function mw_get_current_url()
{
  $protocol = is_ssl() ? 'https://' : 'http://';
  return ($protocol) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function mw_get_current_lang()
{
  return str_contains(mw_get_current_url(), site_url('/en')) ? 'en' : 'ru';
}

function mw_get_next_lang()
{
  return mw_get_current_lang() === 'en' ? 'ru' : 'en';
}

function mw_log($data)
{
  echo '<script>';
  echo 'console.log(' . json_encode($data) . ')';
  echo '</script>';
}

function mw_tel_sanitized($tel)
{
  echo preg_replace('/[(,), ,-]/', '', esc_html($tel));
}

function mw_hide_description_field()
{
  $screen = get_current_screen();

  if ($screen->id == 'edit-brand') {
    echo '<style>
            .term-description-wrap {
                display: none;
            }
        </style>';
  }
}

function mw_get_front_page_id()
{
  if (\get_option('show_on_front') !== 'page') {
    return 0;
  }

  return (int) \get_option('page_on_front');
}

function id_WPSE_114111()
{
  echo "<pre>";
  var_dump(get_current_screen());
  echo "</pre>";
}

function remove_themes_menu_submenu_page()
{
  // global $current_user;
  // $current_user = wp_get_current_user();
  // $user_name = $current_user->user_login;
  $customizer_url = add_query_arg('return', urlencode(remove_query_arg(wp_removable_query_args(), wp_unslash($_SERVER['REQUEST_URI']))), 'customize.php');
  $patterns_slug = 'site-editor.php?path=/patterns';

  remove_submenu_page('themes.php', $customizer_url);
  remove_submenu_page('themes.php', 'widgets.php');
  remove_submenu_page('themes.php', $patterns_slug);
  // remove_submenu_page('themes.php', 'theme-editor.php');

  if (strpos($_SERVER['REQUEST_URI'], 'customize.php') !== false) {
    wp_die(__('You do not have permission to access the Customizer.'));
  }
  if (strpos($_SERVER['REQUEST_URI'], 'widgets.php') !== false) {
    wp_die(__('You do not have permission to access Widgets.'));
  }
  if (strpos($_SERVER['REQUEST_URI'], 'site-editor.php') !== false) {
    wp_die(__('You do not have permission to access Site Editor.'));
  }
  // if (strpos($_SERVER['REQUEST_URI'], 'theme-editor.php') !== false) {
  //   wp_die(__('You do not have permission to access Theme Editor.'));
  // }
}

// add_action('admin_init', function () {
//   echo '<pre>' . print_r($GLOBALS['submenu'], true) . '</pre>';
// });
