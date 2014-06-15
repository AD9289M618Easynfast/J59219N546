<?php
include_once "seoSupport.php";
$underDevelopment = false;

global $imagePath;
global $bannerImage;

$bannerImage = "";
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
        <div class="about-us-wrapper">
            <div id="who-are-we">
                <h2>EasynFast's Creation</h2>
                <div class="sub-info fright">
                    <img src="<?php
                    echo $imagePath;
                    ?>about-us-letrinhbaoanh.png" 
                         alt="Le Trinh Bao Anh (zBaoAnhLe) is the founder of EasynFast.net."/>
                </div>
                <div class="main-info width-full">
                    <p>
                        Hi guys, my name is Bao Anh Le (Lê Trịnh Bảo Anh), I am the founder of EasynFast. My story started in late 2012 when I just graduated from University. I started to do Freelance as a web developer as my second job since I like to keep myself busy with things.
                    </p>
                    <p>
                        After almost a year of working as a freelancer everything seem to be a success, I made a lot of customers happy, so I thought to myself “There are a lot of customers loved my services and always come back for more, that means my services must have something they like that’s why they’re returning. Why don’t I expand my services so it can get to more people, that way I can have more satisfied customers and expand my services”, and that thought eventually became my dream. Therefore in order to make my dream become reality I gathered a group of friends and cow-workers together to build a group of elites, Our Group called "EasynFast”.
                    </p>
                </div>
            </div>
            <div class="clear"></div>

            <div id="our-commitment">
                <h2>EasynFast's Commitment</h2>
                <div class="main-info width-full">
                    <ul class="commitment-list">
                        <li>
                            <h3><span>1</span>Passionate People</h3>
                            <p>
                                We’re a group of people who are passionate about what we do. We don't just do it, as a growing independent company WE LIVE IT! We’re a group of problem solvers, designers, developers, critics and we work hard, around the clock if necessary to make sure we deliver something special for our customers!
                            </p>
                        </li>
                        <li>
                            <h3><span>2</span>Knowledge & Expertise</h3>
                            <p>
                                We’re the best at what we do! While working with a lot of well-known companies out there, we have learnt a lot from them and also taught them a few tricks too!
                            </p>
                            <p>
                                With the help of our experts whom have had many years of experiences we were able to help many customers by giving them the best solution to solve their problems.
                            </p>
                        </li>
                        <li>
                            <h3><span>3</span>Creative</h3>
                            <p>
                                We’ve noticed that communication is the key to any successful campaign, with a group of many expert designers and developers who can make your idea into reality. 
                            </p>
                            <p>
                                Our creativity isn’t limited by any means, we’ll keep improve and get better at what we do. It's the creativity in thinking that has been helping us think outside the box.
                            </p>
                        </li>
                        <li>
                            <h3><span>4</span>Proven Result</h3>
                            <p>
                                EasynFast group has never fallen in technologies. Each and everyone in our group never stop learning new things everyday. With a strong communicate and teamwork, it helped us learn from each other and grow from there.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>

            <div id="our-services">
                <h2>EasynFast's Services</h2>
                <div class="main-info width-full">
                    EasynFast providing all different kind of services, even thought we have a lot of services our main focuses are Website.
                    It does not matter what you want as long as it's related to Website Development we're here to assist you, your satisfaction is our pleasure.
                </div>
                <h3>EasynFast's Services</h3>
                <ul class="slider-800">
                    <li>Slider Place Holder 1</li>
                    <li>Slider Place Holder 2</li>
                    <li>Slider Place Holder 3</li>
                    <li>Slider Place Holder 4</li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    <?php endif; ?>
</div>
<?php
get_footer();
