/**
 * *********************************************
 * Methods Summary: Facebook Like buttons
 * *********************************************
 */
window.fbAsyncInit = function() {
    FB.init({
        appId: '1406473562932429',
        xfbml: true,
        version: 'v2.0'
    });
};
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
/**
 * *********************************************
 * Methods Summary: Googleplus +1 button
 * *********************************************
 */
(function() {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})();
/**
 * *********************************************
 * Methods Summary: Setup Twitter Buttons
 * *********************************************
 */
!function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, "script", "twitter-wjs");
/**
 * *********************************************
 * Methods Summary: Preloading For Website
 * *********************************************
 */
$(window).load(function() {
    $('.icon-preloading').fadeOut();
    $('.loading').delay(350).fadeOut('slow');
    $('body').delay(350).css({'overflow-y': 'visible'});
});
/**
 * *********************************************
 * Methods Summary: Contact Option Services
 * *********************************************
 */
$(document).ready(function() {
    $('.txt-services-overlay').click(function() {
        $('.option-services').toggle();
    });

    $('.option-services li').click(function() {
        $('.txt-services').val($(this).html());
        $('.option-services').toggle();
    });
});