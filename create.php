<?php
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    return rmdir($dir);
}
$string = file_get_contents("data.json");
if ($string === false) {
    // deal with error...
}

$json = json_decode($string, true);
if ($json === null) {
    // deal with error...
}
deleteDirectory('posts');
deleteDirectory('ua/posts');
mkdir("posts", 0700);
mkdir("ua/posts", 0700);

$json=$json['posts'];
foreach ($json as $person_name => $person_a) {
    $str='';
    foreach ($person_a['desc'] as $person_name  => $txt) {
        $str.='<p class="blog-p"> '.$txt.'</p>';
    };
    file_put_contents($person_a['path'], '<!DOCTYPE html >
                                            <html ⚡ lang="en" prefix="og: https://ogp.me/ns#">
                                            <head>
                                                <meta charset="utf-8">
                                                <title>MediasScan</title>
                                                <meta name="description" content="Мониторинг СМИ и социальных сетей &amp; Media Scan bot">
                                                <meta name="keywords"
                                                      content="	media_scan_bot, monitoring, news monitoring, Медиа сканер, медиа скан, медиа мониторинг, media monitoring bot, media scan bot, мониторинг телеграм, мониторинг сми, мониторинг бот, телеграм бот мониторинг сми, сми мониторинг, мониторинг">
                                                <!--Open Graph-->
                                                <meta property="og:title" content="MediasScan"/>
                                                <meta property="og:type" content="website"/>
                                                <meta property="og:url" content="https://nyankir.github.io/testmetick/ua"/>
                                                <meta property="og:image"
                                                      content="https://ic.wampi.ru/2021/11/08/banner.jpg"/>
                                                <meta property="og:description"
                                                      content="Мониторинг СМИ и социальных сетей &amp; Media Scan bot"/>
                                                <meta property="og:locale" content="ru"/>
                                                <meta property="og:site_name" content="MediasScan"/>
                                                <!-- Mobile Specific Meta -->
                                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                                <link rel="alternate" hreflang="ua" href="https://mediascan.cc/ua.html">
                                                <link rel="alternate" hreflang="ru" href="https://mediascan.cc/">
                                                <link rel="shortcut icon" href="assets/logo_h.png" type="image/x-icon">
                                                <link rel="stylesheet" href="styles/owl.carousel.css">
                                                <link rel="stylesheet" href="assets/fonts/css/all.css">
                                                <link rel="stylesheet" href="styles/flaticon.css">
                                                <link rel="stylesheet" href="styles/animate.css">
                                                <link rel="stylesheet" href="styles/bootstrap.min.css">
                                                <link rel="stylesheet" href="styles/video.min.css">
                                                <link rel="stylesheet" href="styles/it-source.css">
                                                <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
                                                <script type="application/ld+json">
                                                    {
                                                        "@context": "https://schema.org/",
                                                        "@type": "Review",
                                                        "reviewRating": {
                                                            "@type": "Rating",
                                                            "ratingValue": "5"
                                                        },
                                                        "author": {
                                                            "@type": "Person",
                                                        },
                                                        "publisher": {
                                                            "@type": "Organization",
                                                            "name": "MediasScan"
                                                        }
                                                    }
                                                </script>
                                                <script async src="https://cdn.ampproject.org/v0.js"></script>
                                                <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
                                                <script async src="https://www.googletagmanager.com/gtag/js?id=G-JVRF8XLJHC"></script>
                                                <script>
                                                    window.dataLayer = window.dataLayer || [];

                                                    function gtag() {
                                                        dataLayer.push(arguments);
                                                    }

                                                    gtag("js", new Date());

                                                    gtag("config", "G-JVRF8XLJHC");
                                                </script>
                                                <link rel="canonical" href="https://nyankir.github.io/testmetick/">
                                                <style amp-boilerplate>
                                                    body {
                                                    -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                                                    -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                                                    -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
                                                    animation: -amp-start 8s steps(1, end) 0s 1 normal both
                                                }

                                                @-webkit-keyframes -amp-start {
                                                    from {
                                                        visibility: hidden
                                                    }
                                                    to {
                                                        visibility: visible
                                                    }
                                                }

                                                @-moz-keyframes -amp-start {
                                                    from {
                                                        visibility: hidden
                                                    }
                                                    to {
                                                        visibility: visible
                                                    }
                                                }

                                                @-ms-keyframes -amp-start {
                                                    from {
                                                        visibility: hidden
                                                    }
                                                    to {
                                                        visibility: visible
                                                    }
                                                }

                                                @-o-keyframes -amp-start {
                                                    from {
                                                        visibility: hidden
                                                    }
                                                    to {
                                                        visibility: visible
                                                    }
                                                }

                                                @keyframes -amp-start {
                                                    from {
                                                        visibility: hidden
                                                    }
                                                    to {
                                                        visibility: visible
                                                    }
                                                }
                                                </style>
                                                <noscript>
                                                    <style amp-boilerplate>body {
                                                        -webkit-animation: none;
                                                        -moz-animation: none;
                                                        -ms-animation: none;
                                                        animation: none
                                                    }</style>
                                                </noscript>
                                            </head>

                                          <body class="s-it" data-spy="scroll" data-target=".it-up-main-navigation" data-offset="80">
                                          <div class="up">
                                              <a href="#" class="scrollup text-center" style="display: none;"><i class="fas fa-chevron-up"></i></a>
                                          </div>

                                          <!-- Start of header section
                                          ============================================= -->
                                          <header id="it-header-up" class="it-header-up-seaction">
                                              <div class="it-header-up-top clearfix">
                                                  <div class="container">
                                                      <div class="it-header-top-cta float-left">
                                                          <a href=""><i></i> support@mediascan.cc</a>
                                                          <a href=""><i></i> +372 5388 1106</a>
                                                          <a href=""><i></i> Harjumaa, Tallinn linn, Padriku tee 12/3-4, 11912</a>
                                                      </div>

                                                  </div>
                                              </div>
                                              <div class="it-up-header-main">
                                                  <div class="container">
                                                      <div class="it-up-brand-logo float-left">
                                                          <a href="#"><img src="../assets/logo1.png" alt=""></a>
                                                      </div>
                                                      <div class="it-up-main-menu-wrap clearfix">
                                                          <nav class="it-up-main-navigation float-left ul-li">
                                                              <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                                                                <li><a class="nav-link" href="/testmetick#it-up-banner">Главная</a></li>
                                                                   <li><a class="nav-link" href="/testmetick#it-up-featured">Функционал</a></li>
                                                                   <li><a class="nav-link" href="/testmetick#it-up-service">Цены</a></li>
                                                                   <li><a class="nav-link" href="/testmetick#it-up-blog">Блог</a></li>
                                                                   <li><a class="nav-link" href="/testmetick#it-up-contact">Контакты</a></li>
                                                              </ul>
                                                          </nav>
                                                          <div class="it-up-header-cta-btn float-right text-center">
                                                              <a href="https://mediascan.cc/dashboard">Dashboard
                                                                  <span>
                                                                      <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                                                           xmlns="http://www.w3.org/2000/svg">
                                          <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9L25 9V7L0 7L0 9Z"
                                                fill="black"/>
                                          </svg>
                                                                  </span>
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </header>
                                          <!-- End of header section
                                          	============================================= -->


                                          <section class=" position-relative blog-page" >
                                              <div class="container">
                                                  <div class="row" style="flex-direction: column">
                                                      <div class="blog_header">
                                                          <h3 class="blog-title">'.$person_a["title"].'</h3>
                                                          <span class="blog-date">'.$person_a["date"].'</span>
                                                      </div>
                                                          <img src="'.$person_a["img"].'" alt="" class="blog-img">
                                                      <div class="blog_text">
'.$str.'
                                                      </div>
                                                  </div>
                                              </div>
                                          </section>


                                          <!-- Start of blog section
                                              ============================================= -->
                                          <div class="position-relative">

                                              <div class="it-up-blog-content blog-carousel" id="blog-carousel">

                                              </div>
                                          </div>
                                          <!-- End of blog section
                                              ============================================= -->


                                          <!-- Start of footer section
                                          	============================================= -->
                                          <div id="it-up-footer" class="it-up-footer-section position-relative">
                                              <div class="container">
                                                  <div class="it-up-footer-content-wrap">
                                                      <div class="row">
                                                          <div class="col-lg-3 col-md-6">
                                                              <div class="it-up-footer-widget headline-1 pera-content">
                                                                  <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                      <p><a href="#">Политика конфиденциальности</a></p>
                                                                      <p><a href="#">Условия использования</a></p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-3 col-md-6">
                                                              <div class="it-up-footer-widget headline-1 pera-content">
                                                                  <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                      <p><a href="https://t.me/media_scan_bot">Telegram bot</a></p>
                                                                      <p><a href="https://t.me/media_scan">Telegram канал</a></p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-3 col-md-6">
                                                              <div class="it-up-footer-widget headline-1 pera-content">
                                                                  <div class="it-up-footer-logo-widget it-up-headline pera-content">
                            <p><a href="https://www.facebook.com/mediascan.bot">Facebook</a></p>
                            <p><a href="https://www.instagram.com/mediascan.bot/">Instagram</a></p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-3 col-md-6">
                                                              <div class="it-up-footer-widget headline-1 pera-content">
                                                                  <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                      <p><a href="#">API документация</a></p>
                                                                      <p><a href="#">Панель мониторинга</a></p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="it-up-footer-copyright text-center pera-content">
                                                  <div class="container">
                                                      <p>© 2021 Gobeside LCC. All rights reserved.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- End of footer section
                                          	============================================= -->

                                          <!-- For Js Library -->
                                          <script src="../scripts/jquery.js"></script>
                                          <script src="../scripts/bootstrap.min.js"></script>
                                          <script src="../scripts/popper.min.js"></script>
                                          <script src="../scripts/owl.js"></script>
                                          <script src="../scripts/jquery.magnific-popup.min.js"></script>
                                          <script src="../scripts/appear.js"></script>
                                          <script src="../scripts/wow.min.js"></script>
                                          <script src="../scripts/parallax-scroll.js"></script>
                                          <script src="../scripts/circle-progress.js"></script>
                                          <script src="../scripts/pagenav.js"></script>
                                          <script src="../scripts/jquery.counterup.min.js"></script>
                                          <script src="../scripts/waypoints.min.js"></script>
                                          <script src="../scripts/typer-new.js"></script>
                                          <script src="../scripts/init.js"></script>
                                          <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                                          </body>
                                          </html>');








      foreach ($json as $person_name => $person_a) {
          $str='';
          foreach ($person_a['descUA'] as $person_name  => $txt) {
              $str.='<p class="blog-p"> '.$txt.'</p>';
          };
          file_put_contents($person_a['pathUA'], '<!DOCTYPE html >
                                                <html ⚡ lang="en" prefix="og: https://ogp.me/ns#">
                                                <head>
                                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

                                                    <title>'.$person_a["titleUA"].'</title>
                                                    <meta name="description" content="'.$person_a["titleUA"].'">
                                                    <meta name="keywords"
                                                          content="	media_scan_bot, monitoring, news monitoring, Медиа сканер, медиа скан, медиа мониторинг, media monitoring bot, media scan bot, мониторинг телеграм, мониторинг сми, мониторинг бот, телеграм бот мониторинг сми, сми мониторинг, мониторинг">
                                                    <!--Open Graph-->
                                                    <meta property="og:title" content="MediasScan"/>
                                                    <meta property="og:type" content="website"/>
                                                    <meta property="og:url" content="https://nyankir.github.io'.str_replace("'/testmetick/'","/testmetick/ua/",$person_a["link"]).'"/>
                                                    <meta property="og:image"
                                                          content="https://ic.wampi.ru/2021/11/08/banner.jpg"/>
                                                    <meta property="og:description"
                                                          content="'.$person_a["titleUA"].'"/>
                                                    <meta property="og:locale" content="ru"/>
                                                    <meta property="og:site_name" content="MediasScan"/>
                                                    <!-- Mobile Specific Meta -->
                                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                                    <link rel="shortcut icon" href="../../assets/logo_h.png" type="image/x-icon">
                                                    <link rel="stylesheet" href="../../styles/owl.carousel.css">
                                                    <link rel="stylesheet" href="../../assets/fonts/css/all.css">
                                                    <link rel="stylesheet" href="../../styles/flaticon.css">
                                                    <link rel="stylesheet" href="../../styles/animate.css">
                                                    <link rel="stylesheet" href="../../styles/bootstrap.min.css">
                                                    <link rel="stylesheet" href="../../styles/video.min.css">
                                                    <link rel="stylesheet" href="../../styles/it-source.css">
                                                    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
                                                    <script async src="https://cdn.ampproject.org/v0.js"></script>
                                                    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
                                                    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
          <link rel="canonical" href="<% canonical %>">

                                                    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JVRF8XLJHC"></script>
                                                    <script>
                                                        window.dataLayer = window.dataLayer || [];

                                                        function gtag() {
                                                            dataLayer.push(arguments);
                                                        }

                                                        gtag("js", new Date());

                                                        gtag("config", "G-JVRF8XLJHC");
                                                    </script>
                                                <link rel="canonical" href="https://nyankir.github.io/testmetick/ua">

                                                </head>

                                                <body class="s-it" data-spy="scroll" data-target=".it-up-main-navigation" data-offset="80">
                                                <div class="up">
                                                    <a href="#" class="scrollup text-center" style="display: none;"><i class="fas fa-chevron-up"></i></a>
                                                </div>

                                                <!-- Start of header section
                                                ============================================= -->
                                                <header id="it-header-up" class="it-header-up-seaction">
                                                    <div class="it-header-up-top clearfix">
                                                        <div class="container">
                                                            <div class="it-header-top-cta float-left">
                                                                <a href=""><i></i> support@mediascan.cc</a>
                                                                <a href=""><i></i> +372 5388 1106</a>
                                                                <a href=""><i></i> Harjumaa, Tallinn linn, Padriku tee 12/3-4, 11912</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="it-up-header-main">
                                                        <div class="container">
                                                            <div class="it-up-brand-logo float-left">
                                                                <a href="#">
                                                                    <amp-img src="../../assets/logo1.png" alt="" width="140"
                                                                             height="60"
                                                                             layout="fixed"></amp-img>
                                                                </a>
                                                            </div>
                                                            <div class="it-up-main-menu-wrap clearfix">
                                                                <nav class="it-up-main-navigation float-left ul-li">
                                                                    <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                                                                        <li><a class="nav-link active" href="/testmetick/ua#it-up-banner">Головна</a></li>
                                                                        <li><a class="nav-link" href="/testmetick/ua#it-up-featured">Функціонал</a></li>
                                                                        <li><a class="nav-link" href="/testmetick/ua#it-up-service">Ціни</a></li>
                                                                        <li><a class="nav-link" href="/testmetick/ua#it-up-blog">Блог</a></li>
                                                                        <li><a class="nav-link" href="/testmetick/ua#it-up-contact">Контакти</a></li>
                                                                    </ul>
                                                                </nav>
                                                                <div class="it-up-header-cta-btn float-right text-center">
                                                                    <a href="https://mediascan.cc/dashboard">Dashboard
                                                                        <span>
                                                                            <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9L25 9V7L0 7L0 9Z"
                                                      fill="black"/>
                                                </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </header>
                                                <!-- End of header section
                                                    ============================================= -->


                                                <section class=" position-relative blog-page" >
                                                    <div class="container">
                                                        <div class="row" style="flex-direction: column">
                                                            <div class="blog_header">
                                                                <h3 class="blog-title">'.$person_a["title"].'</h3>
                                                                <span class="blog-date">'.$person_a["date"].'</span>
                                                            </div>
                                                                <img src="../'.$person_a["img"].'" alt="" class="blog-img">
                                                            <div class="blog_text">
      '.$str.'
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>


                                                <!-- Start of blog section
                                                    ============================================= -->
                                                <div class="position-relative">

                                                    <div class="it-up-blog-content blog-carousel" id="blog-carousel">

                                                    </div>
                                                </div>
                                                <!-- End of blog section
                                                    ============================================= -->


                                                <!-- Start of footer section
                                                	============================================= -->
                                                        <div id="it-up-footer" class="it-up-footer-section position-relative">
                                                            <div class="container">
                                                                <div class="it-up-footer-content-wrap">
                                                                    <div class="row">
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="it-up-footer-widget headline-1 pera-content">
                                                                                <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                                    <p><a href="#">Політика конфіденційності</a></p>
                                                                                    <p><a href="#">Умови використання</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="it-up-footer-widget headline-1 pera-content">
                                                                                <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                                    <p><a href="https://t.me/media_scan_bot">Telegram bot</a></p>
                                                                                    <p><a href="https://t.me/media_scan">Telegram канал</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="it-up-footer-widget headline-1 pera-content">
                                                                                <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                                    <p><a href="https://www.facebook.com/mediascan.bot">Facebook</a></p>
                                                                                    <p><a href="https://www.instagram.com/mediascan.bot/">Instagram</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="it-up-footer-widget headline-1 pera-content">
                                                                                <div class="it-up-footer-logo-widget it-up-headline pera-content">
                                                                                    <p><a href="#">API документація</a></p>
                                                                                    <p><a href="#">Панель моніторингу</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="it-up-footer-copyright text-center pera-content">
                                                                <div class="container">
                                                                    <p>© 2021 Gobeside LCC. All rights reserved.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <!-- End of footer section
                                                	============================================= -->

                                                <!-- For Js Library -->
                                                <script src="../../scripts/jquery.js"></script>
                                                <script src="../../scripts/bootstrap.min.js"></script>
                                                <script src="../../scripts/popper.min.js"></script>
                                                <script src="../../scripts/owl.js"></script>
                                                <script src="../../scripts/jquery.magnific-popup.min.js"></script>
                                                <script src="../../scripts/appear.js"></script>
                                                <script src="../../scripts/wow.min.js"></script>
                                                <script src="../../scripts/parallax-scroll.js"></script>
                                                <script src="../../scripts/circle-progress.js"></script>
                                                <script src="../../scripts/pagenav.js"></script>
                                                <script src="../../scripts/jquery.counterup.min.js"></script>
                                                <script src="../../scripts/waypoints.min.js"></script>
                                                <script src="../../scripts/typer-new.js"></script>
                                                <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                                                <script src="../../scripts/initUA.js">
                                                </script>
                                                </body>
                                                </html>');
                                                }

}

echo 'Посты успешно созданны';
