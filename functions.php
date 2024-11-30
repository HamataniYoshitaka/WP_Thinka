<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function horiken_theme_support()
{

  // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Custom background color.
    add_theme_support(
        'custom-background',
        array(
      'default-color' => 'fff',
    )
    );

    // Set content-width.
    global $content_width;
    if (! isset($content_width)) {
        $content_width = 580;
    }

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    )
    );

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // 管理バーの非表示
    add_filter('show_admin_bar', '__return_false');
}

add_action('after_setup_theme', 'horiken_theme_support');


/**
 * WordPressのデフォルトのメニューで不要なものを削除
 */
function remove_menus()
{
    // remove_menu_page( 'index.php' );                 // ダッシュボード
  // remove_menu_page( 'edit.php' );                  // 投稿メニュー
  // remove_menu_page( 'upload.php' );                // メディア
  // remove_menu_page( 'edit.php?post_type=page' );   // ページ追加
  remove_menu_page('edit-comments.php');            // コメントメニュー
  // remove_menu_page( 'themes.php' );                // 外観メニュー
  // remove_menu_page( 'plugins.php' );               // プラグインメニュー
  // remove_menu_page( 'tools.php' );                 // ツールメニュー
  // remove_menu_page( 'options-general.php' );       // 設定メニュー
}

add_action('admin_menu', 'remove_menus');



/**
 * Register and Enqueue Styles.
 */
function horiken_register_styles()
{
    $theme_version = wp_get_theme()->get('Version');
    $dir = get_stylesheet_directory_uri();

    wp_enqueue_style('horiken-style-reset', $dir . '/assets/css/reset.css', array(), $theme_version);
    wp_enqueue_style('horiken-style-common', $dir . '/assets/css/common.css', array( 'horiken-style-reset' ), $theme_version);

    // 各ページのCSSを読み込み
    if (is_front_page()) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/top.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_page('interview1') || is_page('interview2')) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/interview1.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_page('company2') || is_page('privacy-policy')) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/company.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_post_type_archive('works')) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/news.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_post_type_archive('flow')) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/flow.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_home()) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/news.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_category()) {
        wp_enqueue_style('horiken-style-post', $dir . '/assets/css/pages/news.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_tax()) {
        wp_enqueue_style('horiken-style-post', $dir . '/assets/css/pages/news.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_singular('works')) {
        wp_enqueue_style('horiken-style-post', $dir . '/assets/css/pages/single-works.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_singular('flow')) {
        wp_enqueue_style('horiken-style-post', $dir . '/assets/css/pages/single-flow.css', array( 'horiken-style-common' ), $theme_version);
    } elseif (is_page()) {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/' . get_post()->post_name . '.css', array( 'horiken-style-common' ), $theme_version);
    } else {
        wp_enqueue_style('horiken-style-page', $dir . '/assets/css/pages/single.css', array( 'horiken-style-common' ), $theme_version);
    }
    wp_enqueue_style('horiken-style-tailwind', $dir . '/assets/css/tailwind.css', array( 'horiken-style-reset' ), $theme_version);

}

add_action('wp_enqueue_scripts', 'horiken_register_styles');



/**
 * Register and Enqueue Scripts.
 */
function horiken_register_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    $dir = get_stylesheet_directory_uri();

    wp_enqueue_script('horiken-script-jquery', $dir . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', false);
    wp_enqueue_script('horiken-script-main', $dir . '/assets/js/main.js', array('horiken-script-jquery'), $theme_version, false);

    // 各ページのJavaScriptを読み込み
    if (is_front_page()) {
        wp_enqueue_script('horiken-script-page', $dir . '/assets/js/pages/top.js', array( 'horiken-script-common' ), $theme_version);
    } elseif (is_home()) {
        wp_enqueue_script('horiken-script-page', $dir . '/assets/js/pages/news.js', array( 'horiken-script-common' ), $theme_version);
    } elseif (is_page()) {
        wp_enqueue_script('horiken-script-page', $dir . '/assets/js/pages/' . get_post()->post_name . '.js', array( 'horiken-script-common' ), $theme_version);
    } elseif (is_singular()) {
        wp_enqueue_script('horiken-script-post', $dir . '/assets/js/posts/news.js', array( 'horiken-script-common' ), $theme_version);
    } else {
        wp_enqueue_script('horiken-script-page', $dir . '/assets/js/pages/news.js', array( 'horiken-script-common' ), $theme_version);
    }
}

add_action('wp_enqueue_scripts', 'horiken_register_scripts');




function my_mwform_after_send6($Data6) {
	$form_key6 = $Data6->get_form_key('6');
	if($form_key6 === 'mw-wp-form-6') {
		wp_redirect('/thanks');
		exit;
	}
}
add_action('mwform_after_send_mw-wp-form-6', 'my_mwform_after_send6');



function my_mwform_after_send7($Data7) {
	$form_key7 = $Data7->get_form_key('7');
	if($form_key7 === 'mw-wp-form-7') {
		wp_redirect('/thanks');
		exit;
	}
}
add_action('mwform_after_send_mw-wp-form-7', 'my_mwform_after_send7');



function my_mwform_after_send8($Dat8) {
	$form_key8 = $Data8->get_form_key('8');
	if($form_key8 === 'mw-wp-form-8') {
		wp_redirect('/thanks');
		exit;
	}
}
add_action('mwform_after_send_mw-wp-form-8', 'my_mwform_after_send8');



function generate_table_of_contents($content) {
    // 投稿の内容を正規表現で<h2>タグに基づいて分割
    preg_match_all('/<h2>(.*?)<\/h2>/', $content, $matches);

    if (count($matches[1]) > 0) {
        $toc = '<div class="table-of-contents"><h2>目次</h2><ul>';

        foreach ($matches[1] as $index => $title) {
            $anchor = 'toc-' . $index;
            // 見出しタグにアンカーを追加
            $content = str_replace($matches[0][$index], '<h2 id="' . $anchor . '">' . $title . '</h2>', $content);
            // 目次にリンクを追加
            $toc .= '<li><a href="#' . $anchor . '">' . $title . '</a></li>';
        }

        $toc .= '</ul></div>';

        // 目次を投稿の最初に挿入
        $content = $toc . $content;
    }

    return $content;
}

// フィルターを追加して、投稿の内容をフック
add_filter('the_content', 'generate_table_of_contents');

// cf7の自動pタグを無効化
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}
