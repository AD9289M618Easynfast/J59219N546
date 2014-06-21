<?php
include_once "seoSupport.php";
$underDevelopment = false;
/**
 * *********************************************
 * Methods Summary: Global Variables
 * *********************************************
 */
global $imagePath;
global $imageIconPath;
global $imageFbPath;
global $bannerImage;

/**
 * *********************************************
 * Methods Summary: SEO Optimize Variables
 * *********************************************
 */
//Banner Images
$bannerImage = "banner-convert-psd-to-website.png";

//SEO Titles. if "" > default title
$titleSeo = "Convert PSD to Website Services";

//SEO Keywords
$keywordSeo = "convert psd to website services";

//SEO Description
$descriptionSeo = "Convert Psd to Website Services. We'll provide you top quality conversion of your website design into website within 5 days including weekend!";

//SEO Facebook Images.
$imageSeo = $imageFbPath . "fb-convert-psd-to-website.png";

get_header();
?>
<div id="main-content" <?php
/**
 * *********************************************
 * Methods Summary: If is under development Content 
 * won't show.
 * *********************************************
 */
if ($underDevelopment) {
    echo 'class="under-development"';
}
?>>
         <?php if (!$underDevelopment) : ?>
        <div class="psd-to-website-wrapper">
            <div class="double-layer-wrapper">
                <div class="convert-psd-to-website-services">
                    <div class="main-info fleft">
                        <h1 class="h2-title">Convert Psd to Website Services</h1>
                        <p>
                            <strong><u>Convert PSD to Website</u></strong> 
                            is a general term to describe the process of converting a .psd extension image file into a live website. A website is a document written in plain html (hypertext markup language).
                        </p>
                        <p>
                            If you already have the designed of your website and doesn’t know how to convert it into a website or maybe you’re lazy to do so, our expert team will do that for you! We guarantee that you won’t be disappointed!
                        </p>
                        <p class="noticed">
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
                <h2 class="h2-title"><span class="icon icon-thumbsup"></span>Our Promise/Commitment</h2>
                <p>
                    As we’re providing <strong>Convert Psd to Website Services</strong>, our main focus is to make our customers happy with our services. We show our <u>commitment & passion</u> in our job by giving our customer the <strong>best quality services</strong>! We are capable of doing anything, if that is what its take to make our <i>customer happy</i>.
                </p>
                <ul class="promise-note-list">
                    <li><strong>ALWAYS ON TIME</strong> for deadline</li>
                    <li>Mockup will be <strong><i>PIXEL PERFECT</i></strong></li>
                    <li><strong><u>Validated html/css</u></strong> with <strong>W3C STANDARD</strong></li>
                    <li>Using <strong><u>table-less layout</u></strong></li>
                    <li>Already <strong><i>Optimized SEO</i></strong> (Search Engine Optimization).</li>
                    <li><strong><u>Unlimited revision</u></strong> and almost <strong>24/7 support team</strong></li>
                </ul>
            </div>
            <div class="clear"></div>

            <div class="our-offer">
                <h2 class="h2-title"><span class="icon icon-list"></span>Our Offer for Convert Psd to Website Services</h2>
                <p>
                    We not only have good quality services, our prices are competitive too. We always come up with different promotion events to draw attention to our target audiences!  So if you’re a coming back customer you are definitely going to get into our discount programs!
                </p>
                <ul class="offer-list">
                    <li>See our offer for <a href="#"><strong>Website Designing</strong></a>.</li>
                    <li><strong>Convert Psd to Website</strong> - Starting from <strong>$99.99</strong> (front page)</li>
                    <li><strong>Convert Psd to Website</strong> - Starting from <strong>$49.99</strong> (internal page)</li>
                    <li><strong>Responsive Design</strong> - Starting from <strong>$249.99</strong> (whole project)</li>
                    <li>See our offer for <a href="#"><strong>Wordpress Integration</strong></a>.</li>
                    <li><a class="price-quote not-implement-alert">Price Quote</a></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
