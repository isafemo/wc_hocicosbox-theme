<!--           NAVBAR MEGAMENU            -->
<nav class="navbar navbar-light bg-light navbar-expand-lg" id="myNavbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'hocicosbox_header_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'mainNav',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        <ul class="navbar-nav ml-auto nav-fill">
            <li class="nav-item px-4">
                <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item" href="#">What we do</a>
                    <a class="dropdown-item" href="#">How we fit your needs</a>
                    <div class="dropdown-divider"></div>
                    <div class="d-md-flex align-items-start justify-content-start">
                        <div>
                            <div class="dropdown-header">Development</div>
                            <a class="dropdown-item" href="#">Bespoke software</a>
                            <a class="dropdown-item" href="#">Mobile apps</a>
                            <a class="dropdown-item" href="#">Websites</a>
                        </div>
                        <div>
                            <div class="dropdown-header">Professional Services</div>
                            <a class="dropdown-item" href="#">Project rescue</a>
                            <a class="dropdown-item" href="#">Source code recovery</a>
                            <a class="dropdown-item" href="#">Application support &amp; maintenance</a>
                        </div>
                        <div>
                            <div class="dropdown-header">Fixed Price Services</div>
                            <a class="dropdown-item" href="#">Add cookie consent</a>
                            <a class="dropdown-item" href="#">Add captcha</a>
                            <a class="dropdown-item" href="#">Add core data</a>
                            <a class="dropdown-item" href="#">Custom error pages</a>
                            <a class="dropdown-item" href="#">Contact form creation</a>
                            <a class="dropdown-item" href="#">Automated backups</a>
                            <a class="dropdown-item" href="#">Image to HTML</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item px-4">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item px-4">
                <a href="#" class="nav-link">Blog</a>
            </li>
        </ul>
    </div>
</nav>
<!--             FUN NAVBARMEGAMENU                   -->