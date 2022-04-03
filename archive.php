<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Hamburger Menu</title>
    <meta name="description" content="オシャレで美味しいハンバーガーのお店">
    <meta charset="UTF-8">
    <!-- ファビコン -->
    <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body class="archive c-grid__container" id="js-container">
    <header class="l-header c-grid__header u-display__header">
        <h1 class="p-header__logo">Hamburger</h1>
        <form class="p-form" action="サイトURL" method="get">
            <input class="p-form__box c-button__box" type="search" name="search" placeholder=""/>
            <input class="p-form__button c-button__button" type="submit" name="submit" value="検索" />
        </form>
    </header>
    <main class="l-main c-grid__main">
            <h1 class="p-main p-main__topImages">
                <div class="p-main__background">
                    <a class="p-main__topTitle">Menu:<span>チーズバーガー</span></a>
                </div>
            </h1>
        <section class="p-main__description">
            <h2>小見出しが入ります</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </section>
        <figure class="p-card">
            <img class="c-card__img" src="images/archive/img_card.jpg" alt="チーズバーガー">
            <div>
                <figcaption class="p-card__textBox c-card__text">
                    <h3>チーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </figcaption>
                <div class="u-position__card">
                    <a class="p-card__link c-button__button" href="#">詳しく見る</a>
                </div>
            </div>
        </figure>
        <figure class="p-card">
            <img class="c-card__img" src="images/archive/img_card.jpg" alt="ダブルチーズバーガー">
            <div>
                <figcaption class="p-card__textBox c-card__text">
                    <h3>ダブルチーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </figcaption>
                <div class="u-position__card">
                    <a class="p-card__link c-button__button" href="#">詳しく見る</a>
                </div>
            </div>
        </figure>
        <figure class="p-card">
            <img class="c-card__img" src="images/archive/img_card.jpg" alt="スペシャルチーズバーガー">
            <div>
                <figcaption class="p-card__textBox c-card__text">
                    <h3>スペシャルチーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </figcaption>
                <div class="u-position__card">
                    <a class="p-card__link c-button__button" href="#">詳しく見る</a>
                </div>
            </div>
        </figure>
        <table class="p-page">
            <tbody>
                <tr>
                    <td class="p-page__pageNumber">page 1/10</td>
                    <td class="p-page__prev"><a href="#">&laquo;<span>前へ</span></a></td>
                    <td class="p-page__number"><a href="#">1</a></td>
                    <td class="p-page__number"><a href="#">2</a></td>
                    <td class="p-page__number"><a href="#">3</a></td>
                    <td class="p-page__number"><a href="#">4</a></td>
                    <td class="p-page__number"><a href="#">5</a></td>
                    <td class="p-page__number"><a href="#">6</a></td>
                    <td class="p-page__number"><a href="#">7</a></td>
                    <td class="p-page__number"><a href="#">8</a></td>
                    <td class="p-page__number"><a href="#">9</a></td>
                    <td class="p-page__next"><a href="#"><span>次へ</span>&raquo;</a></td>
                </tr>
            </tbody>
        </table>
    </main>
    <nav class="l-sidebar p-sidebar c-grid__sidebar">
        <h2 class="p-sidebar__button" id="js-sidebar__button">
            <span class="p-sidebar__Menu">Menu</span>
            <span class="p-sidebar__line p-sidebar__line--1"></span>
            <span class="p-sidebar__line p-sidebar__line--2"></span>
        </h2>
        <div class="p-sidebar__nav">
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
        <div class="p-sidebar__blackBack" id="js-blackBack"></div>
    </nav>
    <footer class="l-footer p-footer c-grid__footer">
        <ul class="p-footer__list">
            <li>ショップ情報</li>
            <li>ヒストリー</li>
        </ul>
        <p class="p-footer__copyright"><small>Copyright: RaiseTech</small></p>
    </footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="css/style.js"></script>
</body>
</html>