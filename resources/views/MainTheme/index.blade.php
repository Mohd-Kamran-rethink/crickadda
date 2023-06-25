<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cricadda</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- css for mobile -->
    <link rel="stylesheet" href="{{ asset('NewTheme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/bootstrap.min.css') }}" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/style.css') }}" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/custom.css') }}" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/slick.css') }}" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/slick-theme.css') }}" media="screen and (max-width: 767px)">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/video-js.css') }}" media="screen and (max-width: 767px)">

    {{-- for desktop view add media="screen and (min-width: 768px)" --}}
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}" media="screen and (min-width: 768px)">
    <!-- fevicon -->
    <link rel="icon" href="NewTheme/images/favicon.png" type="image/gif" />
    {{-- chat bot script --}}
    <script type="text/javascript" id="zsiqchat">
        var $zoho = $zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            widgetcode: "3170bbcf9410430ed8ebd58a4de3231d3f5a702bb7ffa3e142ccf27b23c08d09",
            values: {},
            ready: function() {}
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.in/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
    </script>

</head>
<style>
    #scrollDiv {
        scroll-margin-top: 50px;
        /* Offset to adjust for any fixed header */
        scroll-behavior: smooth;
        /* Enable smooth scrolling */
    }

    .mobileDiv {
        display: none;
        /* Hide the div by default */
    }

    .desktopDiv {
        display: block;
        /* Show the div for screens that are not mobile */
    }

    /* Media query for mobile devices */
    @media only screen and (max-width: 767px) {
        .mobileDiv {
            display: block;
            /* Show the div for screen widths up to 767px */
        }

        .desktopDiv {
            display: none;
            /* Hide the div for mobile devices */
        }
    }
</style>

<body class="dark-theme">
    @php
        $WhatsAppLink = $socialLinks->last(function ($item) {
            return $item->platform === 'whatsapp';
        });
        $TelegramLink = $socialLinks->last(function ($item) {
            return $item->platform === 'telegram';
        });
        $FacebookLink = $socialLinks->last(function ($item) {
            return $item->platform === 'facebook';
        });
        
        $youtubeLink = $socialLinks->last(function ($item) {
            return $item->platform === 'youtube';
        });
        $instagramLink = $socialLinks->last(function ($item) {
            return $item->platform === 'instagram';
        });
    @endphp

    {{--  mobile theme start --}}
    <header class="darker_theme mobileDiv">
        <nav role="navigation" class="header_top_bar">
            <div class="nav-wrapper container" style="padding-left: 0px;padding-right:6px">
                <div class="nav-contain">
                    <div class="sidebrand-contain ml-0">
                        <div class="site_logo">
                            <a id="logo-container" href="https://app.cricadda.com/login" class="brand-logo">
                                <img style="height: 48px !important;max-width: 132px;" onclick="redirectToGoogle();"
                                    class="menu_icon ng-star-inserted"src="{{ asset('storage/Banners/' . $logo->filename) }}">
                            </a>
                        </div>
                    </div>
                    <div class="settings-contain">
                        <div class="wallet-contain">
                            <div class="walletViewToggle">
                                <div class="ml-2" style="margin-left: 5px; margin-right: 5px;"></div>
                            </div>
                        </div>
                        <div class="user-contain media-query-fold">
                            <div class="user-signin-links ng-star-inserted">
                                <span class="signup_btn_wrapper">
                                    <a href="https://app.cricadda.com/login"
                                        class="signup waves-effect waves-light ng-star-inserted">
                                        <span>
                                            <img onclick="redirectToGoogle();" src="NewTheme/images/signup.svg"
                                                alt="">
                                        </span>
                                        <span> Register </span>
                                    </a>
                                </span>
                                <span>
                                    <a class="login waves-effect waves-light">
                                        <span>
                                            <img onclick="redirectToGoogle();" src="NewTheme/images/login.svg"
                                                alt="">
                                        </span>
                                        <span> Login </span>
                                    </a>
                                </span>

                            </div>
                            <div class="gear hide">
                                <a data-target="dropdown">
                                    <i class="fas fa-cog reloadIconSatFair" aria-hidden="true"></i>
                                </a>
                                <ul id="dropdown" class="dropdown-content"
                                    style="height: auto; width: 258.734px; position: absolute; z-index: 9999; margin: 0px; opacity: 1; top: 45px; right: 7px; left: unset; display: none;">
                                    <li>
                                        <div class="theme-slider-wrapper">
                                            <span> User Name </span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="ng-star-inserted">
                                        <div>
                                            <div class="theme-slider-wrapper">
                                                <span>Theme</span>
                                                <form novalidate="" action="#"
                                                    class="theme-radio ng-untouched ng-pristine ng-valid">
                                                    <label>
                                                        <input name="group1" type="radio">
                                                        <span>Light</span>
                                                    </label>
                                                    <label>
                                                        <input name="group1" type="radio">
                                                        <span>Dark</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://app.cricadda.com/login" class="withdraw">
                                            <span class="flex-grow-1">Withdraw</span>
                                            <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg"
                                                class="arrow mt-0" style="transform: rotate(-90deg);">
                                        </a>
                                    </li>
                                    <li>
                                        <div class="theme-slider-wrapper">
                                            <span class="flex-grow-1">1 Click bet?</span>
                                            <div class="switch">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="theme-slider-wrapper">
                                            <span class="flex-grow-1">Notification Sound</span>
                                            <div class="switch">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="theme-slider-wrapper">
                                            <span> Time Zone </span>
                                            <span style="text-align: end;"> Asia/Calcutta (GMT+0530) </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-column mt-1 language-changer">
                                            <span class="language-changer-head">Language</span>
                                            <span class="d-flex flex-row justify-item-flex-start">
                                                <a href="javascript:" title="en" class="ng-star-inserted">
                                                    <span class="mx-1 fla g_logo en"></span>
                                                    <span class="lang">en</span>
                                                </a>
                                                <a href="javascript:" title="hi" class="ng-star-inserted">
                                                    <span class="mx-1 fla g_logo hi"></span>
                                                    <span class="lang">hi</span>
                                                </a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gredient_bg_btn">
                                            <a>Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">
            <div class="search-box">
                <div class="search">
                    <input list="list" type="text" placeholder="Search Market.." id="list"
                        autocomplete="off" class="search-txt">
                </div>
            </div>
            <div class="list-cont">
                <div class="list-sugg"></div>
            </div>
            <div class="d-flex align-items-center justify-content-between market-border backGround_gradient"
                style="margin-top: 3px;">
                <label>
                    <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                        src="NewTheme/images/Casino.svg">
                    <span class="getColor">Popular Sports</span>
                </label>
                <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" class="arrow mt-0 ng-star-inserted" style="transform: rotate(0deg);"> -->
            </div>
            <li class="sub ng-star-inserted"></li>
            <li class="sub ng-star-inserted"></li>
            <li class="sub ng-star-inserted"></li>
            <div routerlink="/casinos"
                class="d-flex align-items-center justify-content-between market-border backGround_gradient"
                tabindex="0">
                <label>
                    <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                        src="NewTheme/images/Casino.svg">
                    <span class="getColor">Casinos</span>
                </label>
            </div>
            <div
                class="d-flex align-items-center justify-content-between market-border backGround_gradient ng-star-inserted">
                <label>
                    <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                        src="NewTheme/images/Casino.svg">
                    <span class="getColor">Virtual Sports </span>
                </label>
                <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" class="arrow mt-0 ng-star-inserted" style="transform: rotate(0deg);"> -->
            </div>
            <li>
                <div class="d-flex align-items-center justify-content-between market-border backGround_gradient">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg">
                        <span class="getColor"> Sports</span>
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" class="arrow mt-0" style="transform: rotate(90deg);"> -->
                </div>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Soccer Fixtures
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Horse Racing
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Horse Race
                        Todays Card </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Greyhound Racing
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Greyhound Todays
                        Card </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> American
                        Football </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Baseball
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Basketball
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Boxing </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Cricket </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Darts </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Gaelic Games
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Golf </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Mixed Martial
                        Arts </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Motor Sport
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Rugby League
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Rugby Union
                    </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Snooker </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg">Soccer </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
            <li class="lc-1 ng-star-inserted">
                <div class="d-flex align-items-center justify-content-around">
                    <label>
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/Casino.svg"> Tennis </label>
                    <!-- <img onclick="redirectToGoogle();" src="NewTheme/images/arrow.svg" alt="" class="dwn-arrow"> -->
                </div>
                <ul data-check="1" class="lc-2"></ul>
            </li>
        </ul>
    </header>
    <main class="content-wrapper mobileDiv">

        {{-- <div class="categories-home">
            <ul class="nav mobile-nav mobile-nav home-slider mobile-home-scroll-content">
                <li class="item" tabindex="0">
                    <a href="https://app.cricadda.com/login" id="navMobileBetGamesTV" name="navMobileBetGamesTV"
                        class="betgamestv item-nav">
                        <img onclick="redirectToGoogle();" alt="Exchange" class="top_bar_images"
                            src="NewTheme/images/lotteryicon.png"> Lottery </a>
                </li>
                <li class="item">
                    <a id="navMobileBetGamesTV" name="navMobileBetGamesTV" class="betgamestv item-nav">
                        <img onclick="redirectToGoogle();" alt="Sports Book" class="top_bar_images"
                            src="NewTheme/images/sportbookicon.png">
                        SportBook1 </a>
                </li>
                <li class="item">
                    <a id="navMobileLiveSports" name="navMobileLiveSports" href="https://app.cricadda.com/login"
                        class="livesports item-nav">
                        <img onclick="redirectToGoogle();" alt="Casino" class="top_bar_images"
                            src="NewTheme/images/exchangeicon.png">
                        <span style="margin-top: 4px;">Exchange</span>
                    </a>
                </li>
                <li class="item">
                    <a id="navMobileLiveSports" name="navMobileLiveSports" href="https://app.cricadda.com/login"
                        class="livesports item-nav">
                        <img onclick="redirectToGoogle();" alt="Teen Patti" class="top_bar_images"
                            src="NewTheme/images/casinoicon.png">
                        <span style="margin-top: 4px;">Live Casino</span>
                    </a>
                </li>
                <li class="item">
                    <a id="navMobileLiveSports" name="navMobileLiveSports" href="https://app.cricadda.com/login"
                        class="livesports item-nav">
                        <img onclick="redirectToGoogle();" alt="Inplay" class="top_bar_images"
                            src="NewTheme/images/slot.png"> Slot </a>
                </li>
                <li class="item">
                    <a id="navMobileSports" name="navMobileSports" href="#scrollDiv" class="sports item-nav">
                        <img alt="Cricket" class="top_bar_images" src="NewTheme/images/game icon.png"> Fantasy Games
                    </a>
                </li>
            </ul>
        </div> --}}
        <div class="news-bar"
            style="height: 32px;z-index: 999;background: linear-gradient(90deg, #E6C540 0%, #F5F7B8 100%) !important;position: relative;display: flex;align-items: center">

            <marquee style="font-size: 12px;color: #23292E">{{ $news->title ?? '' }}</marquee>

            <div class="news-title" style="position: absolute;right: 0;top: 0px;background: #F5F7B8  ">
                <img style="width: 30px" alt="Online betting in india | Cricadda" loading="lazy"
                    src="images/speaker.svg">
            </div>
        </div>
        <!-- Banner Section -->
        <div class="carousel slide banner-slider">
            <div class="owl-carousel owl-theme" id="banner-slider">
                @foreach ($images as $item)
                    @if ($item->category == 'banner' && $item->screen_type == 'mobile')
                        <div class="item  carousel-item carousal-23">
                            <img style="height: 150px" onclick="redirectToGoogle();"
                                src="{{ asset('storage/Banners/' . $item->filename) }}">
                        </div>
                    @endif
                @endforeach
                {{-- <div class="item carousel-item carousal-23">
          <img onclick="redirectToGoogle();" src="NewTheme/images/slider2.jpeg">
        </div>
        <div class="item carousel-item carousal-23">
          <img onclick="redirectToGoogle();" src="NewTheme/images/slider3.jpeg">
        </div> --}}
            </div>
        </div>

        <div class="text-slider ng-star-inserted">
            <div class="info ng-star-inserted">
                <div class="title-left">
                    {{-- <img onclick="redirectToGoogle();" alt="Table Games"
                        src="NewTheme/images/popular.svg"> --}}
                    <h1 class="title-section" style="color: #DEB439 !important;">New Launch</h1>
                </div>
            </div>
        </div>

        <div class="mobile-home-games-scroll ng-star-inserted carousel">
            <div class="home-slider mobile-home-scroll-content owl-carousel owl-theme" id="populer_today">
                @foreach ($images as $item)
                    @if ($item->category == 'popular_today')
                        <div class="item carousel-item ng-star-inserted">
                            <div class="top-row">
                                <a href="https://app.cricadda.com/login">
                                    <img onclick="redirectToGoogle();" alt="New Games"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                            <div class="name-slider" style="text-align: center;color: #DEB439 !important;">
                                {{ $item->heading ?? '' }}</div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        <div class="text-slider">
            <div class="info">
                <a href="https://app.cricadda.com/login" class="title-left text_decoration_none">

                    <h1 class="title-section" style="color: #DEB439 !important;"> Sports</h1>
                </a>

            </div>
        </div>
        <div class="mobile-home-games-scroll carousel" id="sports-scroll">
            <div class="home-slider sports-section mobile-home-scroll-content owl-carousel owl-theme"
                id="slorts_slider">
                @foreach ($images as $item)
                    @if ($item->category == 'sport')
                        <div class="item">
                            <div class="top-row carousel-item">
                                <a href="https://app.cricadda.com/login">
                                    <img onclick="redirectToGoogle();" alt="Cricket"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                            <div class="name-slider"
                                style="text-align: center;color: #DEB439 !important;text-transform: uppercase">
                                {{ $item->heading ?? '' }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>




        <div class="text-slider">
            <div class="info">
                <div class="bb-styling">
                    <a href="https://app.cricadda.com/login">
                        <h1 style="margin-top: 2px;color: #DEB439 !important;">Our Casinos</h1>
                    </a>
                </div>
                <div>
                    <a class="see-all-a" onclick="toggleSeeAll('our-cashino-scroll','our-cashino-box',this)">
                        See All
                    </a>
                </div>
            </div>
        </div>
        <div id="our-cashino-scroll" class="mobile-home-games-scroll carousel">
            <div class="home-slider mobile-home-scroll-content owl-carousel owl-theme" id="casinos_slider">
                @foreach ($images as $item)
                    @if ($item->category === 'outliveCasino')
                        <div class="item carousel-item">
                            <div class="top-row ">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Casino Games"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="containerPopular" style="display: none" id="our-cashino-box">
            <div class="secPopular">
                @foreach ($images as $item)
                    @if ($item->category === 'outliveCasino')
                        <img onclick="redirectToGoogle();" src="{{ asset('storage/Banners/' . $item->filename) }}">
                    @endif
                @endforeach
            </div>
        </div>
        {{-- our virtual cashino --}}
        <div class="text-slider">
            <div class="info">
                <div class="bb-styling">
                    <a>
                        <h1 style="margin-top: 2px;color: #DEB439 !important;">Our Virtual Casinos</h1>
                    </a>
                </div>
                <div>
                    <a class="see-all-a"
                        onclick="toggleSeeAll('our-virtual-cashino-scroll','our-virtual-cashino-box',this)">
                        See All
                        {{-- <i class="fas fa-solid fa-arrow-right iconArrow" aria-hidden="true"></i> --}}
                    </a>
                </div>
            </div>
        </div>
        <div class="mobile-home-games-scroll carousel" id="our-virtual-cashino-scroll">
            <div class="home-slider mobile-home-scroll-content owl-carousel owl-theme" id="out-virtual-cascino">
                @foreach ($images as $item)
                    @if ($item->category == 'virtualCasino')
                        <div class="item carousel-item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Roulette"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                            {{-- <div class="heading_wrapper">
                                <span>Roulette</span>
                            </div> --}}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="containerPopular" style="display: none" id="our-virtual-cashino-box">
            <div class="secPopular">
                @foreach ($images as $item)
                    @if ($item->category == 'virtualCasino')
                        <img onclick="redirectToGoogle();" src="{{ asset('storage/Banners/' . $item->filename) }}">
                    @endif
                @endforeach
            </div>
        </div>

        {{-- live cascino --}}
        <div class="text-slider">
            <div class="info">
                <div class="bb-styling">
                    <a>
                        <h1 style="margin-top: 2px;color: #DEB439 !important;">Live Casinos</h1>
                    </a>
                </div>
                <div>
                    <a class="see-all-a" onclick="toggleSeeAll('live-cascino-scroll','live-cascino-box',this)">
                        See All
                        {{-- <i class="fas fa-solid fa-arrow-right iconArrow" aria-hidden="true"></i> --}}
                    </a>
                </div>
            </div>
        </div>
        <div id="live-cascino-scroll" class="mobile-home-games-scroll carousel">
            <div class="home-slider mobile-home-scroll-content owl-carousel owl-theme" id="live_casinos_slider">
                @foreach ($images as $item)
                    @if ($item->category == 'liveCasino')
                        <div class="item carousel-item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Evolution Gaming"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <div class="containerPopular" style="display: none" id="live-cascino-box">
            <div class="secPopular">
                @foreach ($images as $item)
                    @if ($item->category == 'liveCasino')
                        <img onclick="redirectToGoogle();" src="{{ asset('storage/Banners/' . $item->filename) }}">
                    @endif
                @endforeach
            </div>
        </div>
        {{-- fanasy games --}}
        <div class="text-slider" id="scrollDiv">
            <div class="info">
                <a href="https://app.cricadda.com/login" class="title-left text_decoration_none">
                    <h1 class="title-section" style="color: #DEB439 !important;"> Fantasy Games</h1>
                </a>
                <a onclick="toggleSeeAll('fantasy-games-scroll','fantasy-games-box',this)" class="see-all-a"> See All
                    <i class="fas fa-solid fa-arrow-right iconArrow"></i>
            </div>
        </div>
        <div class="mobile-home-games-scroll carousel" id="fantasy-games-scroll" style="display: block">
            <div class="home-slider mobile-home-scroll-content owl-carousel owl-theme" id="provider_slider">
                @foreach ($images as $item)
                    @if ($item->category == 'fantasyGames')
                        <div class="item carousel-item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Evolution Gaming"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="containerPopular" style="display: none" id="fantasy-games-box">
            <div class="secPopular">
                @foreach ($images as $item)
                    @if ($item->category == 'fantasyGames')
                        <img onclick="redirectToGoogle();" src="{{ asset('storage/Banners/' . $item->filename) }}">
                    @endif
                @endforeach
            </div>
        </div>

        {{-- slot games --}}
        <div class="text-slider" id="scrollDiv">
            <div class="info">
                <a href="https://app.cricadda.com/login" class="title-left text_decoration_none">
                    <h1 class="title-section" style="color: #DEB439 !important;"> Slot Games</h1>
                </a>
                <a onclick="toggleSeeAll('slot-games-scroll','slot-games-box',this)" class="see-all-a"> See All
                    <i class="fas fa-solid fa-arrow-right iconArrow"></i>
            </div>
        </div>
        <div class="mobile-home-games-scroll carousel" id="slot-games-scroll" style="display: block">
            <div class="home-slider mobile-home-scroll-content owl-carousel owl-theme" id="slot-games-scrolls">
                @foreach ($images as $item)
                    @if ($item->category == 'slot_games')
                        <div class="item carousel-item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Evolution Gaming"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="containerPopular" style="display: none" id="slot-games-box">
            <div class="secPopular">
                @foreach ($images as $item)
                    @if ($item->category == 'slot_games')
                        <img onclick="redirectToGoogle();" src="{{ asset('storage/Banners/' . $item->filename) }}">
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Advirtize Banner Section -->
        <div class="container">
            <div _ngcontent-kbj-c86="">
                <a target="_parent" href="https://app.cricadda.com/login">
                    <img onclick="redirectToGoogle();" width="100%" src="NewTheme/images/BANNER-GIF-DOWNLOAD.gif"
                        alt="download app">
                </a>
            </div>
        </div>

    </main>
    <footer style="background: #23292E" class="mobileDiv">
        <div class="max-width content-padding">
            <div class="footer-nav-items">
                <section class="footers-container-second mb-4 pb-4">
                    <footer class="container pb-4">
                        <div class="footer max-width">
                            <div class="links footer-row content-padding">
                                <div class="footer-nav max-footer-width">
                                    <div>
                                        <div class="license-column-holder">

                                            <div class="payment-img-holder pt-3">
                                                <div class="row" style="justify-content: space-around;">
                                                    {{-- <img alt="INB" class="row-images1"
                                                        src="NewTheme/images/INB.svg"> --}}
                                                    <img alt="UPI" class="row-images1"
                                                        src="NewTheme/images/UP.svg">
                                                    <img alt="Visa" class="row-images1"
                                                        src="NewTheme/images/VISA.svg">
                                                    <img alt="Master" class="row-images1"
                                                        src="NewTheme/images/MASTER.svg">
                                                    <img alt="Paytm" class="row-images1"
                                                        src="NewTheme/images/PAYT.svg">
                                                    <img alt="Gpay" class="row-images1"
                                                        src="NewTheme/images/GPY.svg">
                                                    <img alt="One Rupee" class="row-images1"
                                                        src="NewTheme/images/ONERUPEE.svg">
                                                </div>
                                                {{-- <div class="row"
                                                    style="margin-top: 8px; justify-content: space-around;">
                                                    <img alt="Bank Trasnfer" class="row-images1"
                                                        src="NewTheme/images/BNKTRANSFER.svg">

                                                    <img alt="Jeton" class="row-images1"
                                                        src="NewTheme/images/JETON.svg">
                                                    <img alt="Skrill" class="row-images1"
                                                        src="NewTheme/images/SKRILL.svg">
                                                    <img alt="Jio Money" class="row-images1"
                                                        src="NewTheme/images/JIO.svg">
                                                    <img alt="IMPS" class="row-images1"
                                                        src="NewTheme/images/IMP.svg">
                                                    <img alt="BBL" class="row-images1"
                                                        src="NewTheme/images/BBL.svg">
                                                    <img alt="Net Banking" class="row-images1"
                                                        src="NewTheme/images/NETBANK.svg">
                                                </div> --}}
                                            </div>
                                            {{-- about section same as old  --}}
                                            {{-- new theme --}}
                                            {{-- <div class="footer-items">
                                                <div class="footer-text">
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="https://app.cricadda.com/about-us">About Us</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://app.cricadda.com/terms-and-conditions">Terms
                                                                and Conditions</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://app.cricadda.com/aml-policy">AML
                                                                Policy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="footer-text">
                                                    <ul class="link-list">
                                                        <li>
                                                            <a href="https://app.cricadda.com/kyc-policy">KYC
                                                                Policy</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://app.cricadda.com/responsible-gaming">Responsible
                                                                Gambling</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                            {{-- old theme --}}
                                            <div class="menu-old text-center mt-3 mb-4">
                                                <div style="color: #AAAFB5 !important">
                                                    <h4 class="mb-0 pb-0" style="color: #AAAFB5 !important">24x7
                                                        Support</h4>
                                                    <p style="font-size: 12px" class="mt-0 pt-0">
                                                        {{ $WhatsAppLink->value }}</p>
                                                </div>
                                                <div class="" style="border-top: 0px !important">
                                                    <a class="px-2" href="{{ $FacebookLink->value ?? '#' }}"
                                                        target="_blank">
                                                        <img src="images/facebooklogo.png" class="social2">
                                                    </a>
                                                    <a class="px-2" href="{{ $youtubeLink->value ?? '#' }}"
                                                        target="_blank">
                                                        <img alt="twitter" class="social2" src="images/youtube.png">
                                                    </a>
                                                    <a class="px-2" href="{{ $instagramLink->value ?? '#' }}"
                                                        target="_blank">
                                                        <img alt="instagram" class="social2"
                                                            src="images/instagramlogo.png">
                                                    </a>
                                                    <a class="px-2" href="https://app.cricadda.com/login"
                                                        target="_blank">
                                                        <img alt="twitter" class="social2" src="images/twitter.png">
                                                    </a>
                                                    <a class="px-2" href="{{ $TelegramLink->value ?? '#' }}"
                                                        target="_blank">
                                                        <img alt="telegram" class="social2"
                                                            src="images/telegram.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dotted-line" style=" border-top: 1px dotted #ffff;"></div>

                                            <div class="footer-menu text-center mt-4" style="font-size: 16px;">
                                                <ul>
                                                    <li>
                                                        <a href="https://app.cricadda.com/about-us "
                                                            style="color: #bebebe !important" class=""
                                                            target="_blank">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://app.cricadda.com/terms-and-conditions"
                                                            style="color: #bebebe !important" class=""
                                                            target="_blank">Terms and
                                                            Conditions</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://app.cricadda.com/responsible-gaming"
                                                            style="color: #bebebe !important" class=""
                                                            target="_blank">Responsible
                                                            Gaming</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://app.cricadda.com/aml-policy"
                                                            style="color: #bebebe !important" class=""
                                                            target="_blank">AML Policy</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://app.cricadda.com/kyc-policy"
                                                            style="color: #bebebe !important" class=""
                                                            target="_blank">KYC Policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer-top mb-4"
                                                style="display: flex;flex-direction: column;align-items: center">
                                                <div class="secure-logo d-flex align-items-center">
                                                    <div class="mt-2">
                                                        <img style="max-width: 90px" src="images/ssl.png">
                                                    </div>
                                                    <div class="ml-2" style="color:#AAAFB5 ">
                                                        <b>100% SAFE</b>
                                                        <div style="font-size: 12px">Protected connection and encrypted
                                                            data.</div>
                                                    </div>
                                                </div>
                                                <div class="d-flex footer-other mt-2">
                                                    <a href="javascript:void(0)" role="button" data-toggle="modal"
                                                        data-target="#modal-18plusModal">
                                                        <img style="max-width: 30px" src="images/18plus.png">
                                                    </a>
                                                    <a class="mx-3" href="#" target="_blank">
                                                        <img style="max-width: 30px" src="images/gamecare.png">
                                                    </a>
                                                    <a href="#" target="_blank">
                                                        <img style="max-width: 30px" src="images/gt.png">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="dotted-line" style=" border-top: 1px dotted #ffff;"></div>

                                            <br />
                                            <div class="footer">
                                                <div class="max-footer-width">
                                                    <div class="footer-grid-layout">
                                                        <div class="curacao">
                                                            <div class="site-gaming-register-text vmiddle"
                                                                style="color: #848484 !important;">
                                                                This website is operated by Seven Investments America
                                                                N.V., registered in Curaçao under the number 152581,
                                                                with the address at Zuikertuintjeweg Z/N (Zuikertuin
                                                                Tower), Curaçao <br><br>
                                                                The transactions are processed by Seven Investments LTD
                                                                registered with the number 12391820, with head office at
                                                                Kemp House 160 City Road, London, United Kingdom. For
                                                                the purpose of processing payments via Paysafe Group
                                                                including but not limited to Neteller and Skrill, the
                                                                transaction processing entity shall be Seven Investments
                                                                America N.V., registered in Curaçao under the number
                                                                152581, with the address at Zuikertuintjeweg Z/N
                                                                (Zuikertuin Tower), Curaçao..<br />
                                                                <br>© 2022 Cricadda. All rights reserved.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </footer>
                </section>


                <div class="fixed-footer-buttons user-signin-links ng-star-inserted"
                    style="display: flex  !important;justify-content: center !important;width: 99%;margin-bottom: 20px;z-index: 9999;">
                    <span class="signup_btn_wrapper" style="width: 36%">
                        <a href="{{ $TelegramLink->value }}" class="signup waves-effect waves-light ng-star-inserted"
                            style="display: flex;justify-content: center">
                            <span>
                                <img onclick="redirectToGoogle();" src="NewTheme/images/telegramoriginal.png"
                                    alt="" style="width: 19px !important;">
                            </span>
                            <span style="font-size: 10px;font-weight: 900"> Telegram for new ID</span>
                        </a>
                    </span>
                    <span class="signup_btn_wrapper" style="width: 20%" style="text-align: center">
                        <a href="https://app.cricadda.com/login"
                            class="signup waves-effect waves-light ng-star-inserted"
                            style="text-align: center;display: flex;justify-content: center">

                            <span style="font-size: 10px;font-weight: 900"> Live Chat </span>
                        </a>
                    </span>
                    <span class="signup_btn_wrapper" style="width: 36%;">
                        <a href="{{ 'https://wa.me/' . $WhatsAppLink->value }}"
                            class="signup waves-effect waves-light ng-star-inserted"
                            style="display: flex;justify-content: center">
                            <span>
                                <img onclick="redirectToGoogle();" src="NewTheme/images/whatsapp_PNG1.png"
                                    alt="" style="width: 19px !important;">
                            </span>
                            <span style="font-size: 10px;font-weight: 900"> Whatsapp for new ID </span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    {{-- mobile theme end --}}

    {{-- desktop view start --}}
    <div class="wrapper home-new desktopDiv" style="background: #23292E !important">

        {{-- <?php if($responseData['country'] == 'PK'){ ?> --}}
        {{-- <div id="floater"><a href="https://wa.me/971569062916" target="_blank"><img src="images/images.png"></a> --}}
        {{-- </div> --}}
        {{-- <?php } else { ?> --}}
        {{-- <!-- Watsapp Floating Icon --> --}}
        {{-- <div id="floater"><a href="https://wa.me/919913144444" target="_blank"><img src="images/images.png"></a> --}}
        {{-- </div> --}}
        {{-- <?php } ?> --}}

        {{-- dynamic links numbers --}}
        @php
            $WhatsAppLink = $socialLinks->last(function ($item) {
                return $item->platform === 'whatsapp';
            });
            $TelegramLink = $socialLinks->last(function ($item) {
                return $item->platform === 'telegram';
            });
        @endphp

        <div id="floater" style="position: fixed;top: 45%">
            <a href="{{ 'https://wa.me/' . $WhatsAppLink->value }}" target="_blank"><img src="images/images.png"
                    loading="lazy"></a>
            <a href="{{ $TelegramLink->value }}" target="_blank"><img src="images/telegram1.png"
                    loading="lazy"></a>
        </div>
        <!-- Header -->
        <div class="home-new-header container-fluid container-fluid-5">
            <div class="row row5">
                <div class="col-6 col-md-2">
                    <div class="home-new-logo">
                        <img src="{{ asset('storage/Banners/' . $logo->filename) }}">
                    </div>
                </div>
                <div class="col-6 col-md-10">
                    <div class="home-new-header-bottom">
                        <nav class="navbar navbar-expand-sm justify-content-center"></nav>
                        <div class="header-buttons d-flex mr-2">
                            <div class=""
                                style="cursor: pointer;border:1px solid #DEB439;padding: 3px;border-radius: 4px;width: 90px">
                                <button class="m-0  px-2 " onclick="redirectToGoogle();"
                                    href="https://app.cricadda.com/register"
                                    style="cursor: pointer;padding-bottom: 4px;padding-top: 4px;width: 100%;display: flex;align-items: center;background: linear-gradient(90deg, #E6C540 0%, #F5F7B8 100%) !important;border: none;border-radius: 3px"><img
                                        onclick="redirectToGoogle();" style="max-width: 15px"
                                        src="NewTheme/images/signup.svg" alt=""> Register </button>
                            </div>
                            <div class="ml-2 px-2  d-flex align-items-center"
                                style="cursor: pointer;border:1px solid #DEB439;padding: 3px;border-radius: 4px;width: 90px">
                                <button class="" onclick="redirectToGoogle();"
                                    href="https://app.cricadda.com/login"
                                    style="cursor: pointer;padding-bottom: 4px;padding-top: 4px;width: 100%;display: flex;justify-content: space-around;align-items: center;border: none;border-radius: 3px;color: #fff;background: none">
                                    <img style="width: 15px;" onclick="redirectToGoogle();"
                                        src="NewTheme/images/login.svg" alt=""> Login </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Top-Bar -->
        <div class="header-top">
            <ul>
                <li><a href="https://app.cricadda.com/login" role="button">Lottery</a></li>
                <li><a href="https://app.cricadda.com/login" role="button">SportBook1</a></li>
                <li><a href="/" aria-current="page" class="router-link-exact-active router-link-active">
                        Exchange
                    </a></li>
                <li><a href="https://app.cricadda.com/login" role="button">Live Casino</a></li>
                <li><a href="https://app.cricadda.com/login" role="button">Slot</a></li>
                <li><a href="https://app.cricadda.com/login" role="button">Fantasy Games</a></li>
            </ul>
        </div>
        <!-- Header Top-Bar -->
        <div class="news-bar"
            style="width: 100%;background: linear-gradient(90deg, #E6C540 0%, #e7eaa2 100%) !important;">
            <?php if($responseData['country'] == 'PK'){ ?>
            <marquee> JOIN NOW AND GET 50% JOINING BONUS!! </marquee>
            <?php } else { ?>
            <marquee>{{ $news->title ?? '' }}</marquee>
            <?php } ?>
            <div class="news-title">
                <img src="images/speaker.svg">
            </div>
        </div>
        @if ($responseData['country'] != 'PK')
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                {{-- <ol class="carousel-indicators">
                @foreach ($carouselItems as $key => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol> --}}
                <div class="carousel-inner">

                    @foreach ($desktopBanners as $key => $item)
                        <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                            <img src="{{ asset('storage/Banners/' . $item->filename) }}" class="d-block w-100"
                                alt="{{ $item->title }}">
                            <div class="carousel-caption">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="carousel-item ">
                        <img src="{{ asset('images/slider.jpg') }}" class="d-block w-100"
                            alt="{{ $item['title'] }}">
                        <div class="carousel-caption">
                            <h5>{{ $item['title'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/slider4.jpg') }}" class="d-block w-100"
                            alt="{{ $item['title'] }}">
                        <div class="carousel-caption">
                            <h5>{{ $item['title'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div> --}}

                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
            </div>
        @else
            <!-- Banner Slider -->
            <div class="carousel slide banner-slider">
                <div class="owl-carousel owl-theme" id="banner-slider">

                    @foreach ($images as $item)
                        @if ($item->category == 'banner')
                            <div class="item  carousel-item carousal-23">
                                <img src="{{ asset('storage/Banners/' . $item->filename) }}">
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        @endif


        <div class="w-100">
            <h4 class="sport-list-title">New launch</h4>
            <div class="casino-banners-list mt-2">
                @foreach ($images as $item)
                    @if ($item->category == 'popular_today')
                        <div class="casino-banner-item login-hover">
                            <a href="https://app.cricadda.com/login" href="https://app.cricadda.com/login">
                                <img src="{{ asset('storage/Banners/' . $item->filename) }}" class="img-fluid">
                                <div role="button" tabindex="0">Login</div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <h4 class="sport-list-title">Sports</h4>
            <div class="all-sports-list mt-2">
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/40-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Politics</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/4-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Cricket</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/1-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Football</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/2-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Tennis</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/10-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Horse Racing</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/8-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Table Tennis</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/15-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Basketball</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/18-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Volleyball</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/59-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Snooker</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/19-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Ice Hockey</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/11-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">E Games</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/9-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Futsal</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/39-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Handball</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/66-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Kabaddi</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/5-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Golf</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/55-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Rugby League</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/6-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Boxing</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/7-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Beach Volleyball</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/3-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Mixed Martial Arts</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/16-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">MotoGP</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/17-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Chess</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/22-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Badminton</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/29-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Cycling</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/32-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Motorbikes</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/33-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Athletics</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/35-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Basketball 3X3</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/37-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Sumo</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/38-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Virtual sports</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/52-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Motor Sports</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/53-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Baseball</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/54-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Rugby Union</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/57-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Darts</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/58-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">American Football</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/62-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Soccer</div>
                </div>
                <div class="sport-list-item" onclick="redirectToGoogle();">
                    <img src="images/64-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="redirectToGoogle();">Esports</div>
                </div>
            </div>
            <h4 class="sport-list-title">Our Casinos</h4>
            <div class="casino-banners-list mt-2">
                @foreach ($images as $item)
                    @if ($item->category == 'outliveCasino')
                        <div class="casino-banner-item login-hover">
                            <a href="https://app.cricadda.com/login" href="https://app.cricadda.com/login">
                                <img src="{{ asset('storage/Banners/' . $item->filename) }}" class="img-fluid">
                                <div role="button" tabindex="0">Login</div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <h4 class="sport-list-title">Our Virtual Casino</h4>
            <div class="casino-banners-list mt-2">
                @foreach ($images as $item)
                    @if ($item->category == 'virtualCasino')
                        <div class="casino-banner-item login-hover">
                            <a href="https://app.cricadda.com/login" href="https://app.cricadda.com/login">
                                <img src="{{ asset('storage/Banners/' . $item->filename) }}" class="img-fluid">
                                <div role="button" tabindex="0">Login</div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="container-fluid container-fluid-5">
                <div class="row row5">
                    <div class="col-12 col-md">
                        <h4 class="sport-list-title">Live Casino</h4>
                        <div class="casino-banners-list live-casinos mt-2">
                            @foreach ($images as $item)
                                @if ($item->category == 'liveCasino')
                                    <div class="casino-banner-item login-hover">
                                        <a href="https://app.cricadda.com/login"
                                            href="https://app.cricadda.com/login">
                                            <img src="{{ asset('storage/Banners/' . $item->filename) }}"
                                                class="img-fluid">
                                            <div role="button" tabindex="0">Login</div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <h4 class="sport-list-title"> Fantasy Games </h4>
                        <div class="casino-banners-list live-casinos mt-2">
                            @foreach ($images as $item)
                                @if ($item->category == 'fantasyGames')
                                    <div class="casino-banner-item login-hover">
                                        <a href="https://app.cricadda.com/login"
                                            href="https://app.cricadda.com/login">
                                            <img src="{{ asset('storage/Banners/' . $item->filename) }}"
                                                class="img-fluid">
                                            <div role="button" tabindex="0">Login</div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                    </div>

                </div>
            </div>

            <h4 class="sport-list-title">Slot Games</h4>
            <div class="casino-banners-list mt-2">
                @foreach ($images as $item)
                    @if ($item->category == 'slot_games')
                        <div class="casino-banner-item login-hover">
                            <a href="https://app.cricadda.com/login" href="https://app.cricadda.com/login">
                                <img src="{{ asset('storage/Banners/' . $item->filename) }}" class="img-fluid">
                                <div role="button" tabindex="0">Login</div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- <h4 class="sport-list-title">Top Winners</h4>
          <div class="top-winners-list-container mt-2">
            <div class="slider" id="top-winner-slider">
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>6,32,144</div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>8,52,560</div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>1,00,000</div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>52,316</div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>1,20,500</div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>1,00,200</div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="top-winner-list-box" style="width: 100%; display: inline-block;">
                  <div class="w-100 text-center">
                    <img src="images/user-icon.png">
                  </div>
                  <div class="w-100">
                    <div class="player-detail">
                      <div><b>Player</b></div>
                      <div>To****</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Time</b></div>
                      <div>24/05/2023 04:44</div>
                    </div>
                    <div class="player-detail">
                      <div><b>Win Amount</b></div>
                      <div>5,00,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>

        <footer class="footer">
            <div class="support">
                <div>
                    <div class="w-100 text-center">
                        <b>24X7 Support</b>
                    </div>
                    <?php if($responseData['country'] == 'PK'){ ?>
                    <div class="text-center w-100">
                        <span>https://wa.me/923075272525</span>
                    </div>
                    <?php } else {?>
                    <div class="text-center w-100">
                        <span>{{ $WhatsAppLink->value }}</span>
                    </div>
                    <?php } ?>
                </div>
                {{-- dynamic social slinks --}}
                @php
                    
                    $FacebookLink = $socialLinks->last(function ($item) {
                        return $item->platform === 'facebook';
                    });
                    
                    $youtubeLink = $socialLinks->last(function ($item) {
                        return $item->platform === 'youtube';
                    });
                    $instagramLink = $socialLinks->last(function ($item) {
                        return $item->platform === 'instagram';
                    });
                    
                @endphp

                <div class="footer-social">
                    <?php if($responseData['country'] == 'PK'){ ?>
                    <a href="https://wa.me/971569062916" target="_blank"></a>
                    <?php } else {?>
                    <a href="{{ 'https://wa.me/' . $WhatsAppLink->value }}" target="_blank"><img
                            src="images/whatsapp.png">
                    </a>
                    <a href="{{ $FacebookLink->value }}" target="_blank">
                        <img src="images/facebooklogo.png">
                    </a>
                    <a href="{{ $instagramLink->value ?? '' }}" target="_blank">
                        <img src="images/instagramlogo.png">
                    </a>
                    <a href="{{ $TelegramLink->value }}" target="_blank">
                        <img src="images/telegram.png">
                    </a>
                    <?php } ?>

                </div>
            </div>
            <div class="footer-menu">
                <ul>
                    <li>
                        <a href="https://app.cricadda.com/about-us" class="" target="_blank">About Us</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/terms-and-conditions" class=""
                            target="_blank">Terms
                            and Conditions</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/responsible-gaming" class=""
                            target="_blank">Responsible Gaming</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/aml-policy" class="" target="_blank">AML
                            Policy</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/kyc-policy" class="" target="_blank">KYC
                            Policy</a>
                    </li>
                </ul>
            </div>
            <div class="footer-box">
                <div class="footer-top">
                    <div class="secure-logo">
                        <div>
                            <img src="images/ssl.png">
                        </div>
                        <div class="ml-2">
                            <b>100% SAFE</b>
                            <div>Protected connection and encrypted data.</div>
                        </div>
                    </div>
                    <div class="d-inline-block footer-other">
                        <a href="javascript:void(0)" role="button" data-toggle="modal"
                            data-target="#modal-18plusModal">
                            <img src="images/18plus.png">
                        </a>
                        <a href="#" target="_blank">
                            <img src="images/gamecare.png">
                        </a>
                        <a href="#" target="_blank">
                            <img src="images/gt.png">
                        </a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <span class="ws-pre-wrap">This website is operated by Seven Investments America N.V., registered
                        in
                        Curaçao under the number 152581, with the address at Zuikertuintjeweg Z/N (Zuikertuin Tower),
                        Curaçao</span>
                    <br /><br /><br />
                    <span class="ws-pre-wrap">The transactions are processed by Seven Investments LTD registered with
                        the number 12391820, with head office at Kemp House 160 City Road, London, United Kingdom. For
                        the purpose of processing payments via Paysafe Group including but not limited to Neteller and
                        Skrill, the transaction processing entity shall be Seven Investments America N.V., registered in
                        Curaçao under the number 152581, with the address at Zuikertuintjeweg Z/N (Zuikertuin Tower),
                        Curaçao..</span>

                </div>
            </div>
            <div class="text-center mt-1 w-100 copyright"> © Copyright 2020. All Rights Reserved. </div>
        </footer>

    </div>
    {{-- desktop view end --}}

    <!-- common Javascript files for mobiles-->
    <script src="{{ asset('NewTheme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('NewTheme/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('NewTheme/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('NewTheme/js/custom.js') }}"></script>
    <script src="{{ asset('NewTheme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('NewTheme/js/slick.js') }}"></script>
    <script src="{{ asset('NewTheme/js/video.min.js') }}"></script>


    <script>
        function redirectToGoogle() {
            window.location.href = 'https://app.cricadda.com/login';
        }

        function toggleSeeAll(ID1, ID2, button) {

            var element1 = document.getElementById(ID1);
            var element2 = document.getElementById(ID2);
            // Toggle visibility for element with id1
            if (element1.style.display === 'none') {
                element1.style.display = 'block';
                button.innerText = 'See All';

            } else {
                element1.style.display = 'none';
                button.innerText = 'See Less';
            }

            // Toggle visibility for element with id2
            if (element2.style.display === 'none') {
                element2.style.display = 'block';
                button.innerText = 'See Less';
            } else {
                element2.style.display = 'none';
                button.innerText = 'See All';
            }
        }
    </script>
</body>

</html>
