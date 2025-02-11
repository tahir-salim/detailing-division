<?php $fourth_section = get_field('fourth_section',9);?>
<section class="fourthSection">
    <div class="container">
        <div class="slider-for wow zoomIn">
            <?php $box_list = $fourth_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div>
                <div class="car-slider">
                    <img src="<?php echo $boxlist['image']; ?>" alt="" class="image">
                    <p class="para"><?php echo $boxlist['content']; ?></p>
                    <h3 class="MyHeading"><?php echo $boxlist['heading']; ?></h3>
                    <p class="para"><?php echo $boxlist['Sub_heading']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="slider-nav">
                    <?php $box_list = $fourth_section['box_list_2'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div class="clt-img">
                        <img src="<?php echo $boxlist['image']; ?>" alt="">
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>