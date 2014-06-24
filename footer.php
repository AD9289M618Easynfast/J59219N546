</div>
</div>
<div id="footer">
    &copy; All rights reserved - EasynFast Group 2014
</div>
</div>
<?php
global $imagePath;
global $imageIconPath;
global $imageBannerPath;
?>
<div class="overlay overlay-dark display-none"></div>
<div class="dialog-function-under-development overlay display-none">
    <h2><span class="icon-development"></span>This Function is under development...<br/>Please Try again Later!</h2>
</div>
<div class="dialog-page-under-development overlay display-none">
    <h2><span class="icon-development"></span>This Web-page is under development</h2>
    <p>We're still working on this website at the moment! Therefore some pages are still under development! Our apologize for any inconvenience.</p>
    <p>Below is a list of complete web-pages:</p>
    <ul class="complete-webpage-list">
        <li><a href="http://easynfast.net/services/convert-psd-to-website.html">Convert Psd to Website</a></li>
        <li><a href="http://easynfast.net/contact-us.html">Contact Us</a></li>
    </ul>
    <a class="dismiss">Dismiss</a>
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
<?php wp_footer(); ?>
</body>
</html>


