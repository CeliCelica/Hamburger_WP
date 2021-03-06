<?php
    //テーマサポート
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );

    function hamburger_script() {
        wp_enqueue_style( 'destyle', '//cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css', array() );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'script', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array() );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery-3.6.0.min.js', array(), '1.0.0' );
        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/css/style.js', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    register_nav_menus(
        array(
            'side_menu' => 'サイドメニュー',
            'footer_menu' => 'フッターメニュー'
        )
    );
    
    // クラス名を削除
    function remove_nav_class($class) {
        return $class = array();
    }
    add_filter("nav_menu_css_class", "remove_nav_class");
    // id名を削除
    function remove_nav_id($id) {
        return $id = array();
    }
    add_filter("nav_menu_item_id", "remove_nav_id");

    // メイン画像上にテンプレートごとの文字列を表示
    function get_main_title() {
        if ( is_singular( 'post' ) ):
            $category_obj = get_the_category();
            return $category_obj[0]->name;
        elseif ( is_page() ):
            return get_the_title();
        elseif ( is_category() ):
            return single_cat_title();
        endif;
    }

    // アイキャッチ画像を利用できるようにする
    add_theme_support( 'post-thumbnails' );

    add_filter( 'wp_img_tag_add_width_and_height_attr', '__return_false' );
    add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

//　投稿・カスタム投稿を古い順に表示させたい
function change_old( $query ) {
    $query->set('order', 'ASC');
    $query->set('orderby', 'date' );
}
add_action( 'pre_get_posts', 'change_old' );

//　検索結果のタイトルをカスタマイズ
function wp_search_title($search_title){
    if(is_search()){
      $search_title = ''.get_search_query().'';
    }
    return $search_title;
  }
  add_filter('wp_title','wp_search_title');




//カード部分の取得
function get_h2() {
    global $post;
    if(preg_match('/<h2>.+<\/h2>/u', $post->post_content, $match)){
        echo $match[0];
    } else {
        echo "<h2>Sorry no text</h2>";
    }
}
function get_p() {
    global $post;
    if(preg_match('/<p>.+<\/p>/u', $post->post_content, $match)){
        echo $match[0];
    } else {
        echo "<p>Sorry no text</p>";
    }
}





