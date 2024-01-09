<div class="creote-footer-copyright bg_dark_1">
    <!--===============spacing==============-->
    <div class="pd_top_20"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="footer_copy_content color_white">
                    ©<?php echo date('Y')?><a href="http://quaziconsultants.com" class="color_white"> Quazi Consultants.</a> All Rights Reserved.
                </div>
            </div>

        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_20"></div>
    <!--===============spacing==============-->
</div>
</div>
<!---==============mobile menu =================-->
<div class="crt_mobile_menu">
    <div class="menu-backdrop"></div>
    <nav class="menu-box">
        <div class="close-btn"><i class="icon-close"></i></div>
        <form role="search" method="get" action="#">
            <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
            <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
        </form>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
    </nav>
</div>
<!---==============mobile menu end =================-->
<!---==============search popup =================-->
<div id="search-popup" class="search-popup">
    <div class="close-search"><i class="fa fa-times"></i></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <fieldset>
                <form role="search" method="get" action="#">
                    <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
                    <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
                </form>
            </fieldset>
        </div>
    </div>
</div>
<!---==============search popup end =================-->
<!---==============modal popup =================-->
<div class="modal_popup one">
    <div class="modal-popup-inner">
        <div class="close-modal"><i class="fa fa-times"></i></div>
        <div class="modal_box">
            <div class="row">
                <div class="col-lg-5 col-md-12 form_inner">
                    <div class="form_content">


                        <form class="contact-form" method="post" action="https://themepanthers.com/html/creote-html/sendemail.php">
                            <p>
                                <label> Your name<br />
                                    <input type="text" name="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name" />
                                    <br />
                                    <i class="fa fa-user"></i><br />
                                </label>
                            </p>
                            <p><label> Your email<br />
                                    <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email" />
                                    <br />
                                    <i class="fa fa-envelope"></i><br />
                                </label>
                            </p>
                            <p>
                                <label> Subject<br />
                                    <input type="text" name="subject" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Subject" />
                                    <br />
                                    <i class="fa fa-folder"></i><br />
                                </label>
                            </p>
                            <p>
                                <label> Your message (optional)<br />
                                    <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Enter Your Message"></textarea>
                                    <br />
                                    <i class="fa fa-comments"></i><br />
                                </label>
                            </p>
                            <p><input type="submit" value="Submit" /></p>

                        </form>

                    </div>
                </div>
                <div class="col-lg-7 col-md-12 about_company_inner">
                    <div class="abt_content">
                        <div class="logo">
                            <img src="assets/images/logo-default.png" alt="img" class="company_logo_modal">
                        </div>
                        <div class="text">
                            <p> The great explorer of the truth, the master-builder of human happiness no one rejects
                                dislikes avoids pleasure itself because it is pleasure but because know who do not those
                                how to pursue pleasures rationally encounter consequences that are extremely painful
                                desires to obtain.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="post_contet_modal">
                            <h2> Latest News</h2>
                            <div class="post_enable">
                                <div class="modal_post_grid">
                                    <a href="blog-single.html">
                                        <img width="852" height="812" src="assets/images/blog/blog-image-9.jpg" class="main_img wp-post-image" alt="img" />
                                    </a>
                                </div>
                                <div class="modal_post_grid">
                                    <a href="blog-single.html">
                                        <img width="852" height="812" src="assets/images/blog/blog-image-8.jpg" class="main_img wp-post-image" alt="img" />
                                    </a>
                                </div>
                                <div class="modal_post_grid">
                                    <a href="blog-single.html">
                                        <img width="852" height="812" src="assets/images/blog/blog-image-7.jpg" class="main_img wp-post-image" alt="img" />
                                    </a>
                                </div>
                                <div class="modal_post_grid">
                                    <a href="blog-single.html">
                                        <img width="852" height="812" src="assets/images/blog/blog-image-6.jpg" class="main_img wp-post-image" alt="img" />
                                    </a>
                                </div>
                                <div class="modal_post_grid">
                                    <a href="blog-single.html">
                                        <img width="852" height="812" src="assets/images/blog/blog-image-5.jpg" class="main_img wp-post-image" alt="img" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="copright">
                           @<?php echo date('Y') ?>  Quazi Consultants. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---==============modal popup end=================-->
<!---==============cart=================-->
<div class="side_bar_cart" id="mini_cart">
    <div class="cart_overlay"></div>
    <div class="cart_right_conten">
        <div class="close">
            <div class="close_btn_mini"><i class="icon-close"></i></div>
        </div>
        <div class="cart_content_box">
            <div class="contnet_cart_box">
                <div class="widget_shopping_cart_content">
                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!---==============cart=================-->

</div>
<!-- Back to top with progress indicator-->
<div class="prgoress_indicator">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!---========================== javascript ==========================-->
<script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>
<script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='assets/js/color-scheme.js'></script>
<script type='text/javascript' src='assets/js/owl.js'></script>
<script type='text/javascript' src='assets/js/swiper.min.js'></script>
<script type='text/javascript' src='assets/js/isotope.min.js'></script>
<script type='text/javascript' src='assets/js/countdown.js'></script>
<script type='text/javascript' src='assets/js/simpleParallax.min.js'></script>
<script type='text/javascript' src='assets/js/appear.js'></script>
<script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
<script type='text/javascript' src='assets/js/sharer.js'></script>
<script type='text/javascript' src='assets/js/validation.js'></script>
<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/map-helper.js"></script>
<!-- main-js -->
<script type='text/javascript' src='assets/js/creote-extension.js'></script>
<!---========================== javascript ==========================-->

</body>

</html>