<!doctype html>

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title')?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <?php wp_head()?>
</head>

<header>
    <h1><a href="<?php echo home_url('localhost/wordpress/home')?>"><?php bloginfo('name')?></h1>
</header>

</nav>
    <?php wp_nav_menu();?>
</nav>

<div id="content_container">

