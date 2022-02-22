<!-- Offcanvas Navbar -->
<div class="offcanvas offcanvas-end bg-whiteColour" tabindex="-1" id="offcanvas-navbar">
    <div class="offcanvas-header bg-mainColour">
        <span class="h5 ms-3 mb-0"><img src="<?php echo get_stylesheet_directory_uri() .'/img/white_logo.png'; ?>" style="height: 44px;" alt=""></span>
        <button type="button" class="btn-close text-reset me-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div id="offcanvasBody" class="offcanvas-body m-0 p-0 ps-3">
    <!-- Bootstrap 5 Nav Walker Main Menu -->
    <?php
        wp_nav_menu(array(
            'theme_location' => 'mobile-main-menu',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="bootscore-navbar-two" class="">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
        ));
    ?>
    <!-- Bootstrap 5 Nav Walker Main Menu End -->
    </div>
</div>