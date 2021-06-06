<header id="header" class="header">
    <nav class="navbar navbar-default hidden-xs hidden-sm">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php print esc_url( home_url( '/' ) ); ?>">
                    <div class="logo">
		                <?php
		                $imperialLogo = ( get_theme_mod('imperial_logo' ) != "" ) ? get_theme_mod('imperial_logo') : get_template_directory_uri() . '/assets/images/logo.png';
		                ?>
                        <img id="logo-img" src="<?php print $imperialLogo ?>" alt="<?php echo bloginfo('name');?>">
                    </div>
                </a>
            </div>
            <?php
            wp_nav_menu( array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 5,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'imperial-navbar-collapse',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker() )
            );
            ?>
        </div>
    </nav>
    <div class="mobile-menu hidden-md hidden-lg">
        <div class="sm-logo">
            <img id="logo-img" src="<?php print $imperialLogo ?>" alt="<?php echo bloginfo('name');?>">
        </div>
            <?php
            wp_nav_menu( array(
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'depth' => 5,
                    'container' => 'nav',
                    'container_class' => 'mean-menu ',
                )
            );
            ?>
    </div>
</header>