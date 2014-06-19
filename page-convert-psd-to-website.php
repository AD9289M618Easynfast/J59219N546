<?php
include_once "seoSupport.php";
$underDevelopment = false;

global $imagePath;
global $imageIconPath;
global $imageFbPath;
global $bannerImage;

$bannerImage = "banner-convert-psd-to-website.png";
$keywordSeo = "";
$descriptionSeo = "";
$imageSeo = $imageFbPath . "fb-convert-psd-to-website.png";

get_header();
?>
<div id="main-content" <?php
if ($underDevelopment) {
    echo 'class="under-development"';
}
?>>
         <?php if (!$underDevelopment) : ?>
        <div class="psd-to-website-wrapper">
            <div class="double-layer-wrapper">
                <div class="convert-psd-to-website-services">
                    <div class="main-info fleft">
                        <h2 class="h2-title">Convert Psd to Website Services</h2>
                        <p>
                            <strong>Convert PSD to Website</strong> is a general term to describe the process of <strong>converting a .psd extension image file into a live website</strong>, a website in this case can be pure html/css, email template or wordpress.
                        </p>
                        <p>
                            If you already have the designed of your website and doesn’t know how to convert it into a website or maybe you’re lazy to do so, our expert team will do that for you! We guarantee that you won’t be disappoint!
                        </p>
                        <p>
                            Noticed: if you not yet have the design of your website we’re also provide Website Designing Services here. 
                        </p>
                    </div>
                    <div class="sub-info fright">
                        <ul class="slider-300">
                            <li><img src="<?php echo $imagePath; ?>slider-psd-to-website-1.png" alt="From a image with psd format" width="175" height="170"/></li>
                            <li><img src="<?php echo $imagePath; ?>slider-psd-to-website-2.png" alt="Convert psd into html code" width="175" height="170"/></li>
                            <li><img src="<?php echo $imagePath; ?>slider-psd-to-website-3.png" alt="Upload that html code online and you have website" width="175" height="170"/></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="our-promise">
                <h2 class="h2-title"><span class="icon icon-thumbsup"></span>Our Promise</h2>
                <ul class="promise-note-list">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                </ul>
            </div>
            <div class="clear"></div>

            <div class="our-offer">
                <h2 class="h2-title"><span class="icon icon-list"></span>Our Offer</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <ul class="offer-list">
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                    <li><a class="price-quote not-implement-alert">Price Quote</a></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
