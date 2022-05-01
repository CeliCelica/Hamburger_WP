<?php get_header(); ?>

<body class="c-grid__container" id="js-container">
    <?php get_template_part('includes/header'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            if (has_post_thumbnail()) :
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src($id, 'full');
            else :
                $img = array(get_template_directory_uri() . '/images/single/pagetop_page.jpg');
            endif;
            ?>
            <main class="single l-main c-grid__main">
                <h1 class="p-main p-main__topImages" style="background-image: url('<?php echo $img[0]; ?>');">
                    <a class="p-main__topTitle"><?php the_title(); ?></a>
                </h1>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>