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
$bannerImage = "";

//SEO Titles. if "" > default title
$titleSeo = "";

//SEO Keywords
$keywordSeo = "";

//SEO Description
$descriptionSeo = "";

//SEO Facebook Images.
$imageSeo = "";

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
        Do your things here
    <?php endif; ?>
</div>
<?php
get_footer();
