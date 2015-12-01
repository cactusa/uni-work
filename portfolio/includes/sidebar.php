<?php include("info.php");?>
        <div id="sidebar">
            <header>
                <a href="http://portfolio.vladthecactus.me.uk/" accesskey="1"><img src="../img/logo-80.png" alt="Logo of Vladislav Altanov" width="129" height="120" /></a>
                <h4>Web Designer<br />in Development</h4>
            </header>
            <?php 
                if ($this_page == "homepage"){
                    echo '
            <nav>
                <ul>
                    <li><a class="blur" href="portfolio/" accesskey="2">Portfolio</a></li>
                    <li><a class="blur" href="about/" accesskey="3">About</a></li>
                    <li><a class="last blur" href="contact/" accesskey="4">Contact</a></li>
                </ul>
            </nav>';
                }else{
                    echo '
            <nav>
                <ul>';
                    if ($this_page == "portfolio"){
                        echo '
                    <li><a id="currentpage" class="blur" href="../portfolio" accesskey="2">Portfolio</a></li>';
                    }else{
                        echo '
                    <li><a class="blur" href="../portfolio" accesskey="2">Portfolio</a></li>';
                    }
                    if ($this_page == "about"){
                        echo '
                    <li><a id="currentpage" class="blur" href="../about" accesskey="3">About</a></li>';
                    }else{
                        echo '
                    <li><a class="blur" href="../about" accesskey="3">About</a></li>';
                    }
                    if ($this_page == "contact"){
                        echo '
                    <li><a id="currentpage" class="last blur" href="../contact" accesskey="4">Contact</a></li>';
                    }else{
                        echo '
                    <li><a class="last blur" href="../contact" accesskey="4">Contact</a></li>';
                    }
                    echo '
                </ul>
            </nav>';
                }
            ?>

            <footer>
                <ul>
                    <li><a class="facebookicon" href="http://www.facebook.com/vladislav.altanov"></a></li>
                    <li><a class="linkedinicon" href="http://www.linkedin.com/profile/view?id=145837829&trk=tab_pro"></a></li>
                    <li><a class="twittericon" href="https://twitter.com/#!/Vlad_the_cactus"></a></li>
                    <li><a class="instagramicon" href="http://instagram.com/vlad_the_cactus"></a></li>
                    <li><a class="githubicon" href="https://github.com/cactusa"></a></li>
                </ul>
                <p>Vladislav Altanov &copy; 2012<br /> All rights reserved.</p>
            </footer>
        </div><!--End sidebar-->