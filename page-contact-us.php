<?php
include_once 'seoSupport.php';
$underDevelopment = false;

$bannerImage = "banner-contact.png";

$titleSeo = "";
$keywordSeo = "Contact EasynFast";
$descriptionSeo = "EasynFast support team is here to help. If you have any questions, suggestions or comments on our Services, please don't hesitate to send them to us.";
$imageSeo = "";

get_header();
?>
<div id="main-content" <?php
if ($underDevelopment) {
    echo 'class="under-development"';
}
?>>
         <?php if (!$underDevelopment) : ?>
        <div class="contact-text-wrapper">
            If you have any questions, suggestions or comments on our Services, please don't hesitate to send them to us. We will be
            happy to help you as well as make our services more useful and convenient. Thank you in advance for your interest and 
            support!
        </div>
        <form action="<?php echo get_template_directory_uri(); ?>/cont_sendMail.php" method="post">
            <div id="contact-form-wrapper">
                <div class="message-holder fleft">
                    <input type="text" class="txt-name" placeholder="Name" name="from_name" />
                    <input type="text" class="txt-email" placeholder="Email" name="from_email"/>
                    <input type="text" class="txt-services" value="Choose Your Options" name="subject"/>
                    <div class="txt-services-overlay"></div>
                    <ul class="option-services">
                        <li>Psd to Website</li>
                        <li>Create Wordpress Theme</li>
                        <li>Website Design</li>
                        <li>Upgrade/Optimize Website</li>
                    </ul>
                </div>
                <div class="contact-info-holder fright">
                    <ul>
                        <li><span>PO box 1369 Osborne park WA 6916, Western Australia</span></li>
                        <li><a href="mailto:zBaoAnhLe@gmail.com">zBaoAnhLe@gmail.com</a></li>
                        <li><a href="http://easynfast.net/">EasynFast.net</a></li>
                    </ul>
                </div>
                <div class="messagebox-holder clear">
                    <textarea class="message-box" placeholder="Message" name="message_body"></textarea>
                    <input type="submit" value="Send"/>
                    <div class="clear">
                        <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3387.0650093363975!2d115.80844900000002!3d-31.90483099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32af98368d386b%3A0x75a5dc464e761cf4!2sOSBORNE+PARK!5e0!3m2!1sen!2s!4v1402069053743" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>
<?php
get_footer();
