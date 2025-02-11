<?php $first_section = get_field('first_section');?>
<?php /** * Template Name: Paint Enhancement Template */ ?>
<?php get_header(); ?>
<section class="paint-sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="ps1_left">
                    <figure><img src="<?php echo $first_section['image_3'];?>" alt=""></figure>


                    <?php    $x=1;  $args = array( 'post_type' => 'enhancement' , 'posts_per_page' => '3','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

                    <div class="box-<?php echo $x;?> <?php if($x==1){?>showfirst<?php }?>">
                        <div class="ps1_cnt">
                            <h4><?php the_title() ;?></h4>
                            <p><?php the_excerpt() ;?></p>
                            <a href="<?php the_permalink() ;?>"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php $x++; endwhile; wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="ps1_right">
                    <p><?php echo $first_section['content_2'];?></p>
                    <ul class="pe-tabing">

                        <?php    $x=1;  $args = array( 'post_type' => 'enhancement' , 'posts_per_page' => '3','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>


                        <li data-targetit="box-<?php echo $x;?>" class="<?php if($x==1){?>active<?php }?>"><?php the_title() ;?></li>
                        <?php $x++; endwhile; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 text-center wow zoomIn">
                <div class="wht_we_do">
                    <div class="sec-title text-center mb-0">
                        <h6><?php echo $first_section['heading'];?></h6>
                        <h2><?php echo $first_section['sub_heading'];?></h2>
                    </div>
                    <div class="infowhtdo">
                        <h6><?php echo $first_section['para'];?></h6>
                        <span><?php echo $first_section['para_2'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="paint-sec2">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="pe_s2 wow zoomIn">
                    <figure><img src="<?php echo $first_section['image'];?>" alt=""></figure>
                    <figure><img src="<?php echo $first_section['image_2'];?>" alt=""></figure>
                </div>
            </div>
            <div class="col-md-5 wow fadeInRight">
                <div class="pe_s2_cnt">
                    <div class="sec-title mb-0">
                        <h6><?php echo $first_section['heading_2'];?></h6>
                        <h2><?php echo $first_section['heading_3'];?></h2>
                    </div>
                    <p><?php echo $first_section['content'];?></p>
                    <?php echo $first_section['list'];?>
                    <a
                        href="<?php echo $first_section['button_link'];?>"><?php echo $first_section['button_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("includes/testi-incl"); ?>
<?php get_footer(); ?>