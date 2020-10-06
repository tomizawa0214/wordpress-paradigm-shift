<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="株式会社ParadigmShiftの公式企業サイトです。事業内容、会社概要、個人情報保護の取り組みなどを掲載しています。">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_styleseet_directory_uri(); ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_styleseet_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>

<body>

  <!-- ページ全体の囲み枠 -->
  <div id="wrapper">

    <!-- ロゴマーク -->
    <header>
      <h1>株式会社ParadigmShift | 海外輸入とインターネット通販でお客様に幸せをお届けします。</h1>
      <div id="header-logo">
        <a href="index.html"><img src="img/header_logo.png" alt="株式会社ParadigmShift"></a>
      </div>
    </header>

    <!-- グローバルナビゲーション -->
    <nav id="gNav">
      <ul>
        <li class="current-menu-item"><a href="index.html">ホーム</a></li>
        <li><a href="business.html">事業内容</a></li>
        <li><a href="about.html">会社概要</a></li>
        <li><a href="contact.html">お問い合わせ</a></li>
      </ul>
    </nav>