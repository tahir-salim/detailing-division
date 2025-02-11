<?php /** * Template Name: Home Template */ ?>

<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fifth_section = get_field('fifth_section');?>
<?php $sixth_section = get_field('sixth_section');?>
<?php $seventh_section = get_field('seventh_section');?>
<?php $eight_section = get_field('eight_section');?>

<?php get_header(); ?>
<div class="mainBanner" style="background-image: url('<?php echo $banner_section['image'];?>');">
    <div class="bannerDiv" style="background-image: url('<?php echo $banner_section['image_2'];?>');">
        <ul class="list">
            <li><a href=""><i class="fal fa-shopping-cart icon1"></i></a></li>
            <li><a href=""><i class="fal fa-images icon1"></i></a></li>
            <li><a href=""><i class="fal fa-window icon1"></i></a></li>
        </ul>
        <div class="myContainer wow fadeInUp">
            <div class="row align-item-end">
                <div class="col-md-10">
                    <h2 class="MyHeading"><?php echo $banner_section['heading'];?></h2>
                    <h1 class="bannerHeading">
                        <?php echo $banner_section['sub_heading'];?>
                    </h1>
                </div>
                <div class="col-md-2">
                    <div class="target-arrow">
                        <a class="para"
                            href="<?php echo $banner_section['button_link'];?>"><?php echo $banner_section['button_text'];?></a>
                        <i class="fal fa-arrow-down icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo $banner_section['video'];?>" type="video/mp4">
    </video>
</div>

<section class="firstSection">
    <div class="container-fluid p-lg-0">
        <div class="row align-items-end g-0">
            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-md-3 wow zoomIn" data-wow-delay="0.4s">
                <div class="car-box" style="background-image: url('<?php echo $boxlist['image']; ?>');">
                    <div class="txt">
                        <h2 class="MyHeading"><?php echo $boxlist['heading']; ?></h2>

                        <a href=""><i class="fal fa-arrow-right icon"></i></a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="secondSection">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="full-ser">
                    <h4 class="sub-heading"><?php echo $second_section['heading'];?></h4>
                    <h2 class="heading"><?php echo $second_section['heading_2'];?></h2>
                    <h3 class="MyHeading"><?php echo $second_section['heading_3'];?></h3>
                    <p class="para"><?php echo $second_section['content'];?></p>
                    <div class="flex">
                        <div class="flexDiv">
                            <i class="fal fa-phone fa-rotate-90 icon"></i>
                        </div>
                        <div>
                            <a
                                href="tel:<?php echo $second_section['number'];?>"><?php echo $second_section['number'];?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full-sercimage">
                    <img src="<?php echo $second_section['image'];?>" alt="" class="image1 wow zoomIn">
                    <img src="<?php echo $second_section['image_2'];?>" alt="" class="image wow fadeInRight"
                        data-wow-delay="0.4s">
                </div>
            </div>
        </div>
        <div class="per-quality">
            <div class="row">
                <?php $box_list = $second_section['box_list'];?>
                <?php foreach ($box_list as $boxlist) {?>
                <div class="col-md-3">
                    <div class="Qualities wow zoomIn">
                        <img src="<?php echo $boxlist['image']; ?>" alt="">
                        <h2 class="anOther"><?php echo $boxlist['heading']; ?></h2>
                        <p class="anPara"><?php echo $boxlist['sub_heading']; ?></p>
                        <a href="<?php echo $boxlist['button_link']; ?>"><?php echo $boxlist['button_text']; ?></a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="waterMark">
        <h2 class="waterMarkHeading">
            <marquee loop="INFINITE"><?php echo $second_section['heading_4'];?></marquee>
        </h2>
    </div>
</section>

<section class="thirdSection" id="catch">
    <div class="container-fluid p-0">
        <div class="row align-items-center g-0 ">
            <?php $box_list = $third_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-md-6 text-center wow fadeInLeft">
                <div class="car-wash" style="background-image: url('<?php echo $boxlist['image']; ?>');">
                    <h3 class="sub-heading"><?php echo $boxlist['heading']; ?></h3>
                    <h2 class="heading"><?php echo $boxlist['sub_heading']; ?></h2>
                    <a href="<?php echo $boxlist['button_link']; ?>"
                        class="myAnchor"><?php echo $boxlist['button_text']; ?></a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<?php get_template_part("includes/testi-incl"); ?>

<section class="fifthSection">
    <div class="container">
        <div class="row">
            <?php $box_list = $fifth_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div class="col-md-3">
                <div class="project-div animate_number">
                    <h2 class="showHeading animie_value"><?php echo $boxlist['heading']; ?></h2>
                    <span class="small-heading"><?php echo $boxlist['para']; ?></span>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="sixthSection">
    <div class="container">
        <h3 class="sub-heading wow fadeInDown"><?php echo $sixth_section['heading'];?></h3>
        <h2 class="heading wow fadeInUp"><?php echo $sixth_section['sub_heading'];?></h2>
        <div class="row">
            <?php    $x=1;  $args = array( 'post_type' => 'article' , 'posts_per_page' => '3','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-md-4 wow fadeInLeft">
                <div class="artcl-div">
                    <h5 class="sub-heading"><?php the_title() ;?></h5>
                    <p class="para"><?php echo get_the_date('M d, Y') ;?></p>
                    <h3 class="small-heading"><?php the_excerpt() ;?></h3>
                    <div class="img-box"><img src="<?php the_post_thumbnail_url() ;?>" alt=""></div>
                    <a href="<?php the_permalink() ;?>"><span>Read More</span><i
                            class="fal fa-arrow-right icon"></i></a>
                </div>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section class="eightSection">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-6 wow zoomIn">
                <img src="<?php echo $eight_section['image'];?>" alt="">
            </div>
            <div class="col-md-4 wow fadeInRight">
                <div class="contact-us">
                    <h3 class="sub-heading"><?php echo $eight_section['heading'];?></h3>
                    <h2 class="heading"><?php echo $eight_section['sub_heading'];?></h2>

                    <?php echo do_shortcode('[contact-form-7 id="782f05f" title="Contact form 1"]');?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ninthSection">
    <div class="container-fluid p-0">
        <div class="ninthDiv wow zoomIn" data-wow-delay="2.0s">
            <i class="fab fa-instagram icon"></i>
        </div>
        <div class="row">
            <?php $box_list = $seventh_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div class="col-md-2 px-0">
                <div class="cars-img wow zoomIn" data-wow-delay="0.2s">
                    <img src="<?php echo $boxlist['image']; ?>" alt="" class="image">
                </div>
            </div>
            <?php }?>
        </div>
</section>

<a id="button"></a>
<?php get_footer(); ?>