<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cricadda.com</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/s.png') }}" type="image/gif" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-78LF93X3L1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-78LF93X3L1');
    </script>

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

<body>
    <div class="wrapper home-new">

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
        <div id="floater"><a href="{{ 'https://wa.me/' . $WhatsAppLink->value }}" target="_blank"><img
                    src="images/images.png"></a>
            <a href="{{ $TelegramLink->value }}" target="_blank"><img src="images/telegram1.png"></a>
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
                        <div class="header-buttons">
                            <button class="btn btn-primary register-btn ml-2" onclick="registerRedirect();"
                                href="https://app.cricadda.com/register"> Register </button>
                            <button class="btn btn-primary ml-2" onclick="loginRedirect();"
                                href="https://app.cricadda.com/login"> Login </button>
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
                <li><a href="/" aria-current="page" class="router-link-exact-active router-link-active"> Exchange
                    </a></li>
                <li><a href="https://app.cricadda.com/login" role="button">Live Casino</a></li>
                <li><a href="https://app.cricadda.com/login" role="button">Slot</a></li>
                <li><a href="https://app.cricadda.com/login" role="button">Fantasy Games</a></li>
            </ul>
        </div>
        <!-- Header Top-Bar -->
        <div class="news-bar">
            <?php if($responseData['country'] == 'PK'){ ?>
            <marquee> JOIN NOW AND GET 50% JOINING BONUS!! </marquee>
            <?php } else { ?>
            <marquee> WELCOME TO CRICADDA, INDIA'S BIGGEST BETTING AND GAMING EXCHANGE, NOW GET 5% BONUS ON EVERY
                REFILL! </marquee>
            <?php } ?>
            <div class="news-title">
                <img src="images/speaker.svg">
            </div>
        </div>
        @if ($responseData['country'] != 'PK')
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

            <h4 class="sport-list-title">Our Live Casinos</h4>
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

            <h4 class="sport-list-title">Sports</h4>
            <div class="all-sports-list mt-2">
                <div class="sport-list-item">
                    <img src="images/40-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Politics</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/4-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Cricket</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/1-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Football</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/2-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Tennis</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/10-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Horse Racing</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/8-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Table Tennis</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/15-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Basketball</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/18-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Volleyball</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/59-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Snooker</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/19-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Ice Hockey</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/11-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">E Games</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/9-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Futsal</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/39-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Handball</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/66-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Kabaddi</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/5-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Golf</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/55-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Rugby League</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/6-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Boxing</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/7-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Beach Volleyball</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/3-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Mixed Martial Arts</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/16-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">MotoGP</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/17-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Chess</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/22-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Badminton</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/29-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Cycling</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/32-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Motorbikes</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/33-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Athletics</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/35-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Basketball 3X3</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/37-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Sumo</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/38-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Virtual sports</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/52-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Motor Sports</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/53-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Baseball</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/54-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Rugby Union</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/57-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Darts</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/58-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">American Football</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/62-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Soccer</div>
                </div>
                <div class="sport-list-item">
                    <img src="images/64-color.svg" role="button" tabindex="0">
                    <div class="mt-1 text-center" onclick="loginRedirect();">Esports</div>
                </div>
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
                        <a href="https://app.cricadda.com/terms-and-conditions" class="" target="_blank">Terms
                            and Conditions</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/responsible-gaming" class=""
                            target="_blank">Responsible Gaming</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/aml-policy" class="" target="_blank">AML Policy</a>
                    </li>
                    <li>
                        <a href="https://app.cricadda.com/kyc-policy" class="" target="_blank">KYC Policy</a>
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
                    <span class="ws-pre-wrap">This website is operated by Seven Investments America N.V., registered in
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

    <!-- Register Modal -->
    <div id="RegisterModal" class="modal fade modal-login-new" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Register</h5>
                    <button type="button" class="close" data-dismiss="modal"><img src="images/close.svg"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="login-form mt-0">
                        <div class="register-fields">
                            <div class="form-group regi-half">
                                <label class="user-email-text">Username *</label>
                                <input type="text" placeholder="Enter Username" class="form-control">
                            </div>
                            <div class="form-group regi-half">
                                <label class="user-email-text">Phone Number *</label>
                                <!-- <input type="number" placeholder="Phone Number *" class="form-control"> -->
                                <input id="countryphone" name="phone" placeholder="Phone Number *" type="tel"
                                    class="form-control">
                            </div>
                            <div class="form-group regi-half">
                                <label class="user-email-text">New Password *</label>
                                <input type="password" placeholder="New Password" class="form-control">
                            </div>
                            <div class="form-group regi-half">
                                <label class="user-email-text">Confirm Password *</label>
                                <input type="password" placeholder="Confirm Password" class="form-control">
                            </div>
                            <div class="form-group regi-half">
                                <label class="user-email-text">Referrer Code</label>
                                <input type="text" placeholder="Enter Referrer Code" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox d-inline-block">
                                <input type="checkbox" id="customCheck" name="example1"
                                    class="custom-control-input">
                                <label for="customCheck" class="custom-control-label">I am at least <a
                                        href="javascript:void(0)" class="text-danger" role="button">18 years</a> of
                                    age and I have read, accept and agree to the <a href="#" class=""
                                        target="_blank">Terms and Conditions </a>, <a href="#" class=""
                                        target="_blank">Responsible Gaming </a>,
                                    <a href="#" target="_blank">GamCare</a>, <a href="#"
                                        target="_blank">Gambling Therapy</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" disabled="disabled"> Register
                            </button>
                        </div>
                        <small class="recaptchaTerms"> This site is protected by reCAPTCHA and the Google <a
                                href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="LoginModal" class="modal fade modal-login-new" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Login</h5>
                    <button type="button" class="close" data-dismiss="modal"><img src="images/close.svg"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="login-form mt-0">
                        <div class="form-group">
                            <label class="user-email-text">Username</label>
                            <input type="text" placeholder="Enter Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="user-email-text">Password</label>
                            <input type="password" placeholder="Enter Password" class="form-control">
                            <div class="text-right">
                                <a href="#" target="_blank"><u>Forgot Password?</u></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox d-inline-block">
                                <input type="checkbox" id="customCheck" name="example1"
                                    class="custom-control-input">
                                <label for="customCheck" class="custom-control-label">I am at least <a
                                        href="javascript:void(0)" class="text-danger" role="button">18 years</a> of
                                    age and I have read, accept and agree to the <a href="#" class=""
                                        target="_blank">Terms and Conditions </a>, <a href="#" class=""
                                        target="_blank">Responsible Gaming </a>,
                                    <a href="#" target="_blank">GamCare</a>, <a href="#"
                                        target="_blank">Gambling Therapy</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <button type="submit" class="btn btn-primary btn-block" disabled="disabled"> Login
                            </button>
                        </div>
                        <small class="recaptchaTerms">This site is protected by reCAPTCHA and the Google <a
                                href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 18plus Modal -->
    <div id="modal-18plusModal" class="modal fade modal-18plus" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="eighteenPlusFooter___BV_modal_title_" class="modal-title">Cricadda.com.com</h5>
                    <button type="button" aria-label="Close" class="close">×</button>
                </div>
                <div class="modal-body">
                    <div class="modal-18plus p-5">
                        <div><img src="images/18plus.png"></div>
                        <p><b>Over 18s only</b><br>
                            <br>It is an offence for anyone under the age of 18 to open an account or to gamble on
                            Cricadda.com. Cricadda.com takes its age-verification responsibilities very seriously. We
                            carry out age-verification checks on all customers who use payment mechanisms which are
                            available to under 18s and additionally perform random age-verification checks on customers
                            using other forms of funding mechanisms. We may ask for information to verify your age and
                            could restrict or suspend your account until your age is confirmed. <br>
                            <br>PLEASE NOTE THAT ANYONE UNDER THE AGE OF 18 YEARS OLD FOUND TO BE USING THIS SITE WILL
                            HAVE ANY WINNINGS FORFEITED AND MAY ALSO BE REPORTED TO THE POLICE. <br><br>
                            <b>Filtering systems</b><br>
                            <br>Cricadda.com advises and encourages its customers to prevent minors from accessing
                            gambling websites. <br>
                            <br>Filtering solutions allow parents to regulate access to the internet, based on chosen
                            criteria. Parents can use filters to prevent their children from accessing, amongst other
                            things, gambling websites. Because our pages are 'labelled', filtering solutions being used
                            to prevent gambling access are able to detect our site content, and block our pages. If you
                            share your computer with friends or family who are under the legal age to register or bet
                            with our site, please consider parental filtering solutions such as: <br>
                            <br>Net Nanny™ <a href="#" target="_blank">www.netnanny.com</a><br>
                            <br>CyberPatrol <a href="#" target="_blank">www.cyberpatrol.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/intlTelInput.min.js') }} "></script>

</body>
<script type="text/javascript">
    function registerRedirect() {
        window.open("https://app.cricadda.com/register", "_self");
    }

    function loginRedirect() {
        window.open("https://app.cricadda.com/login", "_self");
    }
</script>

</html>
