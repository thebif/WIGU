<?php

$theme_name = "Explore Passion";
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
                            <h1>What percent of US workers aren&apos;t engaged at work?</h1>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">0-25%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">26-50%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="You're right!">51-75%</div>
                            <div class="radio"><input type="radio" class="quiz-choice" name="quiz-choice" value="Nice try!">76-100%</div>
                        </div>
                    </div>
                    <div class="quiz answer">
                        <div class="arrow"></div>
                        <div class="content-wrapper">
                            <h1><span class="answer-message"></span>70% of US workers aren’t engaged with their work.</h1>
                            <p>Love what you do by exploring your passion, or what engages you.</p>
                            <p onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Hashtag - Explore', eventLabel: 'Clicked'});" class="hashtag">Keep Learning</p>
                        </div>
                    </div>
                    <img src="img/bg-quiz-explore.jpg" alt="" />
                </article>
            </section>

            <section class="wrapper-cards">

                <article class="card">
                    <div class="content youtube t02">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YouTube - Explore', eventLabel: 'Clicked'});" rel="external" href="https://www.youtube.com/watch?v=Ixo-Iyj_q3E" class="textblock">
                            <span class="text">
                                <h1><span>Watch</span> Jesse&apos;s Story</h1>
                                <p>Learn more about this exciting new show.<span class="cta">Check out a preview!</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content instagram t02">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Instagram - Explore', eventLabel: 'Clicked'});" rel="external" href="https://instagram.com/thisiswigu" class="textblock">
                            <span class="text">
                                <h1>Jesse is at his best when he&apos;s in the kitchen</h1>
                                <p>What brings out your passion? Take a picture of yourself when you’re at your best.<span class="cta">Post to Instagram using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content vine t02">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Vine - Explore', eventLabel: 'Clicked'});" rel="external" href="https://vine.co/u/1199427921928949760" class="textblock">
                            <span class="text">
                                <h1>TJ wants to be known for his inner and outer strength.</h1>
                                <p>What do you want to be known for?<span class="cta">Post to Vine using #WhenIGrowUp</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content pinterest">
                        <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Pinterest - Explore', eventLabel: 'Clicked'});" rel="external" href="https://www.pinterest.com/thisiswigu/" class="textblock">
                            <span class="text">
                                <h1>Career Resources</h1>
                                <p>Check out our Pinterest boards for career resources.<span class="cta">Follow @thisiswigu on Pinterest</span></p>
                            </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <div class="content twitter">
                        <a rel="external" onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'Twitter - Explore', eventLabel: 'Clicked'});" class="textblock" href="https://twitter.com/thisiswigu">
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
