<?php

while (have_posts()) : the_post();
    /**
     * *********************************************
     * Methods Summary: Setup Data For Meta Tags
     * *********************************************
     */
    //Set Title;
    $the_title = get_the_title();

    //Set SEO Title
    $titleArray = explode("[title]", get_the_content());
    $titleSeo = $titleArray[1];

    if ($titleSeo == "") {
        $titleSeo = $the_title;
    }

    //Set Page Link
    $the_permalink = get_permalink();

    //Set the Keyword
    $keywordArray = explode("[keyword]", get_the_content());
    $keywordSeo = $keywordArray[1];

    //Set the Description
    $descriptionArray = explode("[description]", get_the_content());
    $descriptionSeo = $descriptionArray[1];

    //Set preview Image.
    $imageArray = explode("[image]", get_the_content());
    $imageSeo = $imageArray[1];

endwhile;
