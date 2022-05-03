<?php get_header(); ?>

<body class="archive c-grid__container" id="js-container">
    <?php get_template_part('includes/header'); ?>
    <main class="l-main c-grid__main">
        <h1 class="p-main p-main__topImages">
            <div class="p-main__background">
                <a class="p-main__topTitle">Search:<span><?php wp_title(''); ?></span></a>
            </div>
        </h1>
        <?php query_posts($query_string.'&posts_per_page=5'); ?>
        <?php if (have_posts()): ?>
          <section class="p-main__description">
            <h2>
              <?php
                if (isset($_GET['s']) && empty($_GET['s'])) {
                  echo '検索キーワードが未入力です。';
                } else {
                  echo ''.$_GET['s'] .'の検索結果：'.$wp_query->found_posts .'件';
                }
              ?>
            </h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </section>
            <?php
              while (have_posts()) :
              the_post();
            ?>
            <figure class="p-card">
            <?php
              if(has_post_thumbnail()):
                the_post_thumbnail("full");
              else:
            ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/archive/img_card.jpg' ); ?>" alt="" />
            <?php endif; ?>
                    <div>
                        <figcaption class="p-card__textBox c-card__text">
                            <h3><?php the_title(); ?></h3>
                            <h4><?php get_h2(); ?></h4>
                            <p><?php get_p(); ?></p>
                        </figcaption>
                        <div class="u-position__card">
                            <a class="p-card__link c-button__button" href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </div>
                </figure>
                <?php endwhile; ?>
            <?php else: ?>
                <section class="p-main__description">
           <h2><?php echo ''.$_GET['s'] .'の検索結果：'.$wp_query->found_posts .'件'; ?></h2>
           <p>お探しのページは見つかりませんでした。</p>
<?php endif; ?>
        <?php wp_pagenavi(); ?>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>