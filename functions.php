<?php

if (current_user_can('administrator')) {
    add_filter('edit_post_link', '__return_false');
    add_filter('show_admin_bar', '__return_false');
}

remove_action('load-update-core.php', 'wp_update_themes');
add_post_type_support('page', 'excerpt');
add_theme_support('post-thumbnails');

/* 【管理画面】WordPress のご利用ありがとうございます。を削除 */
add_filter('admin_footer_text', 'custom_admin_footer');
function custom_admin_footer()
{
}

add_action('admin_menu', 'remove_admin_footer_version');
function remove_admin_footer_version()
{
    remove_filter('update_footer', 'core_update_footer');
}

// add_filter('woocommerce_enqueue_styles', '__return_empty_array');

add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);
function remove_dns_prefetch($hints, $relation_type)
{
    if ('dns-prefetch' === $relation_type) {
        return array_diff(wp_dependencies_unique_hosts(), $hints);
    }
    return $hints;
}

/** remove css */
add_action('wp_print_styles', 'remove_default_css');
function remove_default_css()
{
    wp_deregister_style('select2');
    wp_deregister_style('wp-block-library');
    wp_deregister_style('wp-block-library-theme');
    wp_deregister_style('wc-blocks-style');
    wp_deregister_style('wc-blocks-vendors-style');
    wp_deregister_style('dashicons');
    wp_deregister_style('buttons');
    wp_deregister_style('forms');
    wp_deregister_style('l10n');
    wp_deregister_style('login');
    wp_deregister_style('global-styles');
    wp_deregister_style('edit_account_jp4wc');
    wp_deregister_style('classic-theme-styles');
    wp_deregister_style('contact-form-7');
}

/** remove wp_head default action **/
add_action('init', 'remove_wp_head_actions');
function remove_wp_head_actions()
{
    /** disable wp_head.. **/
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);

    /** disable do_feed_* **/
    remove_action('do_feed_rdf', 'do_feed_rdf');
    remove_action('do_feed_rss', 'do_feed_rss');
    remove_action('do_feed_rss2', 'do_feed_rss2');
    remove_action('do_feed_atom', 'do_feed_atom');

    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_action('wp_print_styles', 'print_emoji_styles');

    add_filter('emoji_svg_url', '__return_false');
    //add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    //add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );
}

add_action('wp_enqueue_scripts', 'tbp_enqueue_scripts', 100);
function tbp_enqueue_scripts()
{
    wp_enqueue_script('awesomefont', 'https://kit.fontawesome.com/aefa595b2a.js', array(), null, true);
}

add_action('wp_head', 'header_stylecss_include');
function header_stylecss_include()
{
    $styleurl = get_bloginfo("stylesheet_url");
    $styletime = filemtime(get_stylesheet_directory() . '/style.css');
    echo '<link rel="stylesheet" id="mhc-main" href="',$styleurl,'?',$styletime,'" />';
}

/** カテゴリページのタイトルから "カテゴリ:"の接頭語を削除する */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    return $title;
});

/* SHORT CODE [INCLUDE_PHP file='mhc-ui'] */
add_shortcode('INCLUDE_PHP', 'sc_include__php');
function sc_include__php($params = array())
{
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}

add_shortcode('pluginhandles', 'dp_display_pluginhandles');
function dp_display_pluginhandles()
{
    $wp_styles = wp_styles();
    $wp_scripts = wp_scripts();
    $handlename = '<dl><dt>Queuing scripts</dt><dd><ul>';
    foreach($wp_styles->queue as $handle) :
        $handlename .=  '<li>' . $handle .'</li>';
    endforeach;
    $handlename .= '</ul></dd>';
    $handlename .= '<dt>Queuing styles</dt><dd><ul>';
    foreach($wp_scripts->queue as $handle) :
        $handlename .=  '<li>' . $handle .'</li>';
    endforeach;
    $handlename .= '</ul></dd></dl>';
    return $handlename;
}


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

/* 自動保存を停止する */
add_action('wp_print_scripts', 'disable_autosave');
function disable_autosave()
{
    wp_deregister_script('autosave');
}

/* 2ページ目以降が404 */
function pagenavi_home($wp_query)
{
    if (!is_admin() && $wp_query->is_main_query() && $wp_query->is_home()) {
        $wp_query->set('cat', 5);
        $wp_query->set('post_type', 'iisys');
        $wp_query->set('posts_per_page', 12);
    }
}
add_action('pre_get_posts', 'pagenavi_home');

function the_slug()
{
    global $post;
    if (is_home()) {
        return 'home';
    } elseif (is_page()) {
        $page_slug = get_page_uri($post->ID);
        return esc_attr($page_slug);
    } elseif (is_category()) {
        $categories = get_the_category($post->ID);
        $category_slug = $categories[0]->slug;
        return esc_attr($category_slug);
    } else {
        return null;
    }
}
