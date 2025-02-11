<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>

<?php global $options; ?>

<?php get_header(); ?>

<?php get_template_part("includes/detailling-services"); ?>
<section class="aboutS2">
    <div class="container-fluid p-0">
        <div class="row align-items-end gx-0">
            <div class="col-md-8 wow fadeInLeft">
                <div class="abts2Cnt">
                    <h2><?php echo $first_section['heading'];?></h2>
                    <div>
                        <p><?php echo $first_section['content'];?></p>
                        <a href="<?php echo $first_section['button_link'];?>"><?php echo $first_section['button_text'];?></a>
                    </div>
                </div>
                <div class="row gx-0">
                    <div class="col-md-6 wow zoomIn">
                        <figure><img src="<?php echo $first_section['image'];?>" alt=""></figure>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay="0.8s">
                        <div class="abts2pnt">
                            <div>
                                <?php $box_list = $first_section['box_list'];?>
                                <?php foreach ($box_list as $boxlist) {?>

                                <div class="pointsWrap">
                                    <h4><?php echo $boxlist['heading']; ?></h4>
                                    <p><?php echo $boxlist['content']; ?></p>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInRight">
                <div class="abtS2video">
                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                    <video src="<?php echo $first_section['video'];?>" poster="<?php echo $first_section['image_2'];?>"
                        id="videoplay"></video>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-s3">
    <div class="container">
        <div class="sec-title text-center wow zoomIn">
            <h6><?php echo $second_section['heading'];?></h6>
            <h2><?php echo $second_section['heading_2'];?></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft">
                <div class="about_Contact_Wrap">
                    <h3><?php echo $second_section['heading_3'];?></h3>

                    <?php echo do_shortcode('[contact-form-7 id="7461022" title="Form 2"]');?>
                </div>
            </div>
            <div class="col-md-5 offset-lg-1 offset-sm-0 wow fadeInRight">
                <div class="cta_abts3">
                    <div class="sec-title">
                        <h6><?php echo $second_section['heading_4'];?></h6>
                        <h2><?php echo $second_section['heading_5'];?></h2>
                    </div>
                    <ul class="cta-cont">
                        <li><?php echo $options['address'];?></li>
                        <li><a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></li>
                        <li><a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a></li>
                    </ul>
                    <ul class="social-icons">
                        <li><a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $options['twitter'];?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo $options['dribble'];?>" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="<?php echo $options['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>