<?php

$theme_name = "Expand Possibilities";
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
                            <h1>What percent of US workers are not in the career they had planned?</h1>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">0-25%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">26-50%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="You're right!">51-75%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">76-100%</div>
                        </div>
                    </div>
                    <div class="quiz answer">
                        <div class="arrow"></div>
                        <div class="content-wrapper">
                            <h1><span class="answer-message"></span>73% of US workers are not in the career they had planned to be. </h1>
                            <p>By understanding what you’re passionate about and what your talents are, you can expand possibilities for your future.</p>
                            <p onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Hashtag - Expand', eventLabel: 'Clicked'});" class="hashtag">Keep Learning</p>
                        </div>
                    </div>
                    <img src="img/bg-quiz-expand.png" alt="Expand Possibilities" />
                </article>
            </section>

            <section class="wrapper-cards">

                <article class="card">
                    <div class="content youtube t04">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YouTube - Expand', eventLabel: 'Clicked'});" rel="external" href="https://www.youtube.com/watch?v=iwOfOTyNT1Q" class="textblock">
                            <span class="text">
                                <h1><span>Check it out</span> Crossing Careers</h1>
                                <p>Learn more about this exciting new show.<span class="cta">Check out a preview!</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content instagram t04">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Instagram - Expand', eventLabel: 'Clicked'});" rel="external" href="https://instagram.com/thisiswigu" class="textblock">
                            <span class="text">
                                <h1>Bianca considered a lot of other careers before she wanted to be an architect.</h1>
                                <p>Take pictures of three careers that relate to your passions/talents and you've never considered before<span class="cta">Post to Instagram using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content vine t04">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Vine - Expand', eventLabel: 'Clicked'});" rel="external" href="https://vine.co/u/1199427921928949760" class="textblock">
                            <span class="text">
                                <h1>Isabelle looks to her sister for career inspiration and advice.</h1>
                                <p>What&apos;s the most surprising career advice you&apos;ve ever received?<span class="cta">Post to Vine using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content pinterest">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Pinterest - Expand', eventLabel: 'Clicked'});" rel="external" href="https://www.pinterest.com/thisiswigu/" class="textblock">
                            <span class="text">
                                <h1>Career Resources</h1>
                                <p>Check out our Pinterest boards for career resources.<span class="cta">Follow @thisiswigu on Pinterest</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content twitter">
                        <a rel="external" onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Twitter - Expand', eventLabel: 'Clicked'});" class="textblock" href="https://twitter.com/thisiswigu">
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
