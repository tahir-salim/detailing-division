<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <a href="<?php echo site_url();?>" class="logo">
                        <img src="<?php echo $options['logo'];?>" alt="">
                    </a>
                    <p class="para"><?php echo $options['footer_about'];?></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget">
                            <h3 class="small-heading">OFFICE</h3>
                            <ul class="list">
                                <li><a href=""><?php echo $options['address'];?></a></li>
                                <li><a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a></li>
                                <li><a href="tel:<?php echo $options['phone_number'];?>" class="small-heading"><?php echo $options['phone_number'];?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget">
                            <h3 class="small-heading">Links</h3>
                            <!-- <ul class="list">
                                <li><a href="./">Home</a></li>
                                <li><a href="paint-enhancement.php">Services</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="">Shop</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                            </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'list' ) ); ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget">
                            <h3 class="small-heading">GET IN TOUCH</h3>
                            <ul class="list">
                                <li><a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f icon"></i> Facebook</a></li>
                                <li><a href="<?php echo $options['twitter'];?>"><i class="fab fa-twitter icon"></i> Twitter</a></li>
                                <li><a href="<?php echo $options['dribble'];?>"><i class="fal fa-basketball-ball icon"></i> Dribble</a></li>
                                <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram icon"></i> Instagram</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div class="container">
            <hr />
            <p class="para"><?php echo $options['copyright'];?></p>
        </div>
    </div>
</footer>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
    <?php wp_footer(); ?>

</main>
  </body>
</html>
