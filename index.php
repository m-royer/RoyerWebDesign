<?php

session_start();

$_SESSION['token'] = md5(uniqid(mt_rand(), true));

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="language" content="english"/> 
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="author" content=”Michael Royer”/>
    <meta name="description" content="Website Web Design for Albany, Lebanon, Salem, Corvallis, Oregon area"/>
    <meta name="keywords" content="website, web page, web design, web development, e-commerce, wordpress design"/>
    <meta name=”robots” content=”noodp”/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta property="og:title" content="Royer Web Design" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://royerwebdesign.com" />
    <meta property="og:image" content="https://test.royerwebdesign.com/images/share.png" />
    <meta property="og:description" content="Royer Web Design, serving the Central Willamette Valley" />
    <title>Royer Web Design</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Luckiest+Guy&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/app.css">
    <script src="https://kit.fontawesome.com/38c1fc1524.js" crossorigin="anonymous"></script>
</head>
<body>
    <a id="top"></a>
    <nav>
        <div class="nav_wrapper">
            <a id="menuToggle" class="mobile_menu"><i class="fa-solid fa-bars"></i> MENU</a>
            <ul id="menuItems">
                <li class="active" data-section="section__home"><a href="#top"><i class="fa-solid fa-house"></i> HOME</a></li>
                <li data-section="section__design"><a href="#design">DESIGNS</a></li>
                <li data-section="section__portfolio"><a href="#portfolio">PORTFOLIO</a></li>
                <li data-section="section__pricing"><a href="#pricing">PRICING</a></li>
                <li data-section="section__contact"><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>
    <div id="presentation">
        
        <!-- Background -->
        <div class="sunrise">
            <div class="stripes">
                <div class="glow">
                    <div class="flare">
                        <div class="sun"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Background -->
    </div>

    <div class="header-text">
        <h1 class="title"><span>R</span>oyer <span>W</span>eb <span>D</span>esign</h1>
        <p class="title-sub-text">Websites & Website Accessories</p>
    </div>


<main>
    <div class="flex flex-space-between mb-5 full-size-wrap">
        <div class="box-comic m-1">
            <div class="box-title text-center">
                <h3>BUSINESS</h3>
            </div>
            <div class="box-divider">
                <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#FFF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
            </div>
            <div class="p-1 text-center">
                <p style="font-size: 4rem; color:#999;" class="pb-1"><i class="fa-solid fa-city"></i></p>
                <p>Dazzle potential customers <br /> day or night</p>
            </div>
        </div>
        <div class="box-comic m-1">
            <div class="box-title text-center">
                <h3>NONPROFIT</h3>
            </div>
            <div class="box-divider">
                <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#FFF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
            </div>
            <div class="p-1 text-center">
                <p style="font-size: 4rem; color:#999;" class="pb-1"><i class="fa-solid fa-ribbon"></i></p>
                <p>Let them know what's new<br />
                &amp; Fundraise on the web</p>
            </div>
        </div>
        <div class="box-comic m-1">
            <div class="box-title text-center">
                <h3>E-COMMERCE</h3>
            </div>
            <div class="box-divider">
                <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#FFF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
            </div>
            <div class="p-1 text-center">
                <p style="font-size: 4rem; color:#999;" class="pb-1"><i class="fa-solid fa-cart-shopping"></i></p>
                <p>Supporting Shopify and WooCommerce with WordPress</p>
            </div>
        </div>
    </div>





    <section class="section__home mt-10">
        <h2 class="headline"><span>L</span>ocal to <span>O</span>regon</h2>
        <div class="box-wrapper mb-5">
            <div class="box-border box-blur">
                <div class="box flex">

                    <div class="flex flex-half flex-center map-wrapper container-relative mobile-square" style="background-image: url('images/26709352083_2f437a6a7f_o.jpg'); background-size: cover;">
                        <div class="layer" style="background: rgba(0,0,0,0.3);"></div>
                        <div class="layer flex flex-center">
                            <img src="images/oregon.svg" id="oregon-map" alt="Beautiful image of the Gorge by Mitchell Friedman">
                        </div>
                    </div>

                    <div class="flex flex-col flex-half flex-grow pricing__box-bg mobile-square">
                        <div class="pb-2 flat-green-bg"></div>
                        <div class="box-divider full-width">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#FFF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>

                        <div class="p-1 pt-5 pb-5 flex flex-grow flex-col flex-center">
                            <div class="flex flex-center pb-05">
                                <h2 class="section-headline" style="max-width: 16ch;">SERVING THE WILLAMETTE VALLEY</h2>
                            </div>
                            <hr />
                            <div class="p-1 flex flex-col">
                                <p style="max-width: 50ch; line-height: 1.4;">
                                From Portland to Eugene and everywhere in-between I build websites for local businesses in the Willamette Valley. 
                                No matter the area of business, I bring your best to the web. Let your potential customers know about you in the 
                                finest light with expert photographs tailored for web design from someone local to the area. 
                                </p>
                            </div>
                        </div>

                        <div class="box-divider-bottom full-width">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="transparent"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="currentColor" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>
                        <div class="pt-2 flat-green-bg"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <a id="design" class="pt-8"></a>
    <section class="section__design">
        <h2 class="headline"><span>U</span>nique <span>D</span>esigns</h2>
        <div class="box-wrapper mb-1">
            <div class="box-border box-blur">
                <div class="box flex sm-flex-reverse">
                    <div class="flex flex-half flex-col pricing__box-bg">

                        <div class="pb-2 flat-green-bg"></div>
                        <div class="box-divider full-width">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#FFF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>

                        <div class="p-1 pt-5 pb-5 flex-grow flex flex-col flex-center">
                            <div class="flex pb-05">
                                <h2 class="section-headline">DESIGN THAT WORKS</h2>
                            </div>
                            <hr />
                            <div class="p-1 flex flex-center">
                                <p style="max-width: 50ch; line-height: 1.4;">
                                Good web design does more than just engage the user, it establishes trust, shows your personality, and helps the user accomplish 
                                their goal with as little ambiguity as possible. My plan is to help make the web better and easier to use, and help local
                                businesses improve their web presence and find more customers online. 
                                </p>
                            </div>
                        </div>

                        <div class="box-divider-bottom full-width">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="hsl(89, 50%, 95%)"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="currentColor" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>
                        <div class="pt-2 flat-green-bg"></div>

                    </div>
                    <div class="flex flex-half mobile-square flex-center flat-green-bg" style="background: url('images/phone_mockup2.jpg'); background-size: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="box-wrapper mb-10">
            <div class="box-border box-blur">
                <div class="box flex" style="overflow:visible;">
                    <div class="flex flex-half flex-center p-1 pt-10 pb-10 container-relative" style="background: linear-gradient(90deg, rgba(210,232,186,1) 0%, rgba(255,255,255,1) 50%, rgba(210,232,186,1) 100%);">
                        <div style="position: absolute; bottom: 0; width: 100%; height: 20%; background: linear-gradient(to bottom, rgba(218,232,186,0) 0%,rgba(218,232,186,1) 100%);"></div>
                        <div class="rocket_wrapper" style="top:-10rem;">
                            <img src="images/arrow.svg" class="arrow" alt="" />
                            <img src="images/rocket_jet_transparent.png" class="jet" alt="" />
                        </div>

                        <!-- Left side -->
                        <div class="rocket_wrapper" style="top:-7rem; transform: scale(0.3) translateX(-21rem)">
                            <img src="images/arrow.svg" class="arrow" alt="" />
                            <img src="images/rocket_jet_transparent.png" class="jet" alt="" />
                        </div>
                        <div class="rocket_wrapper" style="top:-9rem; transform: scale(0.5) translateX(-20rem)">
                            <img src="images/arrow.svg" class="arrow" alt="" />
                            <img src="images/rocket_jet_transparent.png" class="jet" alt="" />
                        </div>

                        <!-- Right side -->
                        <div class="rocket_wrapper" style="top:-6rem; transform: scale(0.3) translateX(13rem);">
                            <img src="images/arrow.svg" class="arrow" alt="" />
                            <img src="images/rocket_jet_transparent.png" class="jet" alt="" />
                        </div>
                        <div class="rocket_wrapper" style="top:-2rem; transform: scale(0.6) translateX(17rem);">
                            <img src="images/arrow.svg" class="arrow" alt="" />
                            <img src="images/rocket_jet_transparent.png" class="jet" alt="" />
                        </div>
                        

                        <div class="cloud-container">
                            <div class="cloud" id="cloud-back"></div>
                            <div class="cloud" id="cloud-mid"></div>
                            <div class="cloud hidden" id="cloud-front"></div>
                            <div class="cloud-image">
                                <img src="images/clouds/static-cloud.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow flex-center flat-green-bg design__elevate">
                        <h2 class="section-headline">ELEVATE YOUR WEB PRESENCE</h2>
                        <p class="text-center">Take your business to the next level by getting a new website today.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="portfolio__transition-top">
        <svg id="cloud-transition-top" viewBox="0 0 1200 150" width="100%" height="150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 55L16.7 54C33.3 53 66.7 51 100 47.8C133.3 44.7 166.7 40.3 200 40.8C233.3 41.3 266.7 46.7 300 48.7C333.3 50.7 366.7 49.3 400 49.7C433.3 50 466.7 52 500 49.2C533.3 46.3 566.7 38.7 600 40.3C633.3 42 666.7 53 700 59C733.3 65 766.7 66 800 61.8C833.3 57.7 866.7 48.3 900 43.3C933.3 38.3 966.7 37.7 1000 39.3C1033.3 41 1066.7 45 1100 49.2C1133.3 53.3 1166.7 57.7 1183.3 59.8L1200 62L1200 0L1183.3 0C1166.7 0 1133.3 0 1100 0C1066.7 0 1033.3 0 1000 0C966.7 0 933.3 0 900 0C866.7 0 833.3 0 800 0C766.7 0 733.3 0 700 0C666.7 0 633.3 0 600 0C566.7 0 533.3 0 500 0C466.7 0 433.3 0 400 0C366.7 0 333.3 0 300 0C266.7 0 233.3 0 200 0C166.7 0 133.3 0 100 0C66.7 0 33.3 0 16.7 0L0 0Z" fill="transparent"></path>
            <path d="M0 72L16.7 74C33.3 76 66.7 80 100 78.3C133.3 76.7 166.7 69.3 200 69.3C233.3 69.3 266.7 76.7 300 78.3C333.3 80 366.7 76 400 77C433.3 78 466.7 84 500 82.2C533.3 80.3 566.7 70.7 600 71.3C633.3 72 666.7 83 700 86.8C733.3 90.7 766.7 87.3 800 80.8C833.3 74.3 866.7 64.7 900 62.8C933.3 61 966.7 67 1000 71.8C1033.3 76.7 1066.7 80.3 1100 83.3C1133.3 86.3 1166.7 88.7 1183.3 89.8L1200 91L1200 60L1183.3 57.8C1166.7 55.7 1133.3 51.3 1100 47.2C1066.7 43 1033.3 39 1000 37.3C966.7 35.7 933.3 36.3 900 41.3C866.7 46.3 833.3 55.7 800 59.8C766.7 64 733.3 63 700 57C666.7 51 633.3 40 600 38.3C566.7 36.7 533.3 44.3 500 47.2C466.7 50 433.3 48 400 47.7C366.7 47.3 333.3 48.7 300 46.7C266.7 44.7 233.3 39.3 200 38.8C166.7 38.3 133.3 42.7 100 45.8C66.7 49 33.3 51 16.7 52L0 53Z" fill="#cccccc"></path>
            <path d="M0 96L16.7 98.2C33.3 100.3 66.7 104.7 100 103C133.3 101.3 166.7 93.7 200 92.5C233.3 91.3 266.7 96.7 300 96.7C333.3 96.7 366.7 91.3 400 91.5C433.3 91.7 466.7 97.3 500 96.5C533.3 95.7 566.7 88.3 600 89.3C633.3 90.3 666.7 99.7 700 104.2C733.3 108.7 766.7 108.3 800 103.2C833.3 98 866.7 88 900 87.2C933.3 86.3 966.7 94.7 1000 97.7C1033.3 100.7 1066.7 98.3 1100 99.3C1133.3 100.3 1166.7 104.7 1183.3 106.8L1200 109L1200 89L1183.3 87.8C1166.7 86.7 1133.3 84.3 1100 81.3C1066.7 78.3 1033.3 74.7 1000 69.8C966.7 65 933.3 59 900 60.8C866.7 62.7 833.3 72.3 800 78.8C766.7 85.3 733.3 88.7 700 84.8C666.7 81 633.3 70 600 69.3C566.7 68.7 533.3 78.3 500 80.2C466.7 82 433.3 76 400 75C366.7 74 333.3 78 300 76.3C266.7 74.7 233.3 67.3 200 67.3C166.7 67.3 133.3 74.7 100 76.3C66.7 78 33.3 74 16.7 72L0 70Z" fill="#dbdbdb"></path>
            <path d="M0 138L16.7 138C33.3 138 66.7 138 100 136.5C133.3 135 166.7 132 200 132.5C233.3 133 266.7 137 300 138C333.3 139 366.7 137 400 136.5C433.3 136 466.7 137 500 136.2C533.3 135.3 566.7 132.7 600 132.3C633.3 132 666.7 134 700 134.8C733.3 135.7 766.7 135.3 800 135.3C833.3 135.3 866.7 135.7 900 136.7C933.3 137.7 966.7 139.3 1000 137.8C1033.3 136.3 1066.7 131.7 1100 130.7C1133.3 129.7 1166.7 132.3 1183.3 133.7L1200 135L1200 107L1183.3 104.8C1166.7 102.7 1133.3 98.3 1100 97.3C1066.7 96.3 1033.3 98.7 1000 95.7C966.7 92.7 933.3 84.3 900 85.2C866.7 86 833.3 96 800 101.2C766.7 106.3 733.3 106.7 700 102.2C666.7 97.7 633.3 88.3 600 87.3C566.7 86.3 533.3 93.7 500 94.5C466.7 95.3 433.3 89.7 400 89.5C366.7 89.3 333.3 94.7 300 94.7C266.7 94.7 233.3 89.3 200 90.5C166.7 91.7 133.3 99.3 100 101C66.7 102.7 33.3 98.3 16.7 96.2L0 94Z" fill="#e9e9e9"></path>
            <path d="M0 151L16.7 151C33.3 151 66.7 151 100 151C133.3 151 166.7 151 200 151C233.3 151 266.7 151 300 151C333.3 151 366.7 151 400 151C433.3 151 466.7 151 500 151C533.3 151 566.7 151 600 151C633.3 151 666.7 151 700 151C733.3 151 766.7 151 800 151C833.3 151 866.7 151 900 151C933.3 151 966.7 151 1000 151C1033.3 151 1066.7 151 1100 151C1133.3 151 1166.7 151 1183.3 151L1200 151L1200 133L1183.3 131.7C1166.7 130.3 1133.3 127.7 1100 128.7C1066.7 129.7 1033.3 134.3 1000 135.8C966.7 137.3 933.3 135.7 900 134.7C866.7 133.7 833.3 133.3 800 133.3C766.7 133.3 733.3 133.7 700 132.8C666.7 132 633.3 130 600 130.3C566.7 130.7 533.3 133.3 500 134.2C466.7 135 433.3 134 400 134.5C366.7 135 333.3 137 300 136C266.7 135 233.3 131 200 130.5C166.7 130 133.3 133 100 134.5C66.7 136 33.3 136 16.7 136L0 136Z" fill="#f8f8f8"></path>
        </svg>
    </div>

    <div class="portfolio__transition-top-mobile">
        <svg id="cloud-transition-top" viewBox="0 0 700 100" width="100%" height="100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 36L29.2 34.5C58.3 33 116.7 30 175 30.7C233.3 31.3 291.7 35.7 350 37C408.3 38.3 466.7 36.7 525 34C583.3 31.3 641.7 27.7 670.8 25.8L700 24L700 0L670.8 0C641.7 0 583.3 0 525 0C466.7 0 408.3 0 350 0C291.7 0 233.3 0 175 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="transparent"></path>
            <path d="M0 65L29.2 63.5C58.3 62 116.7 59 175 57.7C233.3 56.3 291.7 56.7 350 59C408.3 61.3 466.7 65.7 525 67C583.3 68.3 641.7 66.7 670.8 65.8L700 65L700 22L670.8 23.8C641.7 25.7 583.3 29.3 525 32C466.7 34.7 408.3 36.3 350 35C291.7 33.7 233.3 29.3 175 28.7C116.7 28 58.3 31 29.2 32.5L0 34Z" fill="#dbdbdb"></path>
            <path d="M0 79L29.2 79.7C58.3 80.3 116.7 81.7 175 82.5C233.3 83.3 291.7 83.7 350 84.5C408.3 85.3 466.7 86.7 525 87.8C583.3 89 641.7 90 670.8 90.5L700 91L700 63L670.8 63.8C641.7 64.7 583.3 66.3 525 65C466.7 63.7 408.3 59.3 350 57C291.7 54.7 233.3 54.3 175 55.7C116.7 57 58.3 60 29.2 61.5L0 63Z" fill="#e9e9e9"></path>
            <path d="M0 101L29.2 101C58.3 101 116.7 101 175 101C233.3 101 291.7 101 350 101C408.3 101 466.7 101 525 101C583.3 101 641.7 101 670.8 101L700 101L700 89L670.8 88.5C641.7 88 583.3 87 525 85.8C466.7 84.7 408.3 83.3 350 82.5C291.7 81.7 233.3 81.3 175 80.5C116.7 79.7 58.3 78.3 29.2 77.7L0 77Z" fill="#f8f8f8"></path>
        </svg>
    </div>



    <section class="section__portfolio">
        <a class="pt-8" id="portfolio"></a>
        <div class="box-wrapper">
            <h2 class="text-center">Selected Works</h2>
            <p class="text-center">Some recent works of mine</p>
            <div class="pb-5"></div>
            <div class="portfolio__wrapper">
                <div class="portfolio__item">
                    <img src="images/portfolio/sialbany_tn.jpg" />
                    <div class="portfolio__title">Soroptimist Int'l of Albany</div>
                    <div class="portfolio__description flex">
                        <p>Soroptimist Int'l of Albany is running a custom WordPress site with a seasonal store and several fundraising pages. 
                            A custom sign-up process is running for their annual fundraiser and has drawn in nearly a million 
                            dollars since it started.
                        </p>
                        <div class="portfolio__button flex flex-center text-center">
                            <a class="btn" style="width: 100%;" href="https://sialbany.org">View Site</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio__item">
                    <img src="images/portfolio/wordle_tn.jpg" />
                    <div class="portfolio__title">Endless Wordle</div>
                    <div class="portfolio__description flex">
                        <p>Wordle is a fun game. I made it so the fun never ends! Made in React with the results and preferences saved in localStorage.</p>
                        <div class="portfolio__button flex flex-center text-center">
                            <a class="btn" style="width: 100%;" href="https://royerwebdesign.com/projects/wordle-practice/">Play Game</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio__item">
                    <img src="images/portfolio/spot_tn.jpg" />
                    <div class="portfolio__title">SPOT Scheduling System</div>
                    <div class="portfolio__description flex">
                        <p style="width: 100%;">SPOT is a scheduling system for the PSU College of Engineering IT department, built in Laravel with the intent of having computer science students add features as needed. Custom hooks for LDAP and a double-database setup make this a fully featured web app.</p>
                    </div>
                </div>
                <div class="portfolio__item">
                    <img src="images/portfolio/wasatchangling_tn.jpg" />
                    <div class="portfolio__title">Wasatch Angling</div>
                    <div class="portfolio__description flex">
                        <p style="width: 100%;">Wasatch Angling needed an online store back when e-commerce was relatively new, so they were set up with a Magento store and a custom theme. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="portfolio__transition-bottom mb-2">
        <svg id="cloud-transition-bottom" viewBox="0 0 1200 150" width="100%" height="150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 19L16.7 18.8C33.3 18.7 66.7 18.3 100 18.2C133.3 18 166.7 18 200 18.5C233.3 19 266.7 20 300 20.7C333.3 21.3 366.7 21.7 400 20.3C433.3 19 466.7 16 500 15.8C533.3 15.7 566.7 18.3 600 19.8C633.3 21.3 666.7 21.7 700 20.8C733.3 20 766.7 18 800 16.3C833.3 14.7 866.7 13.3 900 14.3C933.3 15.3 966.7 18.7 1000 19.2C1033.3 19.7 1066.7 17.3 1100 17.2C1133.3 17 1166.7 19 1183.3 20L1200 21L1200 0L1183.3 0C1166.7 0 1133.3 0 1100 0C1066.7 0 1033.3 0 1000 0C966.7 0 933.3 0 900 0C866.7 0 833.3 0 800 0C766.7 0 733.3 0 700 0C666.7 0 633.3 0 600 0C566.7 0 533.3 0 500 0C466.7 0 433.3 0 400 0C366.7 0 333.3 0 300 0C266.7 0 233.3 0 200 0C166.7 0 133.3 0 100 0C66.7 0 33.3 0 16.7 0L0 0Z" fill="#f8f8f8"></path>
            <path d="M0 48L16.7 47.7C33.3 47.3 66.7 46.7 100 43.7C133.3 40.7 166.7 35.3 200 34.3C233.3 33.3 266.7 36.7 300 37.8C333.3 39 366.7 38 400 37.8C433.3 37.7 466.7 38.3 500 38.3C533.3 38.3 566.7 37.7 600 37.7C633.3 37.7 666.7 38.3 700 38.3C733.3 38.3 766.7 37.7 800 38.2C833.3 38.7 866.7 40.3 900 42.7C933.3 45 966.7 48 1000 48.2C1033.3 48.3 1066.7 45.7 1100 44.7C1133.3 43.7 1166.7 44.3 1183.3 44.7L1200 45L1200 19L1183.3 18C1166.7 17 1133.3 15 1100 15.2C1066.7 15.3 1033.3 17.7 1000 17.2C966.7 16.7 933.3 13.3 900 12.3C866.7 11.3 833.3 12.7 800 14.3C766.7 16 733.3 18 700 18.8C666.7 19.7 633.3 19.3 600 17.8C566.7 16.3 533.3 13.7 500 13.8C466.7 14 433.3 17 400 18.3C366.7 19.7 333.3 19.3 300 18.7C266.7 18 233.3 17 200 16.5C166.7 16 133.3 16 100 16.2C66.7 16.3 33.3 16.7 16.7 16.8L0 17Z" fill="#e9e9e9"></path>
            <path d="M0 99L16.7 95C33.3 91 66.7 83 100 77.7C133.3 72.3 166.7 69.7 200 70.3C233.3 71 266.7 75 300 78.8C333.3 82.7 366.7 86.3 400 87.3C433.3 88.3 466.7 86.7 500 84.7C533.3 82.7 566.7 80.3 600 79.2C633.3 78 666.7 78 700 79.7C733.3 81.3 766.7 84.7 800 83.3C833.3 82 866.7 76 900 76.3C933.3 76.7 966.7 83.3 1000 86.3C1033.3 89.3 1066.7 88.7 1100 90.8C1133.3 93 1166.7 98 1183.3 100.5L1200 103L1200 43L1183.3 42.7C1166.7 42.3 1133.3 41.7 1100 42.7C1066.7 43.7 1033.3 46.3 1000 46.2C966.7 46 933.3 43 900 40.7C866.7 38.3 833.3 36.7 800 36.2C766.7 35.7 733.3 36.3 700 36.3C666.7 36.3 633.3 35.7 600 35.7C566.7 35.7 533.3 36.3 500 36.3C466.7 36.3 433.3 35.7 400 35.8C366.7 36 333.3 37 300 35.8C266.7 34.7 233.3 31.3 200 32.3C166.7 33.3 133.3 38.7 100 41.7C66.7 44.7 33.3 45.3 16.7 45.7L0 46Z" fill="#dbdbdb"></path>
            <path d="M0 124L16.7 120.3C33.3 116.7 66.7 109.3 100 105.3C133.3 101.3 166.7 100.7 200 102.7C233.3 104.7 266.7 109.3 300 111.8C333.3 114.3 366.7 114.7 400 114.8C433.3 115 466.7 115 500 111.8C533.3 108.7 566.7 102.3 600 99.2C633.3 96 666.7 96 700 98.2C733.3 100.3 766.7 104.7 800 106.3C833.3 108 866.7 107 900 106.8C933.3 106.7 966.7 107.3 1000 110.3C1033.3 113.3 1066.7 118.7 1100 120.7C1133.3 122.7 1166.7 121.3 1183.3 120.7L1200 120L1200 101L1183.3 98.5C1166.7 96 1133.3 91 1100 88.8C1066.7 86.7 1033.3 87.3 1000 84.3C966.7 81.3 933.3 74.7 900 74.3C866.7 74 833.3 80 800 81.3C766.7 82.7 733.3 79.3 700 77.7C666.7 76 633.3 76 600 77.2C566.7 78.3 533.3 80.7 500 82.7C466.7 84.7 433.3 86.3 400 85.3C366.7 84.3 333.3 80.7 300 76.8C266.7 73 233.3 69 200 68.3C166.7 67.7 133.3 70.3 100 75.7C66.7 81 33.3 89 16.7 93L0 97Z" fill="#cccccc"></path>
            <path d="M0 151L16.7 151C33.3 151 66.7 151 100 151C133.3 151 166.7 151 200 151C233.3 151 266.7 151 300 151C333.3 151 366.7 151 400 151C433.3 151 466.7 151 500 151C533.3 151 566.7 151 600 151C633.3 151 666.7 151 700 151C733.3 151 766.7 151 800 151C833.3 151 866.7 151 900 151C933.3 151 966.7 151 1000 151C1033.3 151 1066.7 151 1100 151C1133.3 151 1166.7 151 1183.3 151L1200 151L1200 118L1183.3 118.7C1166.7 119.3 1133.3 120.7 1100 118.7C1066.7 116.7 1033.3 111.3 1000 108.3C966.7 105.3 933.3 104.7 900 104.8C866.7 105 833.3 106 800 104.3C766.7 102.7 733.3 98.3 700 96.2C666.7 94 633.3 94 600 97.2C566.7 100.3 533.3 106.7 500 109.8C466.7 113 433.3 113 400 112.8C366.7 112.7 333.3 112.3 300 109.8C266.7 107.3 233.3 102.7 200 100.7C166.7 98.7 133.3 99.3 100 103.3C66.7 107.3 33.3 114.7 16.7 118.3L0 122Z" fill="transparent"></path>
        </svg>
    </div>

    <div class="portfolio__transition-bottom-mobile">
        <svg id="visual" viewBox="0 0 700 100" width="100%" height="100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 21L29.2 19.3C58.3 17.7 116.7 14.3 175 12.8C233.3 11.3 291.7 11.7 350 11.7C408.3 11.7 466.7 11.3 525 12.3C583.3 13.3 641.7 15.7 670.8 16.8L700 18L700 0L670.8 0C641.7 0 583.3 0 525 0C466.7 0 408.3 0 350 0C291.7 0 233.3 0 175 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#f8f8f8"></path>
            <path d="M0 66L29.2 62.7C58.3 59.3 116.7 52.7 175 50.5C233.3 48.3 291.7 50.7 350 52.7C408.3 54.7 466.7 56.3 525 55C583.3 53.7 641.7 49.3 670.8 47.2L700 45L700 16L670.8 14.8C641.7 13.7 583.3 11.3 525 10.3C466.7 9.3 408.3 9.7 350 9.7C291.7 9.7 233.3 9.3 175 10.8C116.7 12.3 58.3 15.7 29.2 17.3L0 19Z" fill="#e9e9e9"></path>
            <path d="M0 82L29.2 82.3C58.3 82.7 116.7 83.3 175 85.2C233.3 87 291.7 90 350 89.5C408.3 89 466.7 85 525 83.7C583.3 82.3 641.7 83.7 670.8 84.3L700 85L700 43L670.8 45.2C641.7 47.3 583.3 51.7 525 53C466.7 54.3 408.3 52.7 350 50.7C291.7 48.7 233.3 46.3 175 48.5C116.7 50.7 58.3 57.3 29.2 60.7L0 64Z" fill="#dbdbdb"></path>
            <path d="M0 101L29.2 101C58.3 101 116.7 101 175 101C233.3 101 291.7 101 350 101C408.3 101 466.7 101 525 101C583.3 101 641.7 101 670.8 101L700 101L700 83L670.8 82.3C641.7 81.7 583.3 80.3 525 81.7C466.7 83 408.3 87 350 87.5C291.7 88 233.3 85 175 83.2C116.7 81.3 58.3 80.7 29.2 80.3L0 80Z" fill="transparent"></path>
        </svg>
    </div>





    <a id="pricing" class="pt-8"></a>
    <section class="section__pricing">
        <h2 class="headline"><span>P</span>ricing Plan</h2>
        <div class="flex box-wrapper pricing__wrapper">

            <!-- No Hassle -->
            <div class="box-wrapper pricing__left-box">
                <div class="box-border box-blur">
                    <div class="box flex flex-col pricing__box-blue-bg">
                        <div class="p-1 pb-0 box-title text-center pricing__blue-bg">
                            <h2 style="font-size: 2rem;">HOSTING PLAN</h2>
                        </div>
                        <div class="box-divider pricing__purple-bg pricing__blue-color">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 16L10.7 15.7C21.3 15.3 42.7 14.7 64.2 14.5C85.7 14.3 107.3 14.7 128.8 15C150.3 15.3 171.7 15.7 193 15.2C214.3 14.7 235.7 13.3 257 13.3C278.3 13.3 299.7 14.7 321.2 15C342.7 15.3 364.3 14.7 385.8 14.2C407.3 13.7 428.7 13.3 439.3 13.2L450 13L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#ffffff" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>
                        <div style="font-size: 8rem; text-align: center; color: #c2e0ee;">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="p-2 pt-0 pb-5">
                            <h3 class="pricing__title">No more headaches</h3>
                            <div class="mb-1 pricing__description">
                                <p>
                                    Keep your worries at bay with a hosting plan that keeps downtime to a minimum. 
                                    Speed and reliability are achieved through extensive caching and testing behind the
                                    scenes to prevent any unwanted interruptions.
                                </p>
                            </div>
                            <p class="pricing__bold">Only</p>
                            <p class="pricing__price">$150/Mo</p>
                            <ul class="pricing__checklist">
                                <li>Closely monitored WordPress websites</li>
                                <li>Daily backups</li>
                                <li>Monthly maintenance</li>
                                <li>Yearly or monthly billing</li>
                                <li>Monthly visitor reports</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plus sign must go here for screen readers and mobile stacking -->
            <div class="pricing__plus">
                <img src="images/plus.svg" alt="Initial Construction WITH Hosting" />
            </div>

            <!-- Standard -->
            <div class="box-wrapper pricing__middle-box">
                <div class="box-border box-blur">
                    <div class="box flex flex-col pricing__box-brown-bg" style="overflow: visible;">
                        <div class="p-1 pb-0 box-title pricing__brown-bg text-center">
                            <h2 style="font-size: 2rem;">GETTING STARTED</h2>
                        </div>
                        <div class="box-divider pricing__brown-bg pricing__brown-color">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 13L10.7 13.3C21.3 13.7 42.7 14.3 64.2 14.7C85.7 15 107.3 15 128.8 14.5C150.3 14 171.7 13 193 13.2C214.3 13.3 235.7 14.7 257 15.3C278.3 16 299.7 16 321.2 15.5C342.7 15 364.3 14 385.8 13.7C407.3 13.3 428.7 13.7 439.3 13.8L450 14L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#ffffff" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>
                        <div style="font-size: 8rem; text-align: center; color: #E8D1BA;">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div class="p-2 pt-0 pb-5">
                            <h3 class="pricing__title">Initial Construction</h3>
                            <div class="mb-1 pricing__description">
                                <p>
                                    Up-front cost varies by work required, but 5-page starter sites can be built for as little as $3,500. 
                                    Extra features like payments, an e-commerce store, and professional photographs can be added 
                                    for a small fee.
                                </p>
                            </div>
                            <p class="pricing__bold">Starting At</p>
                            <p class="pricing__price">$3,500</p>
                            <ul class="pricing__checklist">
                                <li><a href="https://en.wikipedia.org/wiki/Web_Content_Accessibility_Guidelines" target="_blank">WCAG AA</a> accessible</li>
                                <li>Tailored for all devices</li>
                                <li>Personalized design</li>
                                <li>Search engine optimized</li>
                                <li>5-pages to start</li>
                                <li>Up to 3 revisions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom -->
            <div class="box-wrapper pricing__right-box">
                <div class="box-border box-blur">
                    <div class="box flex flex-col pricing__box-purple-bg">
                        <div class="p-1 pb-0 box-title pricing__purple-bg text-center">
                            <h2 style="font-size: 2rem;">CUSTOM SOLUTIONS</h2>
                        </div>
                        <div class="box-divider pricing__blue-bg pricing__purple-color">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 15L10.7 14.8C21.3 14.7 42.7 14.3 64.2 13.8C85.7 13.3 107.3 12.7 128.8 12.8C150.3 13 171.7 14 193 14C214.3 14 235.7 13 257 13.2C278.3 13.3 299.7 14.7 321.2 14.8C342.7 15 364.3 14 385.8 13.8C407.3 13.7 428.7 14.3 439.3 14.7L450 15L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#ffffff" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>
                        <div style="font-size: 8rem; text-align: center; color: #b0a6d0;">
                            <i class="fa-brands fa-laravel"></i>
                        </div>
                        <div class="p-2 pt-0 pb-5">
                            <h3 class="pricing__title">Web Applications</h3>
                            <div class="mb-1 pricing__description">
                                <p>Custom Laravel Web Applications made with React. For businesses looking to make an online service.</p>
                            </div>
                            <p class="pricing__bold pb-1 pt-1">Contact For Pricing</p>
                            <ul class="pricing__checklist">
                                <li>Small games</li>
                                <li>Custom applications</li>
                                <li>SAAS development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-wrapper mb-5 mt-5">
            <div class="box-border box-blur">
                <div class="box flex">
                    <div class="flex flex-half flex-center p-1 mobile-square" style="background:url('images/macbook_open_to_wordpress.jpg'); background-size: cover;">
                        &nbsp;
                    </div>

                    <div class="flex flex-col flex-half pricing__box-bg">
                        <div class="pb-2 flat-green-bg"></div>
                        <div class="box-divider full-width">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="currentColor"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="#FFF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>

                        <div class="p-1 pt-5 pb-5 flex flex-col flex-grow flex-center">
                            <div class="flex flex-center pb-05">
                                <h2 class="section-headline" style="max-width: 16ch;">ONGOING MAINTENANCE</h2>
                            </div>
                            <hr />
                            <div class="p-1 flex flex-center">
                                <p style="max-width: 50ch; line-height: 1.4;">
                                    Included with the hosting plan, regular maintenance is performed monthly to ensure sites are secure and high performing. 
                                    Content updates are also included with hosting and can be done either directly or indirectly. 
                                    Additional updates are available on an hourly basis or through an additional monthly plan.
                                </p>
                            </div>
                        </div>

                        <div class="box-divider-bottom full-width">
                            <svg id="visual" viewBox="0 0 450 20" width="100%" preserveAspectRatio="none" style="margin-bottom:-2px;" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="450" height="20" fill="hsl(89, 50%, 95%)"></rect><path d="M0 7L10.7 7C21.3 7 42.7 7 64.2 7.8C85.7 8.7 107.3 10.3 128.8 10.7C150.3 11 171.7 10 193 9C214.3 8 235.7 7 257 7.7C278.3 8.3 299.7 10.7 321.2 11C342.7 11.3 364.3 9.7 385.8 9.2C407.3 8.7 428.7 9.3 439.3 9.7L450 10L450 21L439.3 21C428.7 21 407.3 21 385.8 21C364.3 21 342.7 21 321.2 21C299.7 21 278.3 21 257 21C235.7 21 214.3 21 193 21C171.7 21 150.3 21 128.8 21C107.3 21 85.7 21 64.2 21C42.7 21 21.3 21 10.7 21L0 21Z" fill="currentColor" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
                        </div>
                        <div class="pt-2 flat-green-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <a id="contact" class="pt-8"></a>
    <section class="section__contact">
        <h2 class="headline"><span>C</span>ontact</h2>
        <div class="box-wrapper">
            <div class="box-border box-blur">
                <div class="box flex flex-col flex-center">
                    <div class="decoration__contact-stripes"></div>
                    <div class="p-1" style="width: 100%; max-width: 700px;">
                        <h3>Let's Chat</h3>
                        <p>Use the form below to start a conversation on how to get started. <br />
                        OR send me an email at <em>mike [at] royerwebdesign.com</em></p>
                        <p class="required">* = Required</p>

                        <form action="/contact.php" method="POST" id="contact-form" class="pt-2">
                            <div class="flex full-width">
                                <div class="flex-half">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <div class="input-wrapper">
                                        <input type="text" id="name" name="name" required />
                                        <small id="name-error"></small>
                                    </div>
                                </div>
                                <div class="form-space flex-half">
                                    <label for="org-name">Organization Name</label>
                                    <div class="input-wrapper">
                                        <input type="text" id="org-name" name="org-name" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex full-width mt-1">
                                <div class="flex-half">
                                    <label for="email">E-Mail<span class="required">*</span></label>
                                    <div class="input-wrapper">
                                        <input type="email" id="email" name="email" placeholder="you@mail.com" required />
                                        <small id="email-error"></small>
                                    </div>
                                </div>
                                <div class="form-space flex-half">
                                    <label for="url">Website URL</label>
                                    <div class="input-wrapper" style="flex-direction: row;">
                                        <span class="prefix">https://</span><input type="text" id="url" name="url" placeholder="example.com" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex full-width mt-1">
                                <div class="full-width">
                                    <label for="issue">How can I help you?<span class="required">*</span></label>
                                    <div class="input-wrapper">
                                        <textarea id="message" name="message" rows="10" required></textarea>
                                        <small id="message-error"></small>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>" />
                            
                            <div class="pb-1 mt-1">
                                <button class="btn" id="submit-button">
                                    <span id="submit-text">Submit</span> <i class="fa-solid fa-paper-plane" id="submit-icon"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="contact-thank-you">
                        <div style="width: 100%; max-width: 700px;">
                            <h3>Submitted!</h3>
                            <p>Thank you for your submission. You should expect a reply within 1-2 business days.</p>
                            <div class="contact-results-wrapper ">
                                <div class="flex">
                                    <div class="flex-half m-1">
                                        <p>Name:</p>
                                        <div class="contact-results-text-bg" id="contactResultsName"></div>
                                    </div>
                                    <div class="flex-half m-1">
                                        <p>Organization Name:</p>
                                        <div class="contact-results-text-bg" id="contactResultsOrg"></div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-half m-1">
                                        <p>E-Mail:</p>
                                        <div class="contact-results-text-bg" id="contactResultsEmail"></div>
                                    </div>
                                    <div class="flex-half m-1">
                                        <p>Website URL:</p>
                                        <div class="contact-results-text-bg" id="contactResultsURL"></div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="full-width m-1">
                                        <p>Message: <br /></p>
                                        <div class="contact-results-text-bg full-width" id="contactResultsMessage"></div>
                                    </div>
                                </div>
                                <div class="flex full-width">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="decoration__contact-stripes"></div>
                </div>
            </div>
        </div>
    </section>
