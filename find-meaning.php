<?php

$theme_name = "Find Meaning";
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
                            <h1>According to research, what has more impact on job satisfaction?</h1>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">Salary &mdash; how much your job pays</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="You're right!">Meaningfulness &mdash; how much your job gives purpose to your life</div>
                        </div>
                    </div>
                    <div class="quiz answer">
                        <div class="arrow"></div>
                        <div class="content-wrapper">
                            <h1><span class="answer-message"></span>What your work means to you has a stronger effect on how satisfied you are with your job.</h1>
                            <p>People work for many reasons &mdash; &ldquo;I am paid to work,&rdquo; &ldquo;I can use my unique skills for good,&rdquo; or &ldquo;I can provide for my family.&rdquo; Work for the right reasons by understanding what it means for your life.</p>
                            <p onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Hashtag - Find', eventLabel: 'Clicked'});" class="hashtag">Keep Learning</p>
                        </div>
                    </div>
                    <img src="img/bg-quiz-find.jpg" alt="" />
                </article>
            </section>

            <section class="wrapper-cards">

                <article class="card">
                    <div class="content youtube t01">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YouTube - Find', eventLabel: 'Clicked'});" rel="external" href="https://www.youtube.com/watch?v=GBJ5S0Tclt4" class="textblock">
                            <span class="text">
                                <h1><span>First Look</span> The When I Grow Up trailer Is Out!</h1>
                                <p>Learn more about this exciting new show.<span class="cta">Check out a preview!</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content instagram t01">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Instagram - Find', eventLabel: 'Clicked'});" rel="external" href="https://instagram.com/thisiswigu" class="textblock">
                            <span class="text">
                                <h1>What motivates Yelitsa to pursue art direction?</h1>
                                <p>Have someone you look up to take a picture of what motivates them to go to work every day.<span class="cta">Post to Instagram using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content vine t01">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Vine - Find', eventLabel: 'Clicked'});" rel="external" href="https://vine.co/u/1199427921928949760" class="textblock">
                            <span class="text">
                                <h1>What does having a career mean to you?</h1>
                                <p>To Bianca, having a career means bringing positive influence into any setting she’s in.<span class="cta">Post to Vine using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content pinterest">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Pinterest - Find', eventLabel: 'Clicked'});" rel="external" href="https://www.pinterest.com/thisiswigu/" class="textblock">
                            <span class="text">
                                <h1>Career Resources</h1>
                                <p>Check out our Pinterest boards for career resources.<span class="cta">Follow @thisiswigu on Pinterest</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content twitter">
                        <a rel="external" onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Twitter - Find', eventLabel: 'Clicked'});" class="textblock" href="https://twitter.com/thisiswigu">
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
