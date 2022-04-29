<?php get_header(); ?>
<body class="single page c-grid__container" id="js-container">
<?php get_template_part('includes/header'); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <?php
            if (has_post_thumbnail()) :
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src($id, 'full');
            else :
                $img = array(get_template_directory_uri() . '/images/page/pagetop_page.jpg');
            endif;
        ?>
    <main class="l-main c-grid__main">
        <h1 class="p-main p-main__topImages" style="background-image: url('<?php echo $img[0]; ?>');">
            <a class="p-main__topTitle"><?php the_title(); ?></a>
        </h1>
        <section class="p-main__description">
        <?php the_content(); ?>
            <!-- 
            <h2>見出しh2</h2>
            <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
        </section>
        <h3 class="p-main__title p-main__title--1">見出しh3</h3>
        <h4 class="p-main__title p-main__title--2">見出しh4</h4>
        <h5 class="p-main__title p-main__title--3">見出しh5</h5>
        <h6 class="p-main__title p-main__title--4">見出しh6</h6>
        <div class="p-main__quote">
            <blockquote>
                <p>引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
            </blockquote>
            <cite>出典元：<a href="">○○○○○○○○○○○○</a></cite>
        </div>
        <img class="p-main__imgLarge" src="images/single/img_large.jpg" alt="ハンバーガー大">
        <article>
            <figure class="p-article">
                <img class="p-article__img" src="images/single/img_medium.jpg" alt="ハンバーガー中">            
                <figcaption class="p-article__text--1 c-text">
                    <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                </figcaption>    
            </figure>
        </article>
        <article>
            <figure class="p-article">
                <img class="p-article__img" src="images/single/img_medium.jpg" alt="ハンバーガー中">            
                <figcaption class="p-article__text--2 c-text">
                    <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                </figcaption>    
            </figure>
        </article>
        <img class="p-gallery__only" src="images/single/img_medium.jpg" alt="ハンバーガー中">
        <div class="p-gallery">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
            <img src="images/single/img_small.jpg" alt="ハンバーガー小">
        </div>
        <div class="p-list c-text">
            <ol class="p-list__ol--1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <ol class="p-list__ol--2">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ol>
            <ol class="p-list__ol--3">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <ul class="p-list__ul--1">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <ul class="p-list__ul--2">
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ul>
            <ul class="p-list__ul--3">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
        </div>
        <pre class="p-main__code c-text">
            <code>
&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;
            </code>
        </pre>
        <div class="p-main__table">
            <table class="c-text">
                <tbody>
                    <tr>
                        <th>テーブル</th>
                        <th>テーブル</th>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td>テーブル</td>
                        <td>テーブル</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="p-main__button c-button__button" type="button">ボタン</button>
        <p class="p-main__bold c-text">boldboldboldboldboldboldbold</p> -->
    </main>
    <?php endwhile; ?>
  <?php endif; ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>