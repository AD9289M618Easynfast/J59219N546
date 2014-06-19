<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php
    global $prefix;
    echo $prefix;

    global $bannerImage;
    global $titleSeo;
    global $the_title;
    global $siteNameSeo;
    global $keywordSeo;
    global $descriptionSeo;
    global $imageSeo;
    global $the_permalink;
    global $mainNav;

    global $imagePath;
    global $imageIconPath;
    global $imageBannerPath;
    ?>>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />

        <!--setup author google+--> 
        <link rel="author" href="https://plus.google.com/+BaoAnhLeEasynFast" />

        <!--Google meta tags-->
        <title><?php
            if ($titleSeo != "") {
                echo $titleSeo;
            } else {
                echo $the_title;
            }
            ?> | <?php
            echo $siteNameSeo;
            ?></title>

        <!--description-->
        <meta name="description" content="<?php
        echo $descriptionSeo;
        ?>" />

        <!--SEO keywords-->
        <meta name="keywords" content="<?php
        echo $keywordSeo;
        ?>" />

        <!--Facebook meta tags-->

        <!--location-->
        <meta property="og:locale" content="en_US" />

        <!--current page url-->
        <meta property="og:url" content="<?php
        echo $the_permalink;
        ?>"/>

        <!--website type-->
        <!--TODO-->
        <meta property="og:type" content=""/>

        <!--page title-->
        <meta property="og:title" content="<?php
        if ($titleSeo != "") {
            echo $titleSeo;
        } else {
            echo $the_title;
        }
        ?> | <?php
              echo $siteNameSeo;
              ?>"/>

        <!--website name-->
        <meta property="og:site_name" content="<?php
        echo $siteNameSeo;
        ?>"/>

        <!--website thumbnail image-->
        <!--TODO-->
        <meta property="og:image" content="<?php
        echo $imageSeo;
        ?>"/>

        <!--description-->
        <meta property="og:description" content="<?php
        echo $descriptionSeo;
        ?>"/>
        <script type="text/javascript">
            /**
             * *********************************************
             * Methods Summary: Google Analytics Tracking
             * *********************************************
             */
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments);
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-44157118-1', 'easynfast.net');
            ga('send', 'pageview');
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="overlay loading">
            <img class="overlay icon-preloading" 
                 src="<?php
                 echo $imagePath;
                 ?>icon-loading.gif" 
                 alt="EasynFast.net pre-loading icon"/>
        </div>
        <div class="dialog-not-implement display-none">
            This function is not yet implemented!
        </div>
        <div id="social-floating">
            <ul class="social-share-counter">
                <li>
                    <div id="fb-root"></div>
                    <div class="fb-like" 
                         data-href="<?php
                         echo $the_permalink;
                         ?>" 
                         data-layout="box_count" 
                         data-action="like" 
                         data-show-faces="true" 
                         data-share="false">
                    </div>
                </li>
                <li>
                    <div class="fb-share-button" 
                         data-href="<?php
                         echo $the_permalink;
                         ?>" 
                         data-type="box_count">
                    </div>
                </li>
                <li>
                    <a href="https://twitter.com/share" 
                       class="twitter-share-button" 
                       data-url="<?php
                       echo $the_permalink;
                       ?>" 
                       data-via="your_screen_name" 
                       data-lang="en" 
                       data-related="anywhereTheJavascriptAPI" 
                       data-count="vertical">Tweet</a>
                </li>
                <li>
                    <div class="g-plusone" 
                         data-size="tall" 
                         data-href="<?php
                         echo $the_permalink;
                         ?>">
                    </div>
                </li>
                <li>
                    <script 
                        type="IN/Share"
                        data-url="<?php
                        echo $the_permalink;
                        ?>" 
                        data-counter="top">
                    </script>
                </li>
            </ul>
        </div>
        <div id="wrapper">
            <div id="header">
                <div class="fix-header">
                    <div class="site-title-wrapper width-960 margin-center">
                        <a href="#" class="site-title fleft">
                            <img src="<?php
                            echo $imagePath;
                            ?>logo-easynfast.net.png"
                                 alt="Easynfast Logo images"/>
                        </a>
                        <?php
                        wp_nav_menu($mainNav);
                        ?> 
                    </div>
                </div>

                <div class="banner-wrapper dark-background">
                    <img class="banner-image margin-center width-960" src="<?php
                    echo $imageBannerPath;
                    if ($bannerImage == "") {
                        echo 'banner.png';
                    } else {
                        echo $bannerImage;
                    }
                    ?>" alt="<?php
                         echo $the_title;
                         ?>"/>
                </div>
                <div class="social-wrapper width-960 margin-center">
                    <div class="breadcrum-wrapper">
                        <ul></ul>
                    </div>
                    <ul class="social-nav fright">
                        <li>
                            <a id="icon-facebook" href="https://www.facebook.com/easynfast.net" target="_blank">
                                <img src="<?php
                                echo $imageIconPath;
                                ?>icon-facebook.png" 
                                     alt="external link to facebook" width="35" height="34" />
                            </a>
                        </li>
                        <li>
                            <a id="icon-twitter" href="#" target="_blank">
                                <img src="<?php
                                echo $imageIconPath;
                                ?>icon-twitter.png" 
                                     alt="external link to twitter" width="35" height="34" />
                            </a>
                        </li>
                        <li>
                            <a id="icon-googleplus" href="#" target="_blank">
                                <img src="<?php
                                echo $imageIconPath;
                                ?>icon-googleplus.png" 
                                     alt="external link to google plus" width="35" height="34" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-wrapper dark-background">
                <div id="content" class="width-960 margin-center">



