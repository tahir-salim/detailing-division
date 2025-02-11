<?php $first_section = get_field('first_section');?>
<?php global $options; ?>
<?php /** * Template Name: Interior Cleaning Template */ ?>
<?php get_header(); ?>
<section class="serv-det1">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="servWrap wow fadeInLeft">
                    <figure><img src="<?php echo $first_section['image'];?>" alt=""></figure>
                    <?php echo $first_section['content'];?>
                    <div class="row gx-3">
                        <div class="col-md-6">
                            <figure><img src="<?php echo $first_section['image_2'];?>" alt=""></figure>
                        </div>
                        <div class="col-md-6">
                            <figure><img src="<?php echo $first_section['image_3'];?>" alt=""></figure>
                        </div>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p>
                        <h4>Aliquam quis lobortis quam</h4>
                        <p>Curabitur pellentesque odio magna, id malesuada arcu sodales ut. Sed sed quam ut ex bibendum
                            commodo id id magna. Aliquam sed ligula sed ante blandit volutpat. Ut bibendum, nisi et mattis
                            vulputate, odio arcu aliquet metus, nec dapibus risus risus quis lectus.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                            amet.</p> -->
                    <div class="abtS2video">
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <video src="<?php echo $first_section['file'];?>"
                            poster="<?php echo $first_section['image_4'];?>" id="videoplay"></video>
                    </div>
                    <!-- <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr.</p> -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-act wow fadeInUp">
                    <h4>GET IN TOUCH</h4>
                    <?php echo do_shortcode('[contact-form-7 id="fce35d4" title="Form 3"]');?>
                    <h4 class="form-heading">CONTACT INFO</h4>
                    <div class="flex">
                        <div>
                            <i class="fal fa-map-marker-alt icon1"></i>
                        </div>
                        <div>
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <i class="fal fa-envelope icon1"></i>
                        </div>
                        <div>
                            <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        </div>
                    </div>
                    <div class="flex">
                        <div>
                            <i class="fal fa-mobile icon1"></i>
                        </div>
                        <div>
                            <a
                                href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>