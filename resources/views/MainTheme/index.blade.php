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
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('NewTheme/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('NewTheme/css/video-js.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="NewTheme/images/favicon.png" type="image/gif" />
</head>
<style>
    #scrollDiv {
      scroll-margin-top: 50px; /* Offset to adjust for any fixed header */
      scroll-behavior: smooth; /* Enable smooth scrolling */
    }
  </style>
  
<body class="dark-theme">
    <header class="darker_theme">
        <nav role="navigation" class="header_top_bar">
            <div class="nav-wrapper container">
                <div class="nav-contain">
                    <div class="sidebrand-contain">
                        <div class="site_logo">
                            <a id="logo-container" href="https://app.cricadda.com/login" class="brand-logo">
                                <img onclick="redirectToGoogle();"
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

    <main class="content-wrapper">

        <div class="categories-home">
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
                    <a id="navMobileSports" name="navMobileSports" href="#scrollDiv"
                        class="sports item-nav">
                        <img  alt="Cricket" class="top_bar_images"
                            src="NewTheme/images/game icon.png"> Fantasy Games
                    </a>
                </li>
            </ul>
        </div>

        <!-- Banner Section -->
        <div class="carousel slide banner-slider">
            <div class="owl-carousel owl-theme" id="banner-slider">
                @foreach ($images as $item)
                    @if ($item->category == 'banner')
                        <div class="item  carousel-item carousal-23">
                            <img onclick="redirectToGoogle();"
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
                    <h1 class="title-section" style="color: #DEB439 !important;"> Popular Today</h1>
                </div>
            </div>
        </div>

        <div class="mobile-home-games-scroll ng-star-inserted">
            <ul class="home-slider mobile-home-scroll-content">
                @foreach ($images as $item)
                    @if ($item->category == 'popular_today')
                        <li class="item ng-star-inserted">
                            <div class="top-row">
                                <a href="https://app.cricadda.com/login">
                                    <img onclick="redirectToGoogle();" alt="New Games"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                            <div class="name-slider" style="text-align: center;color: #DEB439 !important;">{{ $item->heading ?? '' }}</div>
                        </li>
                    @endif
                @endforeach
                {{-- <li class="item ng-star-inserted">
          <div class="top-row">
            <a href="https://app.cricadda.com/login">
              <img onclick="redirectToGoogle();" alt="New Games" src="NewTheme/images/Test-Match--Bangladesh-VS-Afghanistan---Copy.png">
            </a>
          </div>
          <div class="name-slider">AFG vs BAN</div>
        </li>
        <li class="item ng-star-inserted">
          <div class="top-row">
            <a href="https://app.cricadda.com/login">
              <img onclick="redirectToGoogle();" alt="New Games" src="NewTheme/images/TNPL-Chepauk-Super-Gillies-VS-IDream-Tiruppur-Tamizhans.png">
            </a>
          </div>
          <div class="name-slider">CHEPAUK vs IDREAM</div>
        </li>
        <li class="item ng-star-inserted">
          <div class="top-row">
            <a href="https://app.cricadda.com/login">
              <img onclick="redirectToGoogle();" alt="New Games" src="NewTheme/images/Friendlies-International-Australia-VS-Argentina.png">
            </a>
          </div>
          <div class="name-slider">ARG vs AUS</div>
        </li> --}}
            </ul>
        </div>

        <div class="text-slider">
            <div class="info">
                <a href="https://app.cricadda.com/login" class="title-left text_decoration_none">
                    {{-- <span>
                        <img onclick="redirectToGoogle();" width="25px;" alt="Exchange Games"
                            src="NewTheme/images/Sports.svg">
                    </span> --}}
                    <h1 class="title-section" style="color: #DEB439 !important;"> Sports</h1>
                </a>
                {{-- <div>
          <a href="https://app.cricadda.com/login" class="see-all-a"> See All <i class="fas fa-solid fa-arrow-right iconArrow"></i>
          </a>
        </div> --}}
            </div>
        </div>
        <div class="mobile-home-games-scroll">
            <ul class="home-slider sports-section mobile-home-scroll-content">
                @foreach ($images as $item)
                @if($item->category=='sport')
                <li class="item">
                    <div class="top-row">
                        <a href="https://app.cricadda.com/login">
                            <img onclick="redirectToGoogle();" alt="Cricket" src="{{ asset('storage/Banners/' . $item->filename) }}">
                        </a>
                    </div>
                    <div class="name-slider" style="text-align: center;color: #DEB439 !important;text-transform: uppercase">{{ $item->heading ?? '' }}</div>
                </li>
                @endif
                @endforeach
                 
            </ul>
        </div>
        <div class="text-slider" id="scrollDiv">
            <div class="info">
                <a href="https://app.cricadda.com/login" class="title-left text_decoration_none">
                    {{-- <span _ngcontent-klx-c78="">
                        <img onclick="redirectToGoogle();" src="NewTheme/images/Popular Games Icon.svg"
                            width="25px;" alt="Popular Games">
                    </span> --}}
                    <h1 class="title-section" style="color: #DEB439 !important;"> Fantasy Games</h1>
                </a>
            </div>
        </div>

        <div class="containerPopular">
            <div class="secPopular">
                @foreach ($images as $item)
                    @if ($item->category == 'fantasyGames')
                        <img onclick="redirectToGoogle();" src="{{ asset('storage/Banners/' . $item->filename) }}">
                    @endif
                @endforeach
            </div>
        </div>


        {{-- <div class="text-slider">
      <div class="info">
        <a href="https://app.cricadda.com/login" class="bb-styling text_decoration_none">
          <span> <img onclick="redirectToGoogle();" width="22px;" alt="Games" src="NewTheme/images/Games.svg">
          </span>
          <h1 style="margin-top: 2px;">Games</h1>
        </a>
        <div>
          <a href="https://app.cricadda.com/login" class="see-all-a">
            <span>See All</span>
            <i class="fas fa-solid fa-arrow-right iconArrow" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div> --}}
        {{-- <div class="mobile-home-games-scroll">
      <ul class="home-slider mobile-home-scroll-content">
        <li class="item">
          <div class="top-row">
            <a>
              <img onclick="redirectToGoogle();" alt="Lottery Games" src="NewTheme/images/Lottery.webp">
            </a>
          </div>
          <div class="heading_wrapper">
            <span>Lottery Games</span>
          </div>
        </li>
        <li class="item">
          <div class="top-row">
            <a>
              <img onclick="redirectToGoogle();" alt="Instant Win" src="NewTheme/images/Instant Win.webp">
            </a>
          </div>
          <div class="heading_wrapper">
            <span>Instant Win</span>
          </div>
        </li>
        <li class="item">
          <div class="top-row">
            <a>
              <img onclick="redirectToGoogle();" alt="Slot" src="NewTheme/images/Slots.webp">
            </a>
          </div>
          <div class="heading_wrapper">
            <span>Slot Games</span>
          </div>
        </li>
      </ul>
    </div> --}}
        <div class="text-slider">
            <div class="info">
                <a href="https://app.cricadda.com/login" class="bb-styling text_decoration_none">
                    {{-- <span> <img onclick="redirectToGoogle();" width="22px;" alt="Casino"
                            src="NewTheme/images/Casino.svg">
                    </span> --}}
                    <h1 style="margin-top: 2px;color: #DEB439 !important;">Our Casinos</h1>
                </a>
                {{-- <div>
          <a href="https://app.cricadda.com/login" class="see-all-a">
            <span>See All</span>
            <i class="fas fa-solid fa-arrow-right iconArrow" aria-hidden="true"></i>
          </a>
        </div> --}}
            </div>
        </div>
        <div class="mobile-home-games-scroll">
            <ul class="home-slider mobile-home-scroll-content">
                @foreach ($images as $item)
                    @if ($item->category === 'outliveCasino')
                        <li class="item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Casino Games"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                            {{-- <div class="heading_wrapper">
            <span>Casinos</span>
          </div> --}}
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
        <div class="text-slider">
            <div class="info">
                <div class="bb-styling">
                    <a>
                        {{-- <span>
                            <img onclick="redirectToGoogle();" width="20px;" alt="Live Casino"
                                src="NewTheme/images/allcasinoo.svg">
                        </span> --}}
                        <h1 style="margin-top: 2px;color: #DEB439 !important;">Our Virtual Casinos</h1>
                    </a>
                </div>
                {{-- <div>
          <a class="see-all-a">
            <span>See All</span>
            <i class="fas fa-solid fa-arrow-right iconArrow" aria-hidden="true"></i>
          </a>
        </div> --}}
            </div>
        </div>
        <div class="mobile-home-games-scroll">
            <ul class="home-slider mobile-home-scroll-content">
                @foreach ($images as $item)
                    @if ($item->category == 'virtualCasino')
                        <li class="item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Roulette"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                            {{-- <div class="heading_wrapper">
            <span>Roulette</span>
          </div> --}}
                        </li>
                    @endif
                @endforeach


            </ul>
        </div>
        <div class="text-slider">
            <div class="info">
                <div class="bb-styling">
                    <a>
                        {{-- <span>
                            <img onclick="redirectToGoogle();" width="24px;" alt="Providers"
                                src="NewTheme/images/Providers.svg">
                        </span> --}}
                        <h1 style="margin-top: 2px;color: #DEB439 !important;">Live Casinos</h1>
                    </a>
                </div>
                {{-- <div>
          <a class="see-all-a">
            <span>See All</span>
            <i class="fas fa-solid fa-arrow-right iconArrow" aria-hidden="true"></i>
          </a>
        </div> --}}
            </div>
        </div>
        <div class="mobile-home-games-scroll">
            <ul class="home-slider mobile-home-scroll-content">
                @foreach ($images as $item)
                    @if ($item->category == 'liveCasino')
                        <li class="item">
                            <div class="top-row">
                                <a>
                                    <img onclick="redirectToGoogle();" alt="Evolution Gaming"
                                        src="{{ asset('storage/Banners/' . $item->filename) }}">
                                </a>
                            </div>
                        </li>
                    @endif
                @endforeach

            </ul>
        </div>
        <!--   <div class="text-slider">
      <div class="info">
        <div class="bb-styling">
          <a> <img onclick="redirectToGoogle();" width="24px;" alt="Providers" src="NewTheme/images/endors.svg">
            <h1 style="right: 10px;">Endorsements</h1>
          </a>
        </div>
      </div>
    </div>

    <div class="mobile-home-games-scroll">
      <ul class="home-slider mobile-home-scroll-content">
        <li class="item last-sport-item ng-star-inserted">
          <video id="Govinda-vid" class="video-js" controls preload="auto" width="166" height="295"
            poster="NewTheme/images/CELEB THUMBNAIL-03.png" data-setup="{}">
            <source src="NewTheme/images/Govinda.mp4" type="video/mp4" />
       <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </li>
        <li class="item last-sport-item ng-star-inserted">
          <video id="Govinda-vid" class="video-js" controls preload="auto" width="166" height="295"
            poster="NewTheme/images/CELEB THUMBNAIL-08.png" data-setup="{}">
            <source src="NewTheme/images/adah-khan-reel-withlogo.mp4" type="video/mp4" />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </li>
        <li class="item last-sport-item ng-star-inserted">
          <video id="Govinda-vid" class="video-js" controls preload="auto" width="166" height="295"
            poster="NewTheme/images/CELEB THUMBNAIL-02.png" data-setup="{}">
            <source src="NewTheme/images/nitin-1080-1920-4.mp4" type="video/mp4" />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </li>
        <li class="item last-sport-item ng-star-inserted">
          <video id="Govinda-vid" class="video-js" controls preload="auto" width="166" height="295"
            poster="NewTheme/images/CELEB THUMBNAIL-01.png" data-setup="{}">
            <source src="NewTheme/images/rashmi-reel-bg-replaced.mp4" type="video/mp4" />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </li>
        <li class="item last-sport-item ng-star-inserted">
          <video id="Govinda-vid" class="video-js" controls preload="auto" width="166" height="295"
            poster="NewTheme/images/CELEB THUMBNAIL-05.png" data-setup="{}">
            <source src="NewTheme/images/Shakti reel_4.mp4" type="video/mp4" />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </li>
        <li class="item last-sport-item ng-star-inserted">
          <video id="Govinda-vid" class="video-js" controls preload="auto" width="166" height="295"
            poster="NewTheme/images/CELEB THUMBNAIL-06.png" data-setup="{}">
            <source src="NewTheme/images/shefali-reel-withlogo.mp4" type="video/mp4" />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </li>
      </ul>
    </div>
 -->



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



    <!-- Footer -->

    <footer>
        <div class="max-width content-padding">
            <div class="footer-nav-items">
                <section class="footers-container-second">
                    <footer class="container">
                        <div class="footer max-width">
                            <div class="links footer-row content-padding">
                                <div class="footer-nav max-footer-width">
                                    <div>
                                        <div class="license-column-holder">
                                            {{-- <div style="display: flex; justify-content: center;"
                                                class="ng-star-inserted">
                                                <a class="btn_wrapper special_border">
                                                    <button type="button" class="button-1 for-img">
                                                        <img onclick="redirectToGoogle();" alt="chat icon"
                                                            src="NewTheme/images/chatic.svg">
                                                        <span class="livebtn">Live Chat</span>
                                                        <div style="display: contents;">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0; position: absolute; right: 30%;"
                                                                src="NewTheme/images/angle.svg">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                class="angle-right"
                                                                style="width: 6px; margin-right: 0; position: absolute; right: 31%;"
                                                                src="NewTheme/images/angle.svg">
                                                        </div>
                                                    </button>
                                                </a>
                                            </div> --}}
                                            <!---->
                                            {{-- <div class="tut-class">
                                                <span>Tutorials</span>
                                            </div> --}}
                                            {{-- <div class="tutorials">
                                                <span class="special_border">
                                                    <div class="tutorial-btn">
                                                        <span class="tut-span">
                                                            <a>Signup/Login</a>
                                                        </span>
                                                        <div class="angle">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                        </div>
                                                    </div>
                                                </span>
                                                <span class="special_border">
                                                    <div class="tutorial-btn">
                                                        <span class="tut-span">
                                                            <a>Automatic Deposit</a>
                                                        </span>
                                                        <div class="angle">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                        </div>
                                                    </div>
                                                </span>
                                                <span class="special_border">
                                                    <div class="tutorial-btn">
                                                        <span class="tut-span">
                                                            <a>Manual Deposit</a>
                                                        </span>
                                                        <div class="angle">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                        </div>
                                                    </div>
                                                </span>
                                                <span class="special_border">
                                                    <div class="tutorial-btn">
                                                        <span class="tut-span">
                                                            <a>Withdrawal</a>
                                                        </span>
                                                        <div class="angle">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                            <img onclick="redirectToGoogle();" alt="angle icon"
                                                                style="width: 6px; margin-right: 0;"
                                                                src="NewTheme/images/angle.svg">
                                                        </div>
                                                    </div>
                                                </span>
                                            </div> --}}
                                            <div class="payment-img-holder">
                                                <div class="row" style="justify-content: space-around;">
                                                    <img alt="INB" class="row-images1"
                                                        src="NewTheme/images/INB.svg">
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
                                                    <img alt="Bank Trasnfer" class="row-images1"
                                                        src="NewTheme/images/BNKTRANSFER.svg">
                                                </div>
                                                <div class="row"
                                                    style="margin-top: 8px; justify-content: space-around;">
                                                    <img alt="One Rupee" class="row-images1"
                                                        src="NewTheme/images/ONERUPEE.svg">
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
                                                </div>
                                            </div>
                                            <div class="footer-items">
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
                                            </div>
                                            <br />
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
                <div class="flexout" style="margin-bottom: 60px">
                    <a href="{{ $FacebookLink->value ?? '#' }}" target="_blank">
                        <img alt="instagram" class="social2" src="NewTheme/images/Faceook.svg">
                    </a>
                    <a href="{{ $youtubeLink->value ?? '#' }}" target="_blank">
                        <img alt="twitter" class="social2" src="NewTheme/images/Youtube.svg">
                    </a>
                    <a href="{{ $instagramLink->value ?? '#' }}" target="_blank">
                        <img alt="instagram" class="social2" src="NewTheme/images/instagram.svg">
                    </a>
                    <a href="https://app.cricadda.com/login" target="_blank">
                        <img alt="twitter" class="social2" src="NewTheme/images/twitter.svg">
                    </a>
                    <a href="{{ $TelegramLink->value ?? '#' }}" target="_blank">
                        <img alt="telegram" class="social2" src="NewTheme/images/telegram.svg">
                    </a>
                </div>
                <div class="fixed-footer-buttons user-signin-links ng-star-inserted"
                    style="display: flex  !important;justify-content: center !important;width: 99%;margin-bottom: 20px">
                    <span class="signup_btn_wrapper" style="width: 36%">
                        <a href="{{$TelegramLink->value}}"
                            class="signup waves-effect waves-light ng-star-inserted">
                            <span>
                                <img onclick="redirectToGoogle();" src="NewTheme/images/telegramoriginal.png" alt="" style="width: 19px !important;">
                            </span>
                            <span style="font-size: 10px;font-weight: 900" > Telegram for new ID</span>
                        </a>
                    </span>
                    <span class="signup_btn_wrapper" style="width: 20%" style="">
                        <a href="https://app.cricadda.com/login"
                            class="signup waves-effect waves-light ng-star-inserted" style="text-align: center;display: flex;justify-content: center">
                            
                            <span style="font-size: 10px;font-weight: 900" > Live Chat </span>
                        </a>
                    </span>
                    <span class="signup_btn_wrapper" style="width: 36%">
                        <a href="{{$WhatsAppLink->value}}"
                            class="signup waves-effect waves-light ng-star-inserted">
                            <span>
                                <img onclick="redirectToGoogle();" src="NewTheme/images/whatsapp_PNG1.png" alt="" style="width: 19px !important;">
                            </span>
                            <span style="font-size: 10px;font-weight: 900" > Whatsapp for new ID  </span>
                        </a>
                    </span>

                </div>
            </div>
        </div>
    </footer>


    <!-- Javascript files-->
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
    </script>
</body>

</html>
