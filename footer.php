
</div>
<footer id="colophon" class="site-footer">
        <div class="container footer-links flex-column" style="width: 100%;">
            <div class="row justify-content-center align-items-center text-center">
                <!-- Logo or Site Title Column -->
                <div class="col-12 d-flex justify-content-center flex-column">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $logo = get_custom_logo();
                        if ($logo) {
                            echo $logo;
                        } else {
                            echo '<div id="siteTitle" class="siteTitle" style="color:white;font-weight:500;font-size:26px;">' . get_bloginfo('name') . '</div>';

                        }
                    }
                    ?>
                    <div class="mb-3 mt-2">
                        <a href="https://maps.app.goo.gl/jVZrbnahNwtPosg59" style="color:white;margin-top:10px;">Dairy House Lane <br/>Altrincham <br/>WA14 5RE</a><br/>
                        <a href="tel:07919114670" style="color:white;margin-top:10px;">Call us: 07919 114 670</a><br/>
                        <a href="mailto:dairyhousefarmlivery@gmail.com" style="color:white;">Email us: dairyhousefarmlivery@gmail.com</a>
                    </div>
                </div>
                <!-- Links Menu Column -->
                <div class="col-12 d-flex flex-column text-center justify-content-center align-items-center mt-3">
                    <h4 class="footer-menu-title mb-2">Site links</h4>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'footer-menu d-flex max-450 text-center',
                        'fallback_cb' => false
                    )); ?>
                </div>
            </div>
            <!-- Copyright Text -->
            <div class="row copyright">
                <div class="col-12 text-center mt-3">
                    &copy; <?php echo date('Y'); ?> Dairy House Farm
                </div>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>


</body>
</html>
