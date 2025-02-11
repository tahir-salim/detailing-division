<?php $second_section = get_field('second_section',9);?>
<section class="secondSection abtS1">
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
</section>