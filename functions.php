<?php

// =========================================
// アイキャッチ画像を設定できるようにする
// =========================================
add_theme_support('post-thumbnails');

// =========================================
// 「続きへ」リンクを表示する
// =========================================
function my_excerpt_more( $more ) {
  // 現在の投稿UTLを取得
  $url = get_permalink();
  $html = '<a href="'. $url . '" class="readmore">続きへ</a>';
  return $html;
}
add_filter('excerpt_more', 'my_excerpt_more');

// =======================================
//	ページのスラッグを出力する
// =======================================
function the_slug() {
  $slug = '';
  // カテゴリーアーカイブページが表示されている場合
  if (is_category()) {
    $category = get_the_category(); // カテゴリーの情報を取得
    $slug = $category[0]->category_nicename; // カテゴリーのスラッグを取得
  }
  // それ以外のページが表示されている場合
  else {
    $id = get_the_ID(); // ページのIDを取得
    $page = get_post($id); // IDに該当するページの情報を取得
    $slug = $page->post_name; // ページのスラッグを取得
  }
  // スラッグを出力する
  echo $slug;
}

// =======================================
//	カスタムメニューを登録
// =======================================
$param = array(
  'global_nav' => 'グローバルナビゲーション',
  'footer_nav' => 'フッターナビゲーション'
);
register_nav_menus($param);

?>