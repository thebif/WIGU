<?php

$theme_name = "Discover Talents";
$theme = strtok($theme_name, " "); // get the first word

include_once 'inc/header.php';
include_once 'inc/masthead.php';

?>

        <div class="wrapper-main" role="main">

            <section class="wrapper-feature">
                <article class="feature">
                    <div class="quiz question">
                        <div class="arrow"></div>
                        <div class="content-wrapper">
                            <h1>What percent of jobs will disappear within the next 10 years, due to technological advances?</h1>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">0-25%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="You're right!">26-50%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">51-75%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">76-100%</div>
                        </div>
                    </div>
                    <div class="quiz answer">
                        <div class="arrow"></div>
                        <div class="content-wrapper">
                            <h1><span class="answer-message"></span>50% of jobs today will no longer exist in 10 years, due to changing technology. </h1>
                            <p>This list includes telemarketers, watch repairers, and loan officers. That’s why it&apos;s important to discover all of your talents and how they can be used in different kinds of jobs.</p>
                            <p onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Hashtag - Discover', eventLabel: 'Clicked'});" class="hashtag">Keep Learning</p>
                        </div>
                    </div>
                    <img src="img/bg-quiz-discover.png" alt="" />
                </article>
            </section>

            <section class="wrapper-cards">

                <article class="card">
                    <div class="content youtube t03">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YouTube - Discover', eventLabel: 'Clicked'});" rel="external" href="https://www.youtube.com/watch?v=S8WqVKYcy5U" class="textblock">
                            <span class="text">
                                <h1><span>Check it out</span> The Farm Challenge!</h1>
                                <p>Learn more about this exciting new show.<span class="cta">Check out a preview!</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content instagram t03">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Instagram - Discover', eventLabel: 'Clicked'});" rel="external" href="https://instagram.com/thisiswigu" class="textblock">
                            <span class="text">
                                <h1>Yelitsa&apos;s family wanted her to be a doctor or lawyer because she&apos;s so driven.</h1>
                                <p>What do your friends always tell you you’d be good at or that you should do for a living?<span class="cta">Post to Instagram using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content vine t03">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Vine - Discover', eventLabel: 'Clicked'});" rel="external" href="https://vine.co/u/1199427921928949760" class="textblock">
                            <span class="text">
                                <h1>Jesse brings creativity, attention to detail, and ambition to the table.</h1>
                                <p>Show us what superpowers you have that you could bring to your future careers.<span class="cta">Post to Vine using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content pinterest">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Pinterest - Discover', eventLabel: 'Clicked'});" rel="external" href="https://www.pinterest.com/thisiswigu/" class="textblock">
                            <span class="text">
                                <h1>Career Resources</h1>
                                <p>Check out our Pinterest boards for career resources.<span class="cta">Follow @thisiswigu on Pinterest</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content twitter">
                        <a rel="external" onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Twitter - Discover', eventLabel: 'Clicked'});" class="textblock" href="https://twitter.com/thisiswigu">
                            <span class="text">
                                <h1>Twitter Updates</h1>
                                <p>Hit us up on Twitter for updates and conversation.<span class="cta">Post to Twitter using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

            </section>

        </div>

<?php

include_once 'inc/footer.php';

?>
