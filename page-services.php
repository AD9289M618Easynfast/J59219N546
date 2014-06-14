<?php
include_once 'seoSupport.php';
$underDevelopment = true;

$bannerImage = "banner-services.png";

$titleSeo = "";
$keywordSeo = "easynfast services, design website, convert psd to website, create wordpress theme";
$descriptionSeo = "EasynFast Services, We're a group of elites website developer and we are here to convert your idea become reality.";
$imageSeo = "";

get_header();
?>
<div id="main-content" <?php
     if ($underDevelopment) {
         echo 'class="under-development"';
     }
     ?>>
         <?php if (!$underDevelopment) : ?>
        Do your things here
    <?php endif; ?>
</div>
<?php
get_footer();
