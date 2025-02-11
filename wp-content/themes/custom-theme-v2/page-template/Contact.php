<?php /** * Template Name: Contact Template */ ?>
<?php $second_section = get_field('second_section',11);?>
<?php get_header(); ?>
<section class="about-s3">
    <div class="container">
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
<?php get_template_part("includes/testi2-incl"); ?>
<?php get_footer(); ?>