<?php
include_once "seoSupport.php";
$underDevelopment = false;

global $imagePath;
global $imageIconPath;
global $imageFbPath;
global $bannerImage;

$bannerImage = "banner-services.png";
$titleSeo = "EasynFast's Services";
$keywordSeo = "easynfast services";
$descriptionSeo = "EasynFast Services, We're a group of elites website developer and we are here to turn your idea become reality.";
$imageSeo = $imageFbPath . "fb-services.png";

get_header();
?>
<div id="main-content" <?php
if ($underDevelopment) {
    echo 'class="under-development"';
}
?>>
         <?php if (!$underDevelopment) : ?>
        <div class="services-wrapper">
            <div class="services-content">
                Easynfast's have many different services. Even so, our focus are website development! Contact us now to get your work done professionally!
            </div>

            <div class="services-list-wrapper">
                <ul class="services-list">
                    <li>
                        <div class="main-info fleft">

                        </div>
                        <div class="sub-info fright">

                        </div>
                    </li>
                    <li>
                        <div class="main-info fright">

                        </div>
                        <div class="sub-info fleft">

                        </div>
                    </li>
                    <li>
                        <div class="main-info fleft">

                        </div>
                        <div class="sub-info fright">

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
