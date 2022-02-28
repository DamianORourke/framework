<!-- Offcanvas Navbar -->
<div class="offcanvas offcanvas-end whitePurple" tabindex="-1" id="offcanvas-navbar">
    <div class="offcanvas-header whitePurple">
        <button type="button" class="btn-close text-reset ps-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div id="offcanvasBody" class="offcanvas-body">
        <div class="container-fluid p-0">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mobile-main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="bootscore-navbar-two" class="mobileNav">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
                <!-- Bootstrap 5 Nav Walker Main Menu End -->
        </div>
    </div>
</div>