<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php
    global $prefix;
    echo $prefix;
    ?>>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />

        <!--setup author google+--> 
        <link rel="author" href="https://plus.google.com/+BaoAnhLeEasynFast" />

        <!--Google meta tags-->
        <title><?php
            global $titleSeo;
            global $the_title;
            if ($titleSeo != "") {
                echo $titleSeo;
            } else {
                echo $the_title;
            }
            ?> | <?php
            global $siteNameSeo;
            echo $siteNameSeo;
            ?></title>

        <!--description-->
        <meta name="description" content="<?php
        global $descriptionSeo;
        echo $descriptionSeo;
        ?>" />

        <!--SEO keywords-->
        <meta name="keywords" content="<?php
        global $keywordSeo;
        echo $keywordSeo;
        ?>" />

        <!--Facebook meta tags-->

        <!--location-->
        <meta property="og:locale" content="en_US" />

        <!--current page url-->
        <meta property="og:url" content="<?php
        global $the_permalink;
        echo $the_permalink;
        ?>"/>

        <!--website type-->
        <meta property="og:type" content=""/>

        <!--page title-->
        <meta property="og:title" content="<?php
        global $titleSeo;
        echo $titleSeo;
        ?> | <?php
              global $siteNameSeo;
              echo $siteNameSeo;
              ?>"/>

        <!--website name-->
        <meta property="og:site_name" content="<?php
        global $siteNameSeo;
        echo $siteNameSeo;
        ?>"/>

        <!--website thumbnail image-->
        <meta property="og:image" content=""/>

        <!--description-->
        <meta property="og:description" content="<?php
        global $descriptionSeo;
        echo $descriptionSeo;
        ?>"/>
              <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="overlay loading">
            <img class="overlay icon-preloading" 
                 src="<?php
                 global $imagePath;
                 echo $imagePath;
                 ?>theme/icon-loading.gif" 
                 alt="EasynFast.net pre-loading icon"/>
        </div>
        <div id="social-floating">
            <ul class="social-share-counter">
                <li>
                    <div id="fb-root"></div>
                    <div class="fb-like" 
                         data-href="<?php
                         global $the_permalink;
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
                         global $the_permalink;
                         echo $the_permalink;
                         ?>" 
                         data-type="box_count">
                    </div>
                </li>
                <li>
                    <a href="https://twitter.com/share" 
                       class="twitter-share-button" 
                       data-url="<?php
                       global $the_permalink;
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
                         global $the_permalink;
                         echo $the_permalink;
                         ?>">
                    </div>
                </li>
                <li>
                    <script 
                        type="IN/Share"
                        data-url="<?php
                        global $the_permalink;
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
                            global $imagePath;
                            echo $imagePath;
                            ?>theme/logo-easynfast.net.png"/>
                        </a>
                        <?php
                        global $mainNav;
                        wp_nav_menu($mainNav);
                        ?> 
                    </div>
                </div>

                <div class="banner-wrapper dark-background">
                    <img class="banner-image margin-center width-960" src="<?php
                    global $imagePath;
                    echo $imagePath;
                    ?>theme/banner/banner.png" alt=""/>
                    <h1 class="page-title"><?php
                        echo $the_title;
                        ?></h1>
                </div>
                <div class="social-wrapper width-960 margin-center">
                    <div class="breadcrum-wrapper">
                        <ul></ul>
                    </div>
                    <ul class="social-nav fright">
                        <li>
                            <a id="icon-facebook" href="https://www.facebook.com/easynfast.net" target="_blank">
                                <img src="<?php
                                global $imagePath;
                                echo $imagePath;
                                ?>theme/icon/icon-facebook.png" alt="external link to facebook" width="35" height="34" />
                            </a>
                        </li>
                        <li>
                            <a id="icon-twitter" href="#" target="_blank">
                                <img src="<?php
                                global $imagePath;
                                echo $imagePath;
                                ?>theme/icon/icon-twitter.png" alt="external link to twitter" width="35" height="34" />
                            </a>
                        </li>
                        <li>
                            <a id="icon-googleplus" href="#" target="_blank">
                                <img src="<?php
                                global $imagePath;
                                echo $imagePath;
                                ?>theme/icon/icon-googleplus.png" alt="external link to google plus" width="35" height="34" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-wrapper dark-background">
                <div id="content" class="width-960 margin-center">



