<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Anatolii Lukavenko</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--favicon icons link-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">
    <!--main links-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea-basic/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/skins/<?php $options = get_option('sample_theme_options'); echo $options['selectinput']; ?>.css"  />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/media.css" />
    <?php wp_head(); ?>

</head>

<body>
     <!--Page preloader-->
<div class="loader">
    <div class="loader-inner"></div>
</div>
    <!--Header with paralax efect-->
<header class="main-head main-color-bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg_5.jpg" data-z-index="0" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="logo-container">
                    <?php dynamic_sidebar('logo'); ?>
                </div>


                <button class="toggle-mnu">
					<span class="sandwich">
						<span class="sw-topper"></span>
						<span class="sw-bottom"></span>
						<span class="sw-footer"></span>
					</span>
                </button>

                <nav class="top-mnu">
                    <ul>
                        <li><a href="#about">About me</a></li>
                        <li><a href="#resume">resume</a></li>
                        <li><a href="#portfolio">portfolio</a></li>
                        <li><a href="#contacts">contacts</a></li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>

    <div class="top-wrapper">
        <div class="top-descr">
            <div class="top-centered">
                <div class="top-text">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <p><?php echo get_bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>

</header>