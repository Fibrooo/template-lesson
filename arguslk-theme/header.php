<!doctype html>
<html lang="<?php bloginfo('language')?>">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <?php if(has_custom_logo()): the_custom_logo()?>
                <?php else: ?>
                    <a class="navbar-brand" href="<?php echo home_url()?>"> <?php bloginfo('name')?></a>
                <?php endif;?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php wp_nav_menu([
                        'theme_location' => 'header_menu',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'menu_class' => 'navbar-nav mr-auto',
                        'depth' => 1,
                        'walker' => new arguslk_menu_walker
                    ]) ?>

                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul> -->
                </div>
        </div>
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if(is_front_page()): ?>
                <div class="header_wrapper">
                    <div class="background">
                            <?php if(get_header_image()): ?>
                                <img src="<?php header_image() ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo get_custom_header()->url; ?>" alt="">
                            <?php endif; ?>
                    </div>
                    <div class="header_content">
                        <h4><?php bloginfo('description') ?></h4>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>