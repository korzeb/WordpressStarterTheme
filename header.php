<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta charset="<?php bloginfo('charset') ?>">
<meta name="description" content="<?php bloginfo('description') ?>">
<meta name="keywords" content="">
<meta name="author" content="Łukasz Korzeb">
    
<?php if(is_search()) :?>
    <meta name="robots" content="noindex, nofollow" />
<?php endif; ?>

<title><?php bloginfo('name') ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> <!-- main style -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/#"> <!-- another styles -->

<script src="<?php echo THEME_URL ?>js/#"></script>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!-- WP_HEAD -->
<?php wp_head() ?>
<!-- END WP_HEAD -->
    
</head>
<body <?php body_class() ?>>
    <h1>To jest motyw strartowy wordpress-a.</h1>
    
    <!--
    <?php //echo THEME_DIR ?><br />
    <?php //echo THEME_URL ?>
    -->
    

