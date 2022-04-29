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
        <!-- <div class="p-sidebar__nav">
            <ul class="p-sidebar___list">
                <li class="p-sidebar___item"><a href="#">バーガー</a>
                    <ul class="p-sidebar___subList">
                        <li><a href="#">ハンバーガー</a></li>
                        <li><a href="#">チーズバーガー</a></li>
                        <li><a href="#">テリヤキバーガー</a></li>
                        <li><a href="#">アボガドバーガー</a></li>
                        <li><a href="#">フィッシュバーガー</a></li>
                        <li><a href="#">ベーコンバーガー</a></li>
                        <li><a href="#">チキンバーガー</a></li>
                    </ul>
                </li>
                <li class="p-sidebar___item"><a href="#">サイド</a>
                    <ul class="p-sidebar___subList">
                        <li><a href="#">ポテト</a></li>
                        <li><a href="#">サラダ</a></li>
                        <li><a href="#">ナゲット</a></li>
                        <li><a href="#">コーン</a></li>
                    </ul>
                </li>
                <li class="p-sidebar___item"><a href="#">ドリンク</a>
                    <ul class="p-sidebar___subList">
                        <li><a href="#">コーラ</a></li>
                        <li><a href="#">ファンタ</a></li>
                        <li><a href="#">オレンジ</a></li>
                        <li><a href="#">アップル</a></li>
                        <li><a href="#">紅茶（Ice/Hot）</a></li>
                        <li><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
                </li>
            </ul>
        </div>
