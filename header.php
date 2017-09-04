<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title( '|', true, 'right'); ?></title>
        <meta http-quiv="Content-type" content=text/html; charset="utf-8" />
        <meta name="Viewport" content="width=device-width, inital-scale=1" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />   

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-86542895-1', 'auto');
            ga('send', 'pageview');

        </script>

    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="top-header">
            <div>
                <header>
                    <nav>
                    <?php 
                        $defaults = array (
                            'container'         => false,
                            'theme_location'    => 'primary-menu'
                        );

                        wp_nav_menu( $defaults);
                        ?>
                       
                    </nav>
                </header>
            </div>
        </div>