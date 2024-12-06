<?php
/*----------------------------------------------------------
オリジナル関数を作成
*----------------------------------------------------------*/
function my_setup()
{
  //アイキャッチ画像を有効化※デフォルトだとアイキャッチ画像を挿入できない
  add_theme_support('post-thumbnails');

  //タイトルタグの自動生成
  add_theme_support('title-tag');

  //head内にフィードリンクを出力
  add_theme_support('automatic-feed-links');

  //埋め込みコンテンツをレスポンシブ対応に。自分でCSSを書かなくてもいい！
  add_theme_support('responsive-embeds');
}
// 関数が実行されるタイミングと実行する関数を記述する
add_action('after_setup_theme', 'my_setup');


// オリジナル関数「my_script」でCSS・JavaScript・jQueryを読み込み
function my_scripts()
{
  //ress.css
  wp_enqueue_style(
    'my-reset',
    get_template_directory_uri() . '/css/ress.min.css',
    array(),
    '1.0', //バージョン
    'all'
  );
  //style.css
  wp_enqueue_style(
    'base-style',
    // get_template_directory_uri() . '/Backup/20241127/style.css',
    get_template_directory_uri() . '/css/style.css',
    array('my-reset'), //ress.cssのあとに読み込む
    '2.0', //バージョン
    'all'
  );
  //work-detail.css
  if (is_single()) { // アーカイブページの場合のみスタイルを読み込む
    wp_enqueue_style(
      'work-style',
      get_template_directory_uri() . '/css/work-detail.css',
      array('my-reset', 'base-style'), // 依存する他のスタイルシート
      '1.0', // バージョン
      'all'
    );
  }
  // Googleアイコン 
  wp_enqueue_style(
    'Googleアイコン',
    'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200'
  );
  // デフォルトのjQueryを削除
  wp_deregister_script('jquery');
  // 使用したいjQuery
  wp_enqueue_script(
    'jquery',
    '//code.jquery.com/jquery-3.7.0.min.js',
    false
  );
  //index.js
  wp_enqueue_script(
    'index-js',
    get_template_directory_uri() . '/js/index.js',
    array('jquery'), //依存関係
    '1.0', //バージョン
    true //読み込み位置
  );
}
add_action('wp_enqueue_scripts', 'my_scripts');


/**
 * 記事一覧に記事行追加
 * add_custom_column()
 *
 * @param object $defaults defaults.
 * @return mixed
 */
function add_custom_column($defaults)
{
  $defaults['post_id'] = '記事ID';
  return $defaults;
}
add_filter('manage_posts_columns', 'add_custom_column');
/**
 * 記事一覧に記事ID挿入
 * add_custom_column_id()
 *
 * @param string $column_name column_name.
 * @param int    $id id.
 * @return mixed
 */
function add_custom_column_id($column_name, $id)
{
  if ('post_id' === $column_name) :
    echo esc_html($id);
  endif;
}
add_action('manage_posts_custom_column', 'add_custom_column_id', 10, 2);

// カスタムカラムを追加
function add_custom_column_to_custom_post_type($columns)
{
  $columns['post_id'] = '記事ID';
  return $columns;
}
add_filter('manage_edit-works_columns', 'add_custom_column_to_custom_post_type');

// カスタムカラムに記事IDを表示
function display_custom_column_content($column, $post_id)
{
  if ($column === 'post_id') {
    echo esc_html($post_id);
  }
}
add_action('manage_works_posts_custom_column', 'display_custom_column_content', 10, 2);

// パンくずリスト
function breadcrumb() {
  $home = '<li><a href="'.get_bloginfo('url').'" >HOME</a></li>';

  echo '<ul class="breadcrumb">';
  if ( is_front_page() ) {
      // トップページの場合は表示させない
  }
  // アーカイブ・タグページ
  else if ( is_archive() ) {
  echo $home;
  the_archive_title('<li>', '</li>');
  }
  // 投稿ページ
  else if ( is_single() ) {
  $cat = get_the_category();
      if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
      $cat_list = array();
      while ($cat_id != 0){
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
      }
      foreach($cat_list as $value){
          echo $value;
      }
      the_title('<li>', '</li>');
  }
  // 固定ページ
  else if( is_page() ) {
  echo $home;
  the_title('<li>', '</li>');
  }
  // 404ページの場合
  else if( is_404() ) {
  echo $home;
  echo '<li>ページが見つかりません</li>';
  }
  echo "</ul>";
}
// アーカイブのタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_month() ) {
      $title = single_month_title( '', false );
  }
  return $title;
});