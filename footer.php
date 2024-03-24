
</div>
<footer id="colophon" class="site-footer">
        <div class="container footer-links flex-column" style="width: 100%;">
            <div class="row justify-content-between align-items-start">
                <!-- Logo or Site Title Column -->
                <div class="col-lg-3 col-12 d-flex align-items-start flex-column">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $logo = get_custom_logo();
                        if ($logo) {
                            echo $logo;
                        } else {
                            echo '<div id="siteTitle" class="siteTitle" style="color:white;">' . get_bloginfo('name') . '</div>';

                        }
                    }
                    ?>
                    <div><p style="color:white;font-size:14px;margin-top:10px;">Dairy House Lane <br/>Altrincham <br/>WA14 5RE</p></div>
                </div>
                <!-- Links Menu Column -->
                <div class="col-lg-3 col-12 d-flex flex-column">
                    <h6 class="footer-menu-title">Site links</h6>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'footer-menu d-flex flex-column',
                        'fallback_cb' => false
                    )); ?>
                </div>
                <!-- Information Menu Column -->
                <div class="col-lg-3 col-12 d-flex flex-column">
                    <h6 class="footer-menu-title">Information</h6>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'information-menu',
                        'menu_class' => 'footer-menu d-flex flex-column',
                        'fallback_cb' => false
                    )); ?>
                </div>
                <!-- Contact Details Column -->
                <div class="col-lg-3 col-12 d-flex flex-column">
                    <h6 class="footer-menu-title">Contact Details</h6>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'contact-menu',
                        'menu_class' => 'footer-menu d-flex flex-column',
                        'fallback_cb' => false
                    )); ?>
                </div>
            </div>
            <!-- Copyright Text -->
            <div class="row">
                <div class="col-12 text-center mt-3">
                    &copy; <?php echo date('Y'); ?> Dairy House Farm
                </div>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>


</body>
</html>
