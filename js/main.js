/**
 * *********************************************
 * Methods Summary: Google Analytics Tracking
 * *********************************************
 */
(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments);
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m);
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-44157118-1', 'easynfast.net');
ga('send', 'pageview');
/**
 * *********************************************
 * Methods Summary: Scroll methods set to social like
 * *********************************************
 */
$(document).scroll(function() {
    var top = $(document).scrollTop();

    if (top > 300) {
        $('#social-floating').addClass('fixed-50');
    } else {
        $('#social-floating').removeClass('fixed-50');
    }
});
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
/**
 * *********************************************
 * Methods Summary: Setup Slider with 800px width
 * *********************************************
 */
$(document).ready(function() {
    $('.slider-800').bxSlider({
        auto: true,
        controls: true,
        page: false
    });
});
$(document).ready(function() {
    $('.slider-300').bxSlider({
        auto: true,
        controls: true,
        pager: false,
        pause: 5000
    });
});