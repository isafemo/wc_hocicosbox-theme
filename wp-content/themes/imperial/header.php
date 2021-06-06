<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="main-container">

        <?php get_template_part( 'layouts/imperial', 'topheader' ); ?>
        <?php get_template_part( 'layouts/imperial', 'header' ); ?>

	    <div id="content" class="site-content">