</main>





    <footer>
        <div class="watermelon-stripes"></div>
        <div class="footer__content">
            <h3>Royer Web Design</h3>
            <p>Serving the Willamette Valley since 2009</p>
            <div class="footer__icons">
                <a href="https://github.com/m-royer" alt="GitHub Profile"><i class="fa-brands fa-github"></i></a> 
                <a href="https://codepen.io/m-royer" alt="CodePen Works"><i class="fa-brands fa-codepen"></i></a>
                <a href="mailto:mike@royerwebdesign.com" alt="Send me an email"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
        
    </footer>






    <!-- cloud box-shadow svg filter -->
        <svg width="0" height="0">
            <!-- Animated -->
            <filter id="filter-back">
                <feTurbulence type="fractalNoise" baseFrequency="0.013" numOctaves="3" seed="563">
                    <animate id="cloud-animate" attributeName="baseFrequency" dur="50s" values=".009;.012;.009" repeatCount="indefinite">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="100" />
            </filter>
        
            <filter id="filter-mid">
                <feTurbulence type="fractalNoise" baseFrequency="0.013" numOctaves="3" seed="563">
                    <animate id="cloud-animate" attributeName="baseFrequency" dur="50s" values=".009;.012;.009" repeatCount="indefinite">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="100" />
            </filter>
        
            <filter id="filter-front">
                <feTurbulence type="fractalNoise" baseFrequency="0.013" numOctaves="3" seed="563">
                    <animate id="cloud-animate" attributeName="baseFrequency" dur="50s" values=".009;.012;.009" repeatCount="indefinite">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="100" />
            </filter>


            <!-- Hue Shift   https://codepen.io/mullany/pen/AZqQqB
            <feColorMatrix in="cloudbase" type="hueRotate" values="0" result="cloud">
                <animate attributeName="values" from="0" to="360" dur="20s" repeatCount="indefinite"/>
            </feColorMatrix>
            
            <feColorMatrix in="cloud" result="wispy" type="matrix" 
                                        values="4 0 0 0 -1
                                                4 0 0 0 -1
                                                4 0 0 0 -1
                                                1 0 0 0 0   
                                                "/>

            <feFlood flood-color="#113388" result="blue"/>
            
            <feBlend mode="screen" in2="blue" in="wispy"/>
            
            <feGaussianBlur stdDeviation="4"/>
            
            <feComposite operator="in" in2="SourceGraphic"/>
            -->


            <!-------- original
                <filter id="filter-back">
                <feTurbulence type="fractalNoise" baseFrequency="0.009" numOctaves="3" seed="563">
                    <animate id="cloud-animate" attributeName="baseFrequency" dur="100s" values=".009;.015" repeatCount="indefinite">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="120" />
            </filter>
        
            <filter id="filter-mid">
                <feTurbulence type="fractalNoise" baseFrequency="0.009" numOctaves="3" seed="563">
                    <animate id="cloud-animate" attributeName="baseFrequency" dur="100s" values=".009;.015" repeatCount="indefinite">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="120" />
            </filter>
        
            <filter id="filter-front">
                <feTurbulence type="fractalNoise" baseFrequency="0.009" numOctaves="3" seed="563">
                    <animate id="cloud-animate" attributeName="baseFrequency" dur="100s" values=".009;.015" repeatCount="indefinite">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="120" />
            </filter>
            ---->
        
            <!-- Non-Animated -->
            <filter id="filter-back-noanimate">
                <feTurbulence type="fractalNoise" baseFrequency="0.009" numOctaves="3" seed="563">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="120" />
            </filter>
        
            <filter id="filter-mid-noanimate">
                <feTurbulence type="fractalNoise" baseFrequency="0.009" numOctaves="3" seed="563">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="120" />
            </filter>
        
            <filter id="filter-front-noanimate">
                <feTurbulence type="fractalNoise" baseFrequency="0.009" numOctaves="3" seed="563">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="120" />
            </filter>





            <!-- Non-Animated MOBILE -->
            <filter id="filter-back-noanimate-mobile">
                <feTurbulence type="fractalNoise" baseFrequency="0.015" numOctaves="3" seed="563">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="160" />
            </filter>
        
            <filter id="filter-mid-noanimate-mobile">
                <feTurbulence type="fractalNoise" baseFrequency="0.015" numOctaves="3" seed="563">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="160" />
            </filter>
        
            <filter id="filter-front-noanimate-mobile">
                <feTurbulence type="fractalNoise" baseFrequency="0.015" numOctaves="3" seed="563">
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="160" />
            </filter>
            </svg>

    <script src="js/app.js"></script>
</body>
</html>