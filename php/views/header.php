<!DOCTYPE html>
<html class="h100" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AlfaTrades</title>
        <link rel="stylesheet" type="text/css" href="../assets/js/slick/slick.css"/>
        <link rel="stylesheet" href="../assets/ui/jquery-ui.min.css">
        <link rel="stylesheet" href="../assets/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/owlcarousel/owl.theme.default.min.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <?php
        if ($_SERVER['REQUEST_URI'] == '/support') {
            echo '<link rel="stylesheet" href="../assets/css/faq.css">';
        }
        ?>
    </head>
    <body class="h100 m-0">

        <div class="h100 site-container">
            <div id="top-nav" class="container top-nav-wrap">
                <div id="header-tn" class="header">
                    <div class="header_logo">
                        <a href="/">
                            <img src="./assets/img/alfatrades.png" alt="AlfaTraders">
                        </a>
                    </div>
                    <div class="header_lang">
                        <a href="#" class="lang-toggle">
                            <span>Ru</span>
                            <img class="btn-icon" src="./assets/img/shevron-down.svg">                            
                        </a>
                        <div id="lang-content" class="lang-content" style="display: none;">
                            <div class="lang-content-nav">
                                <a href="#">RU</a>
                                <a href="#">ENG</a>
                            </div>
                        </div>

                    </div>
                    <div class="header_burger">
                        <button class="btn menu-toggle">
                            <img src="./assets/img/nav-close.svg">
                        </button>
                    </div>
                    <div class="header_profile">
                        <button class="btn btn-circle">
                            <img src="./assets/img/profile.png">
                        </button>
                    </div>
                </div>
                <nav class="header-nav">
                    <a class="header-nav_link" href="/">??????????????</a>
                    <a class="header-nav_link" href="/about">?? ??????????????</a>
                    <a class="header-nav_link" href="/reviews">????????????</a>
                    <a class="header-nav_link" href="/news">??????????????</a>
                    <a class="header-nav_link" href="/support">????????????</a>
                    <a class="header-nav_link" href="/reserves">??????????????</a>
                    <a class="header-nav_link" href="/rates">?????????? ???????????? </a>
                    <a class="header-nav_link" href="/partners">??????????????????</a>
                    <a class="header-nav_link" href="/contacts">????????????????</a>
                </nav>
                <div class="top-nav-footer">
                    <div class="top-nav-footer-wrap">
                        <div class="top-nav_social">
                            <a class="social-link tg-link" href="#"></a>
                            <a class="social-link vk-link" href="#"></a>
                            <a class="social-link whatsapp-link" href="#"></a>
                            <a class="social-link insta-link" href="#"></a>
                        </div>
                        <div class="top-nav-footer_links">
                            <a class="top-nav-footer_link" href="#">?????????????? ??????????????????</a>
                            <a class="top-nav-footer_link" href="/ppol">???????????????? ????????????????????????????????????</a>
                            <a class="top-nav-footer_link" href="#">??????????????????</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- main start -->
            <div id="main" class="h100 main-wrap">
                <div class="h100 site-content">
                    <!-- header start -->
                    <div id="header" class="container header">
                        <div class="header_logo">
                            <a href="/">
                                <img src="./assets/img/alfatrades.png" alt="AlfaTraders">
                            </a>
                        </div>
                        <div class="header_lang">
                            <a href="#" class="lang-toggle">
                                <span>Ru</span>
                                <img class="btn-icon" src="./assets/img/shevron-down.svg">                            
                            </a>
                            <div id="lang-content" class="lang-content" style="display: none;">
                                <div class="lang-content-nav">
                                    <a href="#">RU</a>
                                    <a href="#">ENG</a>
                                </div>
                            </div>

                        </div>
                        <div class="header_burger">
                            <button class="btn menu-toggle">
                                <img src="./assets/img/burger.svg">
                            </button>
                        </div>
                        <div class="header_profile">
                            <button class="btn btn-circle">
                                <img src="./assets/img/profile.png">
                            </button>
                        </div>
                    </div>
                    <!-- content start -->
                    <div id="content" class="main-content">
                        <!-- PAGE CONTENT HERE -->
                        <script>
                            let elem = document.getElementById('content');
                            elem.setAttribute('style', 'display: none');
                        </script>