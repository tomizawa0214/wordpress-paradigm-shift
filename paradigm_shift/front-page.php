<?php get_header(); ?>
  <!-- コンテンツエリア -->
  <section id="contents">

  <!--メイン画像-->
  <img id="main_visual" class="inner" src="<?php echo CFS()->get('img_main_visual'); ?>" alt="株式会社ParadigmShift">

  <!--お知らせ-->
  <h2>Information</h2>
  <div class="inner">
    <ul id="infolist">
    <?php
      $posts = get_posts('numberposts=5&category_name=news');
      foreach ($posts as $post) {
        setup_postdata($post);
        ?>
        <li>
          <div class="thumb">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="date">
            <?php the_time("Y/m/d"); ?>
          </div>
          <div class="title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <?php edit_post_link(); ?>
        </li>
        <?php
      }
    wp_reset_postdata();
    ?>
    </ul>
    <a class="readmore" href="<?php echo get_category_link(get_cat_ID('お知らせ')); ?>">一覧へ</a>
  </div>

  <!--事業内容-->
  <h2>株式会社ParadigmShiftの事業内容</h2>
  <div id="our-business" class="inner">
    <div class="biz-box col-4">
      <h3><?php echo CFS()->get('txt_business1'); ?></h3>
      <a href="http://paradigmshift.local/business"><img class="photoframe" src="<?php echo CFS()->get('img_business1'); ?>" alt="<?php echo CFS()->get('txt_business1'); ?>"></a>
    </div>
    <div class="biz-box col-4">
      <h3><?php echo CFS()->get('txt_business2'); ?></h3>
      <a href="http://paradigmshift.local/business"><img class="photoframe" src="<?php echo CFS()->get('img_business2'); ?>" alt="<?php echo CFS()->get('txt_business2'); ?>"></a>
    </div>
    <div class="biz-box col-4">
      <h3><?php echo CFS()->get('txt_business3'); ?></h3>
      <a href="http://paradigmshift.local/business"><img class="photoframe" src="<?php echo CFS()->get('img_business3'); ?>" alt="<?php echo CFS()->get('txt_business3'); ?>"></a>
    </div>
  </div>
  </section>
  <!-- //コンテンツエリア -->
<?php get_footer(); ?>