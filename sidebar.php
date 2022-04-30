<nav class="l-sidebar p-sidebar c-grid__sidebar">
        <h2 class="p-sidebar__button" id="js-sidebar__button">
            <span class="p-sidebar__Menu">Menu</span>
            <span class="p-sidebar__line p-sidebar__line--1"></span>
            <span class="p-sidebar__line p-sidebar__line--2"></span>
        </h2>
<?php
wp_nav_menu(
	array (
		'theme_location' => 'side_menu',
		'container_class' => 'p-sidebar__nav',
        'menu_class' => 'p-sidebar___list'
	)
);
?>
    <div class="p-sidebar__blackBack" id="js-blackBack"></div>
</nav>