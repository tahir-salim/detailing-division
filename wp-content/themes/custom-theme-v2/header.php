<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="main-header">
            <div class="myContainer">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 text-left">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 text-end">
                        <div id="menuWrap">
                            <div class="wrapper">
                                <!-- <ul class="menu">
                                <li class="active different"><a href="./">Home</a></li>
                                <li class="different"><a href="about-us.php">About</a></li>
                                <li class="dropdown different">
                                    <a href="">Services</a>
                                    <ul class="dropdown-list">
                                        <li class="dropdown1">
                                            <a href="paint-enhancement.php">- Paint Enhancement</a>
                                            <ul class="dropdown-list1">
                                                <li><a href="service-detail.php">Polishing & Paint Correction</a></li>
                                                <li><a href="Complete-Car-Painting.php">Complete Car Painting</a></li>
                                                <li><a href="Ceramic-Coating.php">Ceramic Coating</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown1">
                                            <a href="#">- Interior Care</a>
                                            <ul class="dropdown-list1">
                                                <li><a href="Interior-Details.php">Interior Details</a></li>
                                                <li><a href="Interior-Cleaning.php">Interior Cleaning</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown1">
                                            <a href="paint-enhancement.php">- Exterior Care</a>
                                            <ul class="dropdown-list1">
                                                <li><a href="Exterior-Detail.php">Exterior Detail</a></li>
                                                <li><a href="Exterior-Cleaning.php">Exterior Cleaning</a></li>
                                                <li><a href="Car-Wash.php">Car Wash</a></li>
                                                <li><a href="Steam-Cleaning.php">Steam Cleaning</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown1">
                                            <a href="paint-enhancement.php">- Specialized Services</a>
                                            <ul class="dropdown-list1">
                                                <li><a href="Engine-Area-Cleaning.php">Engine Area - Cleaning</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="different"><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact-us.php" class="anchor one">Contact Us</a></li>
                            </ul> -->
                                <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>
            

        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>

        <section class="innerBanner">
            <div class="container text-center">
                <h1 class="wow fadeInLeft"><?php echo $banner_section['heading'];?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 wow fadeInRight">
                        <li class="breadcrumb-item"><a href="#"><?php echo $banner_section['home'];?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $banner_section['heading'];?></li>
                    </ol>
                </nav>
            </div>
        </section>
        <?php }?>