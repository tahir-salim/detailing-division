<?php $first_section = get_field('first_section');?>
<?php /** * Template Name: Gallery Template */ ?>
<?php get_header(); ?>
<section class="gallerySec">
    <div class="container">
        <div class="row gy-4 wow zoomIn">

            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-md-4 ">
                <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
            </div>
            <?php }?>
            <div class="col-md-4">
                <div class="row gy-4">

                    <?php $box_list = $first_section['box_list_2'];?>
                    <?php foreach ($box_list as $boxlist) {?>

                    <div class="col-md-12">
                        <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
                    </div>
                    <?php }?>
                </div>
            </div>

            <?php $box_list = $first_section['box_list_3'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-md-4">
                <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
            </div>
            <?php }?>

        </div>
    </div>
</section>
<?php get_footer(); ?>