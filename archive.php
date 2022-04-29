<?php get_header(); ?>

<body class="archive c-grid__container" id="js-container">
    <?php get_template_part('includes/header'); ?>
    <main class="l-main c-grid__main">
        <h1 class="p-main p-main__topImages">
            <div class="p-main__background">
                <a class="p-main__topTitle">Menu:<span><?php wp_title(''); ?></span></a>
            </div>
        </h1>
        <section class="p-main__description">
            <h2><?php wp_title(''); ?></h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </section>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <figure class="p-card">
                <?php
  if(has_post_thumbnail()):
    the_post_thumbnail("full");
  else:
?>
<img src="<?php echo get_template_directory_uri(); ?>/images/archive/img_card.jpg" alt="" />
<?php endif; ?>
                    <div>
                        <figcaption class="p-card__textBox c-card__text">
                            <h3><?php the_title(); ?></h3>
                            <h4>小見出しが入ります</h4>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </figcaption>
                        <div class="u-position__card">
                            <a class="p-card__link c-button__button" href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </div>
                </figure>
            <?php endwhile; ?>
        <?php endif; ?>


        <!-- </figure>
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
        </figure> -->
        <table class="p-page">
            <tbody>
                <tr>
                    <td class="p-page__pageNumber">page 1/10</td>
                    <?php
                    $link = get_previous_posts_link('&laquo;<span>前へ</span>');
                    if ($link) {
                        $link = str_replace('<a', '<td class="p-page__prev"><a ', $link);
                        echo $link;
                    }
                    ?>
                    <td class="p-page__number"><a href="#">1</a></td>
                    <td class="p-page__number"><a href="#">2</a></td>
                    <td class="p-page__number"><a href="#">3</a></td>
                    <td class="p-page__number"><a href="#">4</a></td>
                    <td class="p-page__number"><a href="#">5</a></td>
                    <td class="p-page__number"><a href="#">6</a></td>
                    <td class="p-page__number"><a href="#">7</a></td>
                    <td class="p-page__number"><a href="#">8</a></td>
                    <td class="p-page__number"><a href="#">9</a></td>
                    <?php
                    $link = get_next_posts_link('<span>次へ</span>&raquo;');
                    if ($link) {
                        $link = str_replace('<a', '<td class="p-page__next"><a ', $link);
                        echo $link;
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>