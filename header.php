<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="description" content="オシャレで美味しいハンバーガーのお店">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="c-grid__container" id="js-container">
    <header class="l-header c-grid__header u-display__header">
        <h1 class="p-header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        </h1>
        <?php get_search_form(); ?>
    </header>