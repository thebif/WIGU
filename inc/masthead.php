        <div class="wrapper-masthead">
            <header role="banner" id="masthead" class="masthead">
                <?php
                    // print brand/home link on inner pages not home page
                    if($page=="home"):
                ?>
                <h1 class="brand">When I Grow Up</h1>
                <?php
                    else:
                ?>
                <h1 class="brand"><a href="/">When I Grow Up</a></h1>
                <?php
                    endif;
                ?>
                <?php
                    if($theme):
                ?>
                <div class="current-theme"><img src="img/nav-icon-<?php print strtolower($theme); ?>.png"><span><?php print $theme_name; ?></span></div>
                <?php
                    endif;
                ?>
                <?php
                    if($page=="home"):
                ?>
                <a onClick="ga('send', 'event', { eventCategory: 'Channel Links', eventAction: 'YouTube - Episode 1', eventLabel: 'Clicked'});" href="https://www.youtube.com/watch?v=378h5Xt9dRY" rel="external" class="ext-youtube">Watch Episode One</a>
                <?php
                    endif;
                ?>
                <a href="#" class="toggle-nav-themes">Explore Your Future</a>
            </header>
        </div>

        <div class="wrapper-nav-themes">
            <nav class="nav-themes">
                <a href="find-meaning" class="item meaning"><span><img src="img/nav-icon-find.png">Find meaning</span></a>
                <a href="explore-passion" class="item passion"><span><img src="img/nav-icon-explore.png">Explore passion</span></a>
                <a href="discover-talents" class="item talents"><span><img src="img/nav-icon-discover.png">Discover talents</span></a>
                <a href="expand-possibilities" class="item possibilities"><span><img src="img/nav-icon-expand.png">Expand possibilities</span></a>
                <a href="try-career" class="item career"><span><img src="img/nav-icon-try.png">Try out a career</span></a>
            </nav>
        </div>