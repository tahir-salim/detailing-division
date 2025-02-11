<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>
<section class="articleSec">
    <div class="container">
        <div class="row rowing">
            <div class="col-md-10">
                <div class="servWrap wow fadeInLeft">
                    <figure><img src="<?php the_post_thumbnail_url() ;?>" alt=""></figure>
                    <?php the_content();?>
                    <!-- <h4>Sed ut perspiciatis unde omnis iste natus et</h4> -->

                    <div class="row gx-3">
                        <div class="col-md-6">
                            <figure><img src="<?php echo $first_section['image'];?>" alt=""></figure>
                        </div>
                        <div class="col-md-6">
                            <figure><img src="<?php echo $first_section['image_2'];?>" alt=""></figure>
                        </div>
                    </div>

                    <div class="abtS2video">
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <video src="<?php echo $first_section['video'];?>"
                            poster="<?php echo $first_section['image_3'];?>" id="videoplay"></video>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>