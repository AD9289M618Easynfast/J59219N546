<?php
include_once "seoSupport.php";
$underDevelopment = false;

global $imagePath;
global $imageIconPath;
global $bannerImage;

$bannerImage = "";
$keywordSeo = "";
$descriptionSeo = "";
$imageSeo = "";

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
                <div class="what-psd-to-website">
                    <div class="main-info fleft">
                        <h2 class="h2-title">What is Convert Psd to Website?</h2>
                        <p>
                            Convert PSD to Website mean that someone already has a design of their website but doesn’t know how to code it. They will have to look for someone who can convert that design from an image into a live website, then that progress is called “Convert PSD to WEBSITE”…
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
                <h2 class="h2-title"><span class="icon-thumbsup"></span>Our Promise</h2>
                <ul class="promise-note-list">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                </ul>
            </div>
            <div class="our-offer">

            </div>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
