<?php
include_once 'seoSupport.php';
$underDevelopment = true;

$titleSeo = "";
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
        Create Wordpress Theme From Scratch
    <?php endif; ?>
</div>
<?php
get_footer();
