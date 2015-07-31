<?php

$theme_name = "Try Out a Career";
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
                            <h1>What is the average number of jobs held by US workers over their lifetimes?</h1>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">Less than 10</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="You're right!">More than 10</div>
                        </div>
                    </div>
                    <div class="quiz answer">
                        <div class="arrow"></div>
                        <div class="content-wrapper">
                            <h1><span class="answer-message"></span>The average number of jobs held by US workers over their lifetimes is 10.4 for women and 11.4 for men.</h1>
                            <p>That’s a lot of opportunities to try out different careers!</p>
                            <p onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Hashtag - Try', eventLabel: 'Clicked'});" class="hashtag">Keep Learning</p>
                        </div>
                    </div>
                    <img src="img/bg-quiz-try.jpg" alt="" />
                </article>
            </section>

            <section class="wrapper-cards">

                <article class="card">
                    <div class="content youtube t05">
                        <a rel="external" href="https://www.youtube.com/watch?v=378h5Xt9dRY" onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YouTube - Try', eventLabel: 'Clicked'});" class="textblock">
                            <span class="text">
                                <h1><span>Watch Now</span> Episode One</h1>
                                <p>Be the first to view this exciting new show.<span class="cta">Check out it out!</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content instagram t05">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Instagram - Try', eventLabel: 'Clicked'});" rel="external" href="https://instagram.com/thisiswigu" class="textblock">
                            <span class="text">
                                <h1>Jesse plans to put himself through college while working in a restaurant.</h1>
                                <p>Create a picstitch of four ways you can "try out" some potential careers this summer. Not just thinking about them, but doing them.<span class="cta">Post to Instagram using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content vine t05">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YVine - Try', eventLabel: 'Clicked'});" rel="external" href="https://vine.co/u/1199427921928949760" class="textblock">
                            <span class="text">
                                <h1>Brian struggles with finding time for filmmaking.</h1>
                                <p>What&apos;s something that you&apos;re struggling with about your future career and how can others help you?<span class="cta">Post to Vine using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content pinterest">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Pinterest - Try', eventLabel: 'Clicked'});" rel="external" href="https://www.pinterest.com/thisiswigu/" class="textblock">
                            <span class="text">
                                <h1>Career Resources</h1>
                                <p>Check out our Pinterest boards for career resources.<span class="cta">Follow @thisiswigu on Pinterest</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content twitter">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Twitter - Try', eventLabel: 'Clicked'});" class="textblock" rel="external" href="https://twitter.com/thisiswigu">
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
