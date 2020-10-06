    <!-- フッターエリア -->
    <footer>
      <?php
        $param = array(
          'container' => 'nav',
          'container_id' => 'fNav',
          'theme_location' => 'footer_nav',
        );
        wp_nav_menu($param);
      ?>
      <small id="copyright">&copy; 2020 ParadigmShift</small>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
