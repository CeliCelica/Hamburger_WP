<!-- <?php if( ! is_front_page() ): ?>
    <?php endif; ?> -->
    <footer class="l-footer p-footer c-grid__footer">
<?php
wp_nav_menu(
  array (
    'theme_location' => 'footer_menu',
    'container' => false,
    'menu_class' => 'p-footer__list',
  )
);
?>
        <!-- <ul class="p-footer__list">
            <li>ショップ情報</li>
            <li>ヒストリー</li>
        </ul> -->
        <p class="p-footer__copyright"><small>Copyright: RaiseTech</small></p>
    </footer>
<?php wp_footer(); ?>
</body>
</html>