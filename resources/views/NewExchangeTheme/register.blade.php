<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>CRICADDA</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- css -->
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/world-open-custom.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/all.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/fonts.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/responsive.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/slick-theme.css')}}">
   <link rel="stylesheet" href="{{asset('NewExchangeTheme/css/intlTelInput.min.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="images/c.png')}}" type="image/gif" />
</head>

<body class="login-home">
   <div id="app">
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
      <div class="wrapper world-open-home">
         <!-- Floter Icon -->
         <div id="floater">
            <a href="{{ 'https://wa.me/' . $WhatsAppLink->value }}" target="_blank">
               <img src="{{asset('NewExchangeTheme/images/images.png')}}">
            </a>
            <a href="#" target="_blank">
               <img src="{{asset('NewExchangeTheme/images/news.jpg')}}">
            </a>
         </div>
         <!-- End Floter Icon -->
         <!-- Header Top-Bar -->
         <div class="header-top">
            <ul>
               <li><a href="{{url('/')}}" aria-current="page" class="router-link-exact-active router-link-active"> Exchange </a>
               </li>
               <li><a href="javascript:void(0);" role="button">Live Casino</a></li>
               <li><a href="javascript:void(0);" role="button">Slot</a></li>
               <li><a href="javascript:void(0);" role="button">Fantasy Games</a></li>
            </ul>
            <a href="#" target="_blank" class="download-apk"><i class="fab fa-android mr-2"></i> Download APK </a>
         </div>
         <!-- Header Top-Bar -->

         <!-- Sidebar -->
         <div class="sidebar-left d-none-mobile">
            <div class="logo-box">
               <div class="logo">
                  <a href="{{url('/')}}" class="router-link-exact-active router-link-active">
                     <img src="{{asset('NewExchangeTheme/images/logmain.png')}}" class="img-fluid">
                  </a>
               </div>
            </div>
            <div class="upcoming-fixure d-none-mobile">
               <div class="menu-title">Upcoming Fixure</div>
               <section tabindex="0" class="hooper is-vertical">
                  <div class="hooper-list">
                     <div class="upcoming-slider hooper-track">
                        <div class="item hooper-slide">
                           <a href="" class="">
                              <div class="fixure-box">
                                 <div><i class='fas fa-baseball-ball'></i> Essex v Sussex</div>
                                 <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                              </div>
                           </a>
                        </div>
                        <div class="item hooper-slide">
                           <a href="" class="">
                              <div class="fixure-box">
                                 <div><i class='fas fa-baseball-ball'></i> Essex v Sussex</div>
                                 <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                              </div>
                           </a>
                        </div>
                        <div class="item hooper-slide">
                           <a href="" class="">
                              <div class="fixure-box">
                                 <div><i class='fas fa-baseball-ball'></i> Essex v Sussex</div>
                                 <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                              </div>
                           </a>
                        </div>
                        <div class="item hooper-slide">
                           <a href="" class="">
                              <div class="fixure-box">
                                 <div><i class='fas fa-baseball-ball'></i> Essex v Sussex</div>
                                 <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="menu-box">
               <h5 class="text-yellow pl-2">
                  <u>All Sport</u>
               </h5>
               <div class="sports-list-content">
                  <div class="all-menu">
                     <span mode="out-in">
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport40">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Politics</span><span> (1)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">Assembly Election 2023</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Assembly Election 2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport4">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Cricket</span><span> (11)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">Virtual Cricket League</span><span> (3)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#lJGmJn8Q==" class="dropdown-item">
                                             <span class="ifTooltip">Bangladesh T10 v Australia T10</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#5062A7+Q==" class="dropdown-item">
                                             <span class="ifTooltip">West Indies T10 v India T10</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#P7oTt+nQ==" class="dropdown-item">
                                             <span class="ifTooltip">West Indies T10 v Sri Lanka T10</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">Balla Bol</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#k9ZO8u5Q==" class="dropdown-item">
                                             <span class="ifTooltip">Daring Dozens v Golden Horses</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#l0o%2Fuw==" class="dropdown-item">
                                             <span class="ifTooltip">Panthers v PerFormers</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">One Day Internationals</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#8DGHmBfA==" class="dropdown-item">
                                             <span class="ifTooltip">Sri Lanka v Afghanistan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#XW1ZqbCg==" class="dropdown-item">
                                             <span class="ifTooltip">UAE v West Indies</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">T10 XI</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#enJAS+hA==" class="dropdown-item">
                                             <span class="ifTooltip">Adelaide Strikers XI v Hobart Hurricanes XI</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">Test Matches</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#4hGvDJww==" class="dropdown-item">
                                             <span class="ifTooltip">Australia v India</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">T5 XI</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#ZEYbUBaw==" class="dropdown-item">
                                             <span class="ifTooltip">TKR XI v SNP XI</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">T20 Blast</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#EeIuaB2A==" class="dropdown-item">
                                             <span class="ifTooltip">Leicestershire v Yorkshire</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport1">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Football</span><span> (66)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">URUGUAY Reserve League</span><span> (3)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">danubio ii Reserve - Liverpool Montevideo Ii</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">montevideo wanderers ii Reserve - Defensor Sporting
                                                Ii</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">River Plate Montevideo II - Club Plaza Colonia de
                                                Deportes
                                                II</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">AUSTRIA Bundesliga</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolfsberger AC v SC Austria Lustenau</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">MALI Premiere Division</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">US Bougouba - Afrique Football Elite</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">NORWAY Division 3</span><span> (7)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Askollen - Start 2</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Frigg - Lokomotiv Oslo</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Grorud 2 - Ullern 2</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Madla - Vidar</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sandefjord 2 - Pors Grenland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sprint-Jeloy - Odd II</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Vindbjart - Fredrikstad 2</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">IRELAND Premier Division</span><span> (5)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Cork City v Bohemians</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dundalk v UCD</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Shelbourne v Drogheda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sligo Rovers v Shamrock Rovers</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">St Patricks v Derry City</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">MYANMAR League 2</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mawyawadi - Rakhapura United</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thitsar Arman - Shwe Pyi Thar</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">BRAZIL Serie A</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Vasco da Gama v Flamengo</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">VIETNAM V.League 1</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Shb Da Nang v Binh Duong</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">UEFA - Champions League</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">UEFA - Champions League - Winner 2022/23</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">COLOMBIA Regional League</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">FC Leones Reserves - Soccer Law</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ferrovalvulas FC - Lula</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">BRAZIL Brasileiro Women</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Santos W - Bahia W</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ARMENIA Premier League</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">BKMA Yerevan - FC Ararat-Armenia</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Lernayin Artsakh fc - FC Shirak</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">MYANMAR National League</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kachin United - GFA Chinland</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">FINLAND Kakkonen</span><span> (5)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ilves-Kissat - Atlantis FC</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">JS Hercules - RoPS Rovaniemi</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kuopion Elo 1919 - FCV</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">NJS Nurmijarvi - Klubi 04</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">PK K-U - PK-35 Helsinki </span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">SWEDEN Allsvenskan</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Malmo FF v Degerfors</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Varbergs BoIS v Hacken</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">SWEDEN Superettan</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Skovde Aik v AFC Eskilstuna</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Trelleborgs v IK Brage</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LATVIA Optibet Virsliga</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">BFC Daugavpils - FK Liepaja</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">FS Jelgava - Valmiera FC</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CHINA Yi League</span><span> (4)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Guangxi Lanhang - Yunnan Yukun</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Quanzhou Yaxin - Jiangxi Dark Horse</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wuhan Jiangcheng - Taian Tiankuang</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Zibo Qisheng - Dalian Zhixing</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">BULGARIA Parva liga</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hebar - Beroe</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">IVORY COAST Ligue 1</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">San Pedro FC - AFAD Djekanou</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LITHUANIA I Lyga</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Zalgiris II - FA Siauliai ll</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ICELAND ICELANDIC CUP - QUARTER-FINALS</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Breidablik v Hafnarfjordur</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thor v Vikingur Reykjavik</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">GERMANY BUNDESLIGA - RELEGATION - FINAL</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hamburger SV v Stuttgart</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">GERMANY 2. BUNDESLIGA - RELEGATION - FINAL</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Arminia Bielefeld v Wehen Wiesbaden</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">GEORGIA Crystalbet Erovnuli Liga</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">FC Dinamo Batumi - FC Saburtalo</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Torpedo Kutaisi - FC Dila Gori</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ZIMBABWE Premier Soccer League</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yadah - Ngezi Platinum FC</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">KOSOVO Kosovar Cup</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gjilani - FC Prishtina</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">URUGUAY Primera Division</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Deportivo Maldonado v Centro Atletico Fenix</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Torque v Defensor Sporting</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">GREECE Super League 2</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Makedonikos v Diagoras</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">EUROPE EUROPA CONFERENCE LEAGUE - FINAL</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Fiorentina v West Ham</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">NORWAY Division 2</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Brann 2 - Tromsdalen</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">SWEDEN Allsvenskan Women</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">IF Brommapojkarna W - Djurgardens IF FF W</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ARGENTINA Liga Profesional</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">River Plate v Defensa y Justicia</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">IRELAND Division 1</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Cobh Ramblers - Longford Town</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ECUADOR Liga Pro</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Deportivo Cuenca v Delfin</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ITALY Primavera 1</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Lecce U19 - Sassuolo U19</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">EGYPT Premier League</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Zamalek v Al Ittihad (EGY)</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">SWEDEN Division 1</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Eskilsminne IF - Angelholms FF</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport2">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Tennis</span><span> (75)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ATP- DOUBLES FRENCH OPEN (FRANCE) -
                                          QUARTER-FINALS</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gille/Vliegen v Gonzalez/Molteni</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Middelkoop/Mies v Arevalo/Rojer</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CHALLENGER MEN- SINGLES Prostejov (Czech
                                          Republic)</span><span>
                                          (12)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bagnis v Geerts</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Burruchaga v Marchenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Darderi v Svrcina</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Em Nava v Kolar</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ma Valkusz v Vrbensky</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Martin Tiffon v Lavagno</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mayot v Coria</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mpetshi Perricard v Guinard</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pokorny v Kuzmanov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pucinelli De Almeida v Vi Sachko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sakamoto v Hy Barton</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sels v Navone</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ITF WOMEN - SINGLES W80 Rancho Santa Fe, CA
                                          (USA)</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Fangran Tian - Emily Gelber</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">UTR PRO TENIS SERIES HILVERSUM</span><span> (8)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Aloys Van Baal - Roland Stuurman</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Arthur Van Der Kooij - Stijn Pel</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bredschneijder O - Twan Van Zijl</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Guy Den Heijer - Ivan Sergeyev</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jip Van Assendelft - Mika Berghaus</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Karim Al-amin - Alexander Maarten Jong</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pepijn Bastiaansen - Masato Perera</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Victor Sklenka - Julian Cundom</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CHALLENGER MEN - SINGLES Heilbronn (Germany)</span><span>
                                          (12)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Arnaboldi v Je Kym</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Casanova v Marozsan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dellien v Munar</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dzumhur v Skatov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Fanselow v Vla Orlov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Galan v Ilkel</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gavrielides v Santillan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Henri Squire v Moraing</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kovalik v Marterer</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Lu Gerch v Janvier</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ol Krutykh v Ma Topo</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">T Stodder v Max Rehberg</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">WTA - DOUBLES FRENCH OPEN (FRANCE)</span><span>
                                          (4)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chan/Chan v Cornet/Parry</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dabrowski/Stefani v Fernandez/Townsend</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hsieh/Wang v Krawczyk/Schuurs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sanders/Mertens v Kudermetova/Samsonova</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CHALLENGER MEN - SINGLES Surbiton (United
                                          Kingdom)</span><span>
                                          (11)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">B Harris v Svajda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Clarke v Saville</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Cox v Ar Fery</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Herbert v Wendelken</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hy Chung v Murray</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kubler v Brouwer</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mar Whitehouse v Ja Mccabe</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">OConnell v Kudla</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Purcell v Ziz Bergs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Vesely v Ry Peniston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yunchaokete v Ab Shelbayh</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">UTR PRO TENNIS SERIES HILVERSUM WOMEN</span><span>
                                          (7)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Anastasiya K Soboleva - Klara Veldman</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Annika Barth - Lian Tran</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dilara Okur - Judith Van Kessel</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ena Kajevic - Sarah Van Emst</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Katrin pavkova - Denisa Pospisilova</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Melissa Boyden - Rose Marie Nijkamp</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sarah Olff - Demi Tran</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ATP - SINGLES FRENCH OPEN (FRANCE)</span><span>
                                          (4)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dimitrov v A Zverev</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hol Rune v Cerundolo</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jarry v Ruud</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">To Etcheverry v Nishioka</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ITF MEN - SINGLES M15 Daegu (South Korea)</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kenta Miyoshi - Suk Ann</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Min-Kyu Song - Jesse Delaney</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">WTA - SINGLES FRENCH OPEN (FRANCE)</span><span>
                                          (4)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">I Swiatek v Tsurenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Karolina Schmiedlova v Gauff</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pera v O Jabeur</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sorribes Tormo v B Haddad Maia</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ITF MEN - SINGLES M15 Karuizawa (Japan)</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">SanHui Shin - Tatsuma Ito</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ITF MEN - SINGLES M25 Jakarta (Indonesia)</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Renaldi A A Salim - Shivank Bhatnagar</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CHALLENGER WOMEN-SINGLES La Bisbal D
                                          Emporda(Spain</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">And Prisacariu v And Gamiz</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mateas v Luci Cortez Llorca</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">UTR PRO TENNIS SERIES FLORIDA WOMEN</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hayley Roberts - Sophie Llewellyn</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Marianne Argyrokastriti - Annabel Davis</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">French Open Women 2023</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">French Open Women 2023 - To Win Outright</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">French Open Men 2023</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">French Open Men 2023 - To Win Outright</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport10">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Horse Racing</span><span> (83)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">FR</span><span> (16)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-15:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-15:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-16:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-16:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-17:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-17:35:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-18:10:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chateaubriant-18:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-19:55:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-20:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-21:05:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-21:47:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-22:22:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-22:55:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-23:25:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">La Teste De Buch-23:55:00 05/06/2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">IE</span><span> (14)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-18:35:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-19:07:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-19:37:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-20:07:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-20:37:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-21:07:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gowran Park-21:37:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-18:50:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-19:20:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-19:50:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-20:20:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-20:50:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-21:20:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Listowel-21:50:00 05/06/2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">GB</span><span> (29)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-18:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-19:15:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-19:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-20:15:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-20:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-21:15:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ayr-21:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-19:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-19:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-20:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-20:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-21:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-21:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thirsk-22:05:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-00:15:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-00:45:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-01:15:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-22:15:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-22:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-23:15:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Windsor-23:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-00:00:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-00:30:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-01:00:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-01:30:00 06/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-22:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-22:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-23:00:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Wolverhampton-23:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ZA</span><span> (8)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-15:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-16:20:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-16:55:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-17:30:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-18:05:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-18:40:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-19:20:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Greyville-19:55:00 05/06/2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">AU</span><span> (15)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-13:23:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-13:54:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-14:25:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-14:53:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-15:21:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-15:49:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-16:17:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-16:45:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canberra-17:13:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Newcastle-13:47:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam-13:24:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam-14:01:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pinjarra-13:02:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pinjarra-13:37:00 05/06/2023</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pinjarra-14:12:00 05/06/2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">IN</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Test Event-17:00:00 31/05/2023</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport65">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Greyhound Racing</span><span> (235)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">GB</span><span> (154)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Central Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Doncaster</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kinsley</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Monmore</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nottingham</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oxford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Perry Barr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Romford</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Sheffield</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Suffolk Downs</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Swindon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Towcester</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yarmouth</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">AU</span><span> (81)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Albion Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Angle Park</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ballarat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Launceston</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maitland</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Northam</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Nowra</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Temora</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Temora</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Traralgon</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Warrnambool</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Warrnambool</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Warrnambool</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li>
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport8">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Table Tennis</span><span> (107)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CZECH Liga Pro</span><span> (82)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Adam Vitasek - Martin Biolek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ales Rusnak - Filip Sikora</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bohumil Vozicky - David Stepanek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Cesta Havrda - Martin Nypl</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Daniel Tuma - Josef Grill</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Daniel Tuma - Lukas Rygl</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dominik Lengal - Michal Zobac</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Dominik Lengal - Radek Krcal</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Erik Mares - Jiri Nesnera</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Erik Mares - Tomas Prosa</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Filip Dusil - Jan Manhal Junior</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Filip Sikora - Jan Dzida</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Filip Sikora - Rostislav Niezgoda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Frantisek Kanta - Thomas Demek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Dzida - Ales Rusnak</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Dzida - Rostislav Niezgoda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Lovl - Filip Dusil</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Lovl - Radek Fnukal</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Manhal Junior - Jan Lovl</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Mecl Jr - Michal Jezek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Mecl Jr - Rostyslav Kliucuk</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Sucharda - Jiri Pozarsky</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Sucharda - Patrik Pycha</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Varcl SR. - Cesta Havrda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Varcl SR. - Jaroslav Strnad 1961</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Vidourek - Radek Vranca</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jan Vidourek - Vaclav Pech</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jaroslav Novotny - Daniel Tuma</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jaroslav Novotny - Lukas Rygl</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jaroslav Schwan - Lukas Kantor</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jaroslav Strnad 1961 - Cesta Havrda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jaroslav Strnad 1961 - Martin Nypl</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jiri Machart - Petr Monik</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jiri Nesnera - Tomas Prosa</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jiri Pozarsky - Martin Sobisek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jiri Pozarsky - Patrik Pycha</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Josef Grill - Jaroslav Novotny</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Jozef Denez - Oskar Spacek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Karel Filip - Dominik Lengal</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ladislav Svanda - Jan Vidourek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Lukas Kantor - Martin Pavliska</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Lukas Rygl - Josef Grill</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Lukas Tonar - Vladimir Havlicek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Martin Biolek - WAWROSZ PAVEL</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Martin Nypl - Jan Varcl SR.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Martin Pavliska - Jaroslav Schwan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Martin Pavliska - Richard Macura</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Martin Sobisek - Jan Sucharda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Matej Pycha - Jozef Denez</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Matej Pycha - Miroslav Antos</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Michal Jezek - Radek Rose</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Michal Zobac - Karel Filip</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Miroslav Antos - Jozef Denez</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oldrich Vrtal - David Szotek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oskar Spacek - Matej Pycha</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oskar Spacek - Miroslav Antos</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Patrik Pycha - Martin Sobisek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Patrik Pycha - Martin Sobisek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Petr Monik - Jiri Reczai</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Petr Vicherek - Adam Vitasek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Petr Vicherek - Martin Biolek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Fnukal - Filip Dusil</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Fnukal - Jan Manhal Junior</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Krcal - Karel Filip</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Krcal - Michal Zobac</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Rose - Jan Mecl Jr</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Rose - Rostyslav Kliucuk</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Vranca - Ladislav Svanda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radek Vranca - Vaclav Pech</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Radim Urbaniec - Roman Hudeczek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Richard Macura - Jaroslav Schwan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Richard Macura - Lukas Kantor</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Roman Hudeczek - Oldrich Vrtal</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Rostislav Niezgoda - Ales Rusnak</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Rostyslav Kliucuk - Michal Jezek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thomas Demek - Bohumil Vozicky</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Tomas Prosa - Tomas Turek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Tomas Turek - Erik Mares</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Tomas Turek - Jiri Nesnera</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Vaclav Pech - Ladislav Svanda</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">WAWROSZ PAVEL - Adam Vitasek</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">WAWROSZ PAVEL - Petr Vicherek</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">MEN Setka Cup (World)</span><span> (25)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Aleksandr Zhirnov - Vladimir Belobrov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Alexandr Mytsyk - Andrey Troyan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Anatolii Nikolenko - Mykola Treshchetka</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Andrii Datsenko - Oleksandr Zhurba</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Andrii Skliarenko - Alexander Seluchenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Artem Trofymchuk - Jaroslav Tebenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bogdan Panchenko - Dmytro Prylepa</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bohdan Pyrtyk - Mykola Treshchetka</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Evgeniy Khurtak - Valentyn Chumak</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gennady Buyanover - Andrey Sydorenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Gennady Buyanover - Dmytro Hrosov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ivan Efimenko - Valeriy Merzlikin</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ivan Krivoi - Oleksandr Maslovskyi</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Maxim Mrykh - Vladimir Belobrov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mykhailo Kravnytskyi - Andrey Guchok</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Mykola Kulynych - Ivan Krivoi</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Myroslav Loboda - Ivan Pytsko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oleksandr Skrypnyk - Anton Tur</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Oleksandr Syksa - Oleg Kurilenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Roman Tveritinov - Bogdan Panchenko</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Valentyn Chumak - Dmytro Hrosov</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Valeriy Merzlikin - Alexey Nadporozhsky</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Vasyl Kondratenko - Daniil Habrelyan</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Victor Evtodiy - Maxim Mrykh</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yurii Parahailo - Arthur Moriak</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport15">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Basketball</span><span> (16)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">MOROCCO League</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">IR Tanger - FUS Rabat</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">WAC Casablanca - MTB Majd</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">PHILIPPINES Preseason Cup</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ateneo de Manila University Blue Eagles - CEU
                                                Scorpions </span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">INDONESIA IBL</span><span> (3)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bumi Borneo Pontianak - Pelita Jaya</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Indonesia Patriots - Bima Perkasa Jogja</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">tangerang hawks - West Bandits Solo</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">EUROPE BNXT League - Play Offs</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Hubo Limburg United - BC Telenet Oostende</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Proximus Spirou Charleroi - Zorg en Zekerheid
                                                Leiden</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">PHILIPPINES MPBL</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Batangas City Athletics - Muntinlupa Cagers</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Pampanga Lanterns - Manila Stars</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">TURKEY Super Lig - Play Offs</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Fenerbahce - Anadolu Efes</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">TURKEY EBBL</span><span> (3)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Igdir - Ege Sportif</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Konya Atayurt - Antalya Kepez Dokuma</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Yesil Mavi Yalovaspor - Haznedar Doruk
                                                Istanbul</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">ITALY Serie A2 - Play Out - Final</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Novipiu Casale Monferrato - Chieti Basket
                                                1974</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">TAIWAN P. League+ - FINAL</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">New Taipei Kings - Fubon Braves</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport18">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Volleyball</span><span> (8)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CZECH REPUBLIC Regional League</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Meteor A - Astra A</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">SC K3 - Meteor Praha B</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">WORLD Nations League</span><span> (4)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Bulgaria - China</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Canada - Cuba</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Italy - Argentina</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Japan - Iran</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">CZECH REPUBLIC Regional League Women</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">DDM 21-22 W - Sokol Brno Komin W</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">hradec kralove b W - Iskra Novy Bydzov W</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport59">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Snooker</span><span> (13)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">WORLD Qualifying School 2</span><span> (13)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Fergal Quinn - Harvey Chandler</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Holoyda D. - Craig Steadman</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Joshua Cooper - Duane Jones</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Michael Holt - Daan Leyssen</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">R. Davies - Keldie K.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">R. Hull - E. Sharav</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">R. Judin - Vincent N.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">R. McLeod - Pragnall G.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Simon Bedford - Bai Yulu</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">U. Dikme - Nussle F.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ullah L. - Pinches L.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Young D. - McAllister S.</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Z. Richardson - Iulian Boiko</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport19">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Ice Hockey</span><span> (1)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">USA NHL - FINAL</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Vegas Golden Knights - Florida Panthers</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport11">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">E Games</span><span> (19)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LEAGUE OF LEGENDS - LPL Summer</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ninjas In Pyjamas - Lgd Gaming</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Thunder Talk Gaming - Anyones Legend</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LEAGUE OF LEGENDS - LPLOL SPRING</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Byteway Esports - EGN Esports</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">FTW - Keypulse Esports</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">DOTA 2 Pro Circuit Season 3 (China)</span><span>
                                          (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Azure Ray - Xtreme Gaming</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Invictus Gaming - Team Aster</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">COUNTER - STRIKE - Polska Liga Esportowa</span><span>
                                          (3)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">lodis - Illuminar</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">M1 Gaming - Turow Zgorzelec</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Ungentium - AGO</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">DOTA 2 Pinnacle Cup (Europe)</span><span> (3)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Betboom Team - Cybercats</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Natus Vincere - Nemiga Gaming</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Virtus.pro - Ex-Monaspa</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LEAGUE OF LEGENDS LCO (Australia)</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Chiefs Esports Club - Team Vertex</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Team Bliss - Dire Wolves</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LEAGUE OF LEGENDS- LCK CL Summer</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">DRX Challengers - Gen.G Challengers</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Kwangdong Freecs Challengers - KT Rolster
                                                Challengers</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">COUNTER-STRIKE Esports Battle</span><span> (2)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Purple haze - sEight</span>
                                          </a>
                                       </li>
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">sEight - Purple haze</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">LEAGUE OF LEGENDS LCK (South Korea)</span><span>
                                          (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">Liiv Sandbox Challengers - dplus challengers</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport9">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Futsal</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport39">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Handball</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport66">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Kabaddi</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport5">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Golf</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport55">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Rugby League</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport6">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Boxing</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport7">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Beach Volleyball</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport3">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Mixed Martial Arts</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport16">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">MotoGP</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport17">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Chess</span><span> (1)</span>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="text-dark">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle">
                                       <span class="ifTooltip">Virtual Cricket League</span><span> (1)</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="#" class="dropdown-item">
                                             <span class="ifTooltip">West Indies T10 v New Zealand T10</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport22">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Badminton</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport29">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Cycling</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport32">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Motorbikes</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport33">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Athletics</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport35">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Basketball 3X3</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport37">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Sumo</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport38">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Virtual sports</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport52">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Motor Sports</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport53">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Baseball</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport54">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Rugby Union</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport57">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Darts</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport58">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">American Football</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport62">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Soccer</span>
                              </a>
                           </li>
                        </ul>
                        <ul class="navbar-nav">
                           <li class="">
                              <a href="javascript:void(0)" class="dropdown-item sport64">
                                 <i class='fas fa-baseball-ball'></i>
                                 <span class="sport-name ifTooltip">Esports</span>
                              </a>
                           </li>
                        </ul>
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Side Bar -->
         <!-- Main -->
         <div class="main-container">
            <header class="header">
               <div class="menu-button-mobile d-none-desktop">
                  <span class="menu-button-bar"></span>
                  <span class="menu-button-bar"></span>
                  <span class="menu-button-bar"></span>
               </div>
               <div class="logo-box d-none-desktop">
                  <div class="logo">
                     <a href="{{url('/')}}" aria-current="page" class="router-link-exact-active router-link-active">
                        <img src="{{asset('NewExchangeTheme/images/logmain.png')}}">
                     </a>
                  </div>
               </div>
               <div class="news-bar d-none-mobile">
                  <marquee>{{ $news->title ?? '' }}
                  </marquee>
                  <div class="news-title">
                     <img src="{{asset('NewExchangeTheme/images/speaker.svg')}}">
                  </div>
               </div>
               <div class="login-box">
                  <a href="{{url('register')}}" class="btn btn-primary"><span class="register-blink">Register</span></a>
                  <a href="{{url('login')}}" class="btn btn-primary"> Login </a>
               </div>
            </header>
            <div class="center-main-content">
               <div class="news-bar d-none-desktop">
                  <marquee>{{ $news->title ?? '' }}
                  </marquee>
                  <div class="news-title"><img src="{{asset('NewExchangeTheme/images/speaker.svg')}}"></div>
               </div>
               <div class="upcoming-fixure d-none-desktop">
                  <div class="w-100">
                     <div class="menu-title">Upcoming Fixure</div>
                     <section tabindex="0" class="hooper is-vertical">
                        <div class="hooper-list">
                           <div class="upcoming-slider-mobile hooper-track">
                              <div class="item hooper-slide">
                                 <a href="" class="">
                                    <div class="fixure-box">
                                       <div>
                                          <i class='fas fa-baseball-ball'></i> Essex v Sussex
                                       </div>
                                       <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                                    </div>
                                 </a>
                              </div>
                              <div class="item hooper-slide">
                                 <a href="" class="">
                                    <div class="fixure-box">
                                       <div>
                                          <i class='fas fa-baseball-ball'></i> Essex v Sussex
                                       </div>
                                       <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                                    </div>
                                 </a>
                              </div>
                              <div class="item hooper-slide">
                                 <a href="" class="">
                                    <div class="fixure-box">
                                       <div>
                                          <i class='fas fa-baseball-ball'></i> Essex v Sussex
                                       </div>
                                       <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                                    </div>
                                 </a>
                              </div>
                              <div class="item hooper-slide">
                                 <a href="" class="">
                                    <div class="fixure-box">
                                       <div>
                                          <i class='fas fa-baseball-ball'></i> Essex v Sussex
                                       </div>
                                       <div>06/06/2023 23:00:00 (UTC+05:30)</div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
               <!-- MObile Menu Pending -->
               <div class="point-menu d-none-desktop">
                  <div class="menu-box">
                     <div class="sports-list-content">
                        <div class="all-menu">
                           <span mode="out-in">
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport40">
                                       <i class='fas fa-baseball-ball'></i><span
                                          class="sport-name ifTooltip">Politics</span> <span>
                                          (1)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">Assembly Election 2023</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Assembly
                                                      Election
                                                      2023</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport4">
                                       <i class='fas fa-baseball-ball'></i></i> <span
                                          class="sport-name ifTooltip">Cricket</span>
                                       <span>
                                          (11)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">Virtual Cricket League</span> <span> (3)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bangladesh T10
                                                      v Australia
                                                      T10</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">West Indies
                                                      T10 v India
                                                      T10</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">West Indies
                                                      T10 v Sri Lanka
                                                      T10</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">Balla Bol</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Daring Dozens
                                                      v Golden
                                                      Horses</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Panthers v
                                                      PerFormers</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">One Day Internationals</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sri Lanka v
                                                      Afghanistan</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">UAE v West
                                                      Indies</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">T10 XI</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Adelaide
                                                      Strikers XI v Hobart
                                                      Hurricanes
                                                      XI</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">Test Matches</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Australia v
                                                      India</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">T5 XI</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">TKR XI v SNP
                                                      XI</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">T20 Blast</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Leicestershire
                                                      v
                                                      Yorkshire</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport1">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Football</span> <span>
                                          (66)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">URUGUAY Reserve League</span> <span> (3)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">danubio ii
                                                      Reserve - Liverpool
                                                      Montevideo Ii</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">montevideo
                                                      wanderers ii
                                                      Reserve -
                                                      Defensor Sporting Ii</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">River Plate
                                                      Montevideo II -
                                                      Club Plaza
                                                      Colonia de Deportes II</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">AUSTRIA Bundesliga</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Wolfsberger AC
                                                      v SC Austria
                                                      Lustenau</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">MALI Premiere Division</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">US Bougouba -
                                                      Afrique Football
                                                      Elite</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">NORWAY Division 3</span> <span> (7)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Askollen -
                                                      Start 2</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Frigg -
                                                      Lokomotiv
                                                      Oslo</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Grorud 2 -
                                                      Ullern 2</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Madla -
                                                      Vidar</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sandefjord 2 -
                                                      Pors
                                                      Grenland</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sprint-Jeloy -
                                                      Odd
                                                      II</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Vindbjart -
                                                      Fredrikstad
                                                      2</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">IRELAND Premier Division</span> <span> (5)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Cork City v
                                                      Bohemians</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dundalk v
                                                      UCD</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Shelbourne v
                                                      Drogheda</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sligo Rovers v
                                                      Shamrock
                                                      Rovers</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">St Patricks v
                                                      Derry
                                                      City</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">MYANMAR League 2</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mawyawadi -
                                                      Rakhapura
                                                      United</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Thitsar Arman
                                                      - Shwe Pyi
                                                      Thar</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">BRAZIL Serie A</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Vasco da Gama
                                                      v
                                                      Flamengo</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">VIETNAM V.League 1</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Shb Da Nang v
                                                      Binh
                                                      Duong</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">UEFA - Champions League</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">UEFA -
                                                      Champions League -
                                                      Winner
                                                      2022/23</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">COLOMBIA Regional League</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">FC Leones
                                                      Reserves - Soccer
                                                      Law</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ferrovalvulas
                                                      FC -
                                                      Lula</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">BRAZIL Brasileiro Women</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Santos W -
                                                      Bahia W</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ARMENIA Premier League</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">BKMA Yerevan -
                                                      FC
                                                      Ararat-Armenia</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Lernayin
                                                      Artsakh fc - FC
                                                      Shirak</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">MYANMAR National League</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Kachin United
                                                      - GFA
                                                      Chinland</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">FINLAND Kakkonen</span> <span> (5)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ilves-Kissat -
                                                      Atlantis
                                                      FC</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">JS Hercules -
                                                      RoPS
                                                      Rovaniemi</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Kuopion Elo
                                                      1919 -
                                                      FCV</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">NJS Nurmijarvi
                                                      - Klubi
                                                      04</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">PK K-U - PK-35
                                                      Helsinki
                                                   </span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">SWEDEN Allsvenskan</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Malmo FF v
                                                      Degerfors</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Varbergs BoIS
                                                      v
                                                      Hacken</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">SWEDEN Superettan</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Skovde Aik v
                                                      AFC
                                                      Eskilstuna</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Trelleborgs v
                                                      IK
                                                      Brage</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LATVIA Optibet Virsliga</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">BFC Daugavpils
                                                      - FK
                                                      Liepaja</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">FS Jelgava -
                                                      Valmiera
                                                      FC</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CHINA Yi League</span> <span> (4)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Guangxi
                                                      Lanhang - Yunnan
                                                      Yukun</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Quanzhou Yaxin
                                                      - Jiangxi Dark
                                                      Horse</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Wuhan
                                                      Jiangcheng - Taian
                                                      Tiankuang</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Zibo Qisheng -
                                                      Dalian
                                                      Zhixing</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">BULGARIA Parva liga</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hebar -
                                                      Beroe</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">IVORY COAST Ligue 1</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">San Pedro FC -
                                                      AFAD
                                                      Djekanou</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LITHUANIA I Lyga</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Zalgiris II -
                                                      FA Siauliai
                                                      ll</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ICELAND ICELANDIC CUP - QUARTER-FINALS</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Breidablik v
                                                      Hafnarfjordur</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Thor v
                                                      Vikingur
                                                      Reykjavik</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">GERMANY BUNDESLIGA - RELEGATION - FINAL</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hamburger SV v
                                                      Stuttgart</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">GERMANY 2. BUNDESLIGA - RELEGATION - FINAL</span>
                                             <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Arminia
                                                      Bielefeld v Wehen
                                                      Wiesbaden</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">GEORGIA Crystalbet Erovnuli Liga</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">FC Dinamo
                                                      Batumi - FC
                                                      Saburtalo</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Torpedo
                                                      Kutaisi - FC Dila
                                                      Gori</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ZIMBABWE Premier Soccer League</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Yadah - Ngezi
                                                      Platinum
                                                      FC</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">KOSOVO Kosovar Cup</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gjilani - FC
                                                      Prishtina</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">URUGUAY Primera Division</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Deportivo
                                                      Maldonado v Centro
                                                      Atletico
                                                      Fenix</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Torque v
                                                      Defensor
                                                      Sporting</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">GREECE Super League 2</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Makedonikos v
                                                      Diagoras</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">EUROPE EUROPA CONFERENCE LEAGUE - FINAL</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Fiorentina v
                                                      West
                                                      Ham</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">NORWAY Division 2</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Brann 2 -
                                                      Tromsdalen</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">SWEDEN Allsvenskan Women</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">IF
                                                      Brommapojkarna W -
                                                      Djurgardens IF FF
                                                      W</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ARGENTINA Liga Profesional</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">River Plate v
                                                      Defensa y
                                                      Justicia</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">IRELAND Division 1</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Cobh Ramblers
                                                      - Longford
                                                      Town</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ECUADOR Liga Pro</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Deportivo
                                                      Cuenca v
                                                      Delfin</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ITALY Primavera 1</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Lecce U19 -
                                                      Sassuolo
                                                      U19</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">EGYPT Premier League</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Zamalek v Al
                                                      Ittihad
                                                      (EGY)</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">SWEDEN Division 1</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Eskilsminne IF
                                                      - Angelholms
                                                      FF</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport2">
                                       <i class='fas fa-baseball-ball'></i><span
                                          class="sport-name ifTooltip">Tennis</span> <span>
                                          (75)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ATP- DOUBLES FRENCH OPEN (FRANCE) -
                                                QUARTER-FINALS</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gille/Vliegen
                                                      v
                                                      Gonzalez/Molteni</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Middelkoop/Mies v
                                                      Arevalo/Rojer</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CHALLENGER MEN- SINGLES Prostejov (Czech
                                                Republic)</span> <span>
                                                (12)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bagnis v
                                                      Geerts</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Burruchaga v
                                                      Marchenko</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Darderi v
                                                      Svrcina</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Em Nava v
                                                      Kolar</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ma Valkusz v
                                                      Vrbensky</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Martin Tiffon
                                                      v
                                                      Lavagno</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mayot v
                                                      Coria</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mpetshi
                                                      Perricard v
                                                      Guinard</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Pokorny v
                                                      Kuzmanov</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Pucinelli De
                                                      Almeida v Vi
                                                      Sachko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sakamoto v Hy
                                                      Barton</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sels v
                                                      Navone</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ITF WOMEN - SINGLES W80 Rancho Santa Fe, CA
                                                (USA)</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Fangran Tian -
                                                      Emily
                                                      Gelber</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">UTR PRO TENIS SERIES HILVERSUM</span> <span>
                                                (8)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Aloys Van Baal
                                                      - Roland
                                                      Stuurman</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Arthur Van Der
                                                      Kooij - Stijn
                                                      Pel</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bredschneijder
                                                      O - Twan Van
                                                      Zijl</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Guy Den Heijer
                                                      - Ivan
                                                      Sergeyev</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jip Van
                                                      Assendelft - Mika
                                                      Berghaus</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Karim Al-amin
                                                      - Alexander
                                                      Maarten
                                                      Jong</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Pepijn
                                                      Bastiaansen - Masato
                                                      Perera</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Victor Sklenka
                                                      - Julian
                                                      Cundom</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CHALLENGER MEN - SINGLES Heilbronn (Germany)</span>
                                             <span>
                                                (12)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Arnaboldi v Je
                                                      Kym</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Casanova v
                                                      Marozsan</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dellien v
                                                      Munar</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dzumhur v
                                                      Skatov</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Fanselow v Vla
                                                      Orlov</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Galan v
                                                      Ilkel</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gavrielides v
                                                      Santillan</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Henri Squire v
                                                      Moraing</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Kovalik v
                                                      Marterer</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Lu Gerch v
                                                      Janvier</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ol Krutykh v
                                                      Ma
                                                      Topo</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">T Stodder v
                                                      Max
                                                      Rehberg</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">WTA - DOUBLES FRENCH OPEN (FRANCE)</span> <span>
                                                (4)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Chan/Chan v
                                                      Cornet/Parry</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Dabrowski/Stefani v
                                                      Fernandez/Townsend</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hsieh/Wang v
                                                      Krawczyk/Schuurs</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sanders/Mertens v
                                                      Kudermetova/Samsonova</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CHALLENGER MEN - SINGLES Surbiton (United
                                                Kingdom)</span> <span>
                                                (11)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">B Harris v
                                                      Svajda</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Clarke v
                                                      Saville</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Cox v Ar
                                                      Fery</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Herbert v
                                                      Wendelken</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hy Chung v
                                                      Murray</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Kubler v
                                                      Brouwer</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mar Whitehouse
                                                      v Ja
                                                      Mccabe</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">OConnell v
                                                      Kudla</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Purcell v Ziz
                                                      Bergs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Vesely v Ry
                                                      Peniston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Yunchaokete v
                                                      Ab
                                                      Shelbayh</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">UTR PRO TENNIS SERIES HILVERSUM WOMEN</span> <span>
                                                (7)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Anastasiya K
                                                      Soboleva - Klara
                                                      Veldman</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Annika Barth -
                                                      Lian
                                                      Tran</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dilara Okur -
                                                      Judith Van
                                                      Kessel</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ena Kajevic -
                                                      Sarah Van
                                                      Emst</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Katrin pavkova
                                                      - Denisa
                                                      Pospisilova</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Melissa Boyden
                                                      - Rose Marie
                                                      Nijkamp</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sarah Olff -
                                                      Demi
                                                      Tran</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ATP - SINGLES FRENCH OPEN (FRANCE)</span> <span>
                                                (4)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dimitrov v A
                                                      Zverev</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hol Rune v
                                                      Cerundolo</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jarry v
                                                      Ruud</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">To Etcheverry
                                                      v
                                                      Nishioka</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ITF MEN - SINGLES M15 Daegu (South Korea)</span>
                                             <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Kenta Miyoshi
                                                      - Suk
                                                      Ann</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Min-Kyu Song -
                                                      Jesse
                                                      Delaney</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">WTA - SINGLES FRENCH OPEN (FRANCE)</span> <span>
                                                (4)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">I Swiatek v
                                                      Tsurenko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Karolina
                                                      Schmiedlova v
                                                      Gauff</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Pera v O
                                                      Jabeur</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Sorribes Tormo
                                                      v B Haddad
                                                      Maia</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ITF MEN - SINGLES M15 Karuizawa (Japan)</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">SanHui Shin -
                                                      Tatsuma
                                                      Ito</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ITF MEN - SINGLES M25 Jakarta (Indonesia)</span>
                                             <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Renaldi A A
                                                      Salim - Shivank
                                                      Bhatnagar</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CHALLENGER WOMEN-SINGLES La Bisbal D
                                                Emporda(Spain</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">And Prisacariu
                                                      v And
                                                      Gamiz</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mateas v Luci
                                                      Cortez
                                                      Llorca</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">UTR PRO TENNIS SERIES FLORIDA WOMEN</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hayley Roberts
                                                      - Sophie
                                                      Llewellyn</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Marianne
                                                      Argyrokastriti -
                                                      Annabel
                                                      Davis</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">French Open Women 2023</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">French Open
                                                      Women 2023 - To
                                                      Win
                                                      Outright</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">French Open Men 2023</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">French Open
                                                      Men 2023 - To Win
                                                      Outright</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport10">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Horse
                                          Racing</span>
                                       <span>
                                          (83)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">FR</span> <span> (16)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-15:00:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-15:30:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-16:00:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-16:30:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-17:00:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-17:35:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-18:10:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Chateaubriant-18:45:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-19:55:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-20:30:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-21:05:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-21:47:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-22:22:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-22:55:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-23:25:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">La Teste De
                                                      Buch-23:55:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">IE</span> <span> (14)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-18:35:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-19:07:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-19:37:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-20:07:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-20:37:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-21:07:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gowran
                                                      Park-21:37:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-18:50:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-19:20:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-19:50:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-20:20:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-20:50:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-21:20:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Listowel-21:50:00
                                                      05/06/2023</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">GB</span> <span> (29)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-18:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-19:15:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-19:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-20:15:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-20:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-21:15:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ayr-21:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-19:00:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-19:30:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-20:00:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-20:30:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-21:00:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-21:30:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Thirsk-22:05:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-00:15:00
                                                      06/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-00:45:00
                                                      06/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-01:15:00
                                                      06/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-22:15:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-22:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-23:15:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Windsor-23:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-00:00:00
                                                      06/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-00:30:00
                                                      06/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-01:00:00
                                                      06/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-01:30:00
                                                      06/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-22:00:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-22:30:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-23:00:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Wolverhampton-23:30:00
                                                      05/06/2023</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ZA</span> <span> (8)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-15:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-16:20:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-16:55:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-17:30:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-18:05:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-18:40:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-19:20:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Greyville-19:55:00
                                                      05/06/2023</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">AU</span> <span> (15)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-13:23:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-13:54:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-14:25:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-14:53:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-15:21:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-15:49:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-16:17:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-16:45:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Canberra-17:13:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Newcastle-13:47:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam-13:24:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam-14:01:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Pinjarra-13:02:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Pinjarra-13:37:00
                                                      05/06/2023</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Pinjarra-14:12:00
                                                      05/06/2023</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">IN</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Test
                                                      Event-17:00:00
                                                      31/05/2023</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport65">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Greyhound
                                          Racing</span>
                                       <span> (235)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">GB</span> <span> (154)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Central
                                                      Park</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Doncaster</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Kinsley</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Monmore</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nottingham</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Oxford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Perry
                                                      Barr</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Romford</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Sheffield</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Suffolk
                                                      Downs</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Swindon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Towcester</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Yarmouth</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">AU</span> <span> (81)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Albion
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Angle
                                                      Park</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Ballarat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Launceston</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Maitland</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Northam</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Nowra</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Temora</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Temora</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Traralgon</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Warrnambool</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Warrnambool</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span
                                                      class="ifTooltip">Warrnambool</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport8">
                                       <i class='fas fa-baseball-ball'></i><span class="sport-name ifTooltip">Table
                                          Tennis</span>
                                       <span>
                                          (107)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CZECH Liga Pro</span> <span> (82)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Adam Vitasek -
                                                      Martin
                                                      Biolek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ales Rusnak -
                                                      Filip
                                                      Sikora</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bohumil
                                                      Vozicky - David
                                                      Stepanek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Cesta Havrda -
                                                      Martin
                                                      Nypl</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Daniel Tuma -
                                                      Josef
                                                      Grill</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Daniel Tuma -
                                                      Lukas
                                                      Rygl</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dominik Lengal
                                                      - Michal
                                                      Zobac</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Dominik Lengal
                                                      - Radek
                                                      Krcal</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Erik Mares -
                                                      Jiri
                                                      Nesnera</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Erik Mares -
                                                      Tomas
                                                      Prosa</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Filip Dusil -
                                                      Jan Manhal
                                                      Junior</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Filip Sikora -
                                                      Jan
                                                      Dzida</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Filip Sikora -
                                                      Rostislav
                                                      Niezgoda</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Frantisek
                                                      Kanta - Thomas
                                                      Demek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Dzida -
                                                      Ales
                                                      Rusnak</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Dzida -
                                                      Rostislav
                                                      Niezgoda</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Lovl -
                                                      Filip
                                                      Dusil</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Lovl -
                                                      Radek
                                                      Fnukal</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Manhal
                                                      Junior - Jan
                                                      Lovl</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Mecl Jr -
                                                      Michal
                                                      Jezek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Mecl Jr -
                                                      Rostyslav
                                                      Kliucuk</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Sucharda -
                                                      Jiri
                                                      Pozarsky</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Sucharda -
                                                      Patrik
                                                      Pycha</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Varcl SR.
                                                      - Cesta
                                                      Havrda</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Varcl SR.
                                                      - Jaroslav
                                                      Strnad
                                                      1961</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Vidourek -
                                                      Radek
                                                      Vranca</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jan Vidourek -
                                                      Vaclav
                                                      Pech</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jaroslav
                                                      Novotny - Daniel
                                                      Tuma</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jaroslav
                                                      Novotny - Lukas
                                                      Rygl</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jaroslav
                                                      Schwan - Lukas
                                                      Kantor</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jaroslav
                                                      Strnad 1961 - Cesta
                                                      Havrda</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jaroslav
                                                      Strnad 1961 - Martin
                                                      Nypl</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jiri Machart -
                                                      Petr
                                                      Monik</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jiri Nesnera -
                                                      Tomas
                                                      Prosa</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jiri Pozarsky
                                                      - Martin
                                                      Sobisek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jiri Pozarsky
                                                      - Patrik
                                                      Pycha</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Josef Grill -
                                                      Jaroslav
                                                      Novotny</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Jozef Denez -
                                                      Oskar
                                                      Spacek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Karel Filip -
                                                      Dominik
                                                      Lengal</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ladislav
                                                      Svanda - Jan
                                                      Vidourek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Lukas Kantor -
                                                      Martin
                                                      Pavliska</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Lukas Rygl -
                                                      Josef
                                                      Grill</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Lukas Tonar -
                                                      Vladimir
                                                      Havlicek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Martin Biolek
                                                      - WAWROSZ
                                                      PAVEL</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Martin Nypl -
                                                      Jan Varcl
                                                      SR.</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Martin
                                                      Pavliska - Jaroslav
                                                      Schwan</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Martin
                                                      Pavliska - Richard
                                                      Macura</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Martin Sobisek
                                                      - Jan
                                                      Sucharda</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Matej Pycha -
                                                      Jozef
                                                      Denez</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Matej Pycha -
                                                      Miroslav
                                                      Antos</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Michal Jezek -
                                                      Radek
                                                      Rose</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Michal Zobac -
                                                      Karel
                                                      Filip</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Miroslav Antos
                                                      - Jozef
                                                      Denez</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Oldrich Vrtal
                                                      - David
                                                      Szotek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Oskar Spacek -
                                                      Matej
                                                      Pycha</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Oskar Spacek -
                                                      Miroslav
                                                      Antos</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Patrik Pycha -
                                                      Martin
                                                      Sobisek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Patrik Pycha -
                                                      Martin
                                                      Sobisek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Petr Monik -
                                                      Jiri
                                                      Reczai</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Petr Vicherek
                                                      - Adam
                                                      Vitasek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Petr Vicherek
                                                      - Martin
                                                      Biolek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Fnukal -
                                                      Filip
                                                      Dusil</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Fnukal -
                                                      Jan Manhal
                                                      Junior</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Krcal -
                                                      Karel
                                                      Filip</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Krcal -
                                                      Michal
                                                      Zobac</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Rose -
                                                      Jan Mecl
                                                      Jr</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Rose -
                                                      Rostyslav
                                                      Kliucuk</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Vranca -
                                                      Ladislav
                                                      Svanda</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radek Vranca -
                                                      Vaclav
                                                      Pech</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Radim Urbaniec
                                                      - Roman
                                                      Hudeczek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Richard Macura
                                                      - Jaroslav
                                                      Schwan</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Richard Macura
                                                      - Lukas
                                                      Kantor</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Roman Hudeczek
                                                      - Oldrich
                                                      Vrtal</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Rostislav
                                                      Niezgoda - Ales
                                                      Rusnak</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Rostyslav
                                                      Kliucuk - Michal
                                                      Jezek</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Thomas Demek -
                                                      Bohumil
                                                      Vozicky</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Tomas Prosa -
                                                      Tomas
                                                      Turek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Tomas Turek -
                                                      Erik
                                                      Mares</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Tomas Turek -
                                                      Jiri
                                                      Nesnera</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Vaclav Pech -
                                                      Ladislav
                                                      Svanda</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">WAWROSZ PAVEL
                                                      - Adam
                                                      Vitasek</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">WAWROSZ PAVEL
                                                      - Petr
                                                      Vicherek</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">MEN Setka Cup (World)</span> <span> (25)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Aleksandr
                                                      Zhirnov - Vladimir
                                                      Belobrov</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Alexandr
                                                      Mytsyk - Andrey
                                                      Troyan</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Anatolii
                                                      Nikolenko - Mykola
                                                      Treshchetka</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Andrii
                                                      Datsenko - Oleksandr
                                                      Zhurba</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Andrii
                                                      Skliarenko - Alexander
                                                      Seluchenko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Artem
                                                      Trofymchuk - Jaroslav
                                                      Tebenko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bogdan
                                                      Panchenko - Dmytro
                                                      Prylepa</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bohdan Pyrtyk
                                                      - Mykola
                                                      Treshchetka</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Evgeniy
                                                      Khurtak - Valentyn
                                                      Chumak</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gennady
                                                      Buyanover - Andrey
                                                      Sydorenko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Gennady
                                                      Buyanover - Dmytro
                                                      Hrosov</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ivan Efimenko
                                                      - Valeriy
                                                      Merzlikin</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ivan Krivoi -
                                                      Oleksandr
                                                      Maslovskyi</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Maxim Mrykh -
                                                      Vladimir
                                                      Belobrov</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mykhailo
                                                      Kravnytskyi - Andrey
                                                      Guchok</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Mykola
                                                      Kulynych - Ivan
                                                      Krivoi</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Myroslav
                                                      Loboda - Ivan
                                                      Pytsko</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Oleksandr
                                                      Skrypnyk - Anton
                                                      Tur</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Oleksandr
                                                      Syksa - Oleg
                                                      Kurilenko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Roman
                                                      Tveritinov - Bogdan
                                                      Panchenko</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Valentyn
                                                      Chumak - Dmytro
                                                      Hrosov</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Valeriy
                                                      Merzlikin - Alexey
                                                      Nadporozhsky</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Vasyl
                                                      Kondratenko - Daniil
                                                      Habrelyan</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Victor Evtodiy
                                                      - Maxim
                                                      Mrykh</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Yurii
                                                      Parahailo - Arthur
                                                      Moriak</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport15">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Basketball</span>
                                       <span>
                                          (16)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">MOROCCO League</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">IR Tanger -
                                                      FUS
                                                      Rabat</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">WAC Casablanca
                                                      - MTB
                                                      Majd</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">PHILIPPINES Preseason Cup</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ateneo de
                                                      Manila University
                                                      Blue Eagles
                                                      - CEU Scorpions </span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">INDONESIA IBL</span> <span> (3)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bumi Borneo
                                                      Pontianak - Pelita
                                                      Jaya</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Indonesia
                                                      Patriots - Bima
                                                      Perkasa
                                                      Jogja</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">tangerang
                                                      hawks - West Bandits
                                                      Solo</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">EUROPE BNXT League - Play Offs</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Hubo Limburg
                                                      United - BC
                                                      Telenet
                                                      Oostende</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Proximus
                                                      Spirou Charleroi -
                                                      Zorg en
                                                      Zekerheid Leiden</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">PHILIPPINES MPBL</span> <span> (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Batangas City
                                                      Athletics -
                                                      Muntinlupa
                                                      Cagers</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Pampanga
                                                      Lanterns - Manila
                                                      Stars</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">TURKEY Super Lig - Play Offs</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Fenerbahce -
                                                      Anadolu
                                                      Efes</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">TURKEY EBBL</span> <span> (3)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Igdir - Ege
                                                      Sportif</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Konya Atayurt
                                                      - Antalya Kepez
                                                      Dokuma</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Yesil Mavi
                                                      Yalovaspor -
                                                      Haznedar Doruk
                                                      Istanbul</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">ITALY Serie A2 - Play Out - Final</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Novipiu Casale
                                                      Monferrato -
                                                      Chieti
                                                      Basket 1974</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">TAIWAN P. League+ - FINAL</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">New Taipei
                                                      Kings - Fubon
                                                      Braves</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport18">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Volleyball</span>
                                       <span>
                                          (8)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CZECH REPUBLIC Regional League</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Meteor A -
                                                      Astra A</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">SC K3 - Meteor
                                                      Praha
                                                      B</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">WORLD Nations League</span> <span> (4)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Bulgaria -
                                                      China</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Canada -
                                                      Cuba</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Italy -
                                                      Argentina</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Japan -
                                                      Iran</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">CZECH REPUBLIC Regional League Women</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">DDM 21-22 W -
                                                      Sokol Brno Komin
                                                      W</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">hradec kralove
                                                      b W - Iskra
                                                      Novy Bydzov
                                                      W</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport59">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Snooker</span> <span>
                                          (13)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">WORLD Qualifying School 2</span> <span>
                                                (13)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Fergal Quinn -
                                                      Harvey
                                                      Chandler</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Holoyda D. -
                                                      Craig
                                                      Steadman</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Joshua Cooper
                                                      - Duane
                                                      Jones</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Michael Holt -
                                                      Daan
                                                      Leyssen</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">R. Davies -
                                                      Keldie
                                                      K.</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">R. Hull - E.
                                                      Sharav</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">R. Judin -
                                                      Vincent
                                                      N.</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">R. McLeod -
                                                      Pragnall
                                                      G.</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Simon Bedford
                                                      - Bai
                                                      Yulu</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">U. Dikme -
                                                      Nussle
                                                      F.</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ullah L. -
                                                      Pinches
                                                      L.</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Young D. -
                                                      McAllister
                                                      S.</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Z. Richardson
                                                      - Iulian
                                                      Boiko</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport19">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Ice
                                          Hockey</span>
                                       <span>
                                          (1)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">USA NHL - FINAL</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Vegas Golden
                                                      Knights - Florida
                                                      Panthers</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport11">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">E
                                          Games</span> <span>
                                          (19)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LEAGUE OF LEGENDS - LPL Summer</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ninjas In
                                                      Pyjamas - Lgd
                                                      Gaming</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Thunder Talk
                                                      Gaming - Anyones
                                                      Legend</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LEAGUE OF LEGENDS - LPLOL SPRING</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Byteway
                                                      Esports - EGN
                                                      Esports</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">FTW - Keypulse
                                                      Esports</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">DOTA 2 Pro Circuit Season 3 (China)</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Azure Ray -
                                                      Xtreme
                                                      Gaming</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Invictus
                                                      Gaming - Team
                                                      Aster</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">COUNTER - STRIKE - Polska Liga Esportowa</span> <span>
                                                (3)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">lodis -
                                                      Illuminar</span></a>
                                                <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">M1 Gaming -
                                                      Turow
                                                      Zgorzelec</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Ungentium -
                                                      AGO</span></a>
                                                <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">DOTA 2 Pinnacle Cup (Europe)</span> <span>
                                                (3)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Betboom Team -
                                                      Cybercats</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Natus Vincere
                                                      - Nemiga
                                                      Gaming</span></a>
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Virtus.pro -
                                                      Ex-Monaspa</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LEAGUE OF LEGENDS LCO (Australia)</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Chiefs Esports
                                                      Club - Team
                                                      Vertex</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Team Bliss -
                                                      Dire
                                                      Wolves</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LEAGUE OF LEGENDS- LCK CL Summer</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">DRX
                                                      Challengers - Gen.G
                                                      Challengers</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Kwangdong
                                                      Freecs Challengers -
                                                      KT
                                                      Rolster Challengers</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">COUNTER-STRIKE Esports Battle</span> <span>
                                                (2)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Purple haze -
                                                      sEight</span></a> <!---->
                                             </li>
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">sEight -
                                                      Purple
                                                      haze</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">LEAGUE OF LEGENDS LCK (South Korea)</span> <span>
                                                (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">Liiv Sandbox
                                                      Challengers -
                                                      dplus
                                                      challengers</span></a> <!---->
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport9">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Futsal</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport39">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Handball</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport66">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Kabaddi</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport5">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Golf</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport55">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Rugby
                                          League</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport6">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Boxing</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport7">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Beach
                                          Volleyball</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport3">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Mixed
                                          Martial
                                          Arts</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport16">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">MotoGP</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item dropdown-toggle sport17">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Chess</span> <span>
                                          (1)</span></a>
                                    <ul class="dropdown-menu">
                                       <li class="text-dark">
                                          <a href="javascript:void(0)" class="dropdown-item dropdown-toggle"><span
                                                class="ifTooltip">Virtual Cricket League</span> <span> (1)</span></a>
                                          <ul class="dropdown-menu">
                                             <li class="text-dark">
                                                <a href="#" class="dropdown-item"><span class="ifTooltip">West Indies
                                                      T10 v New Zealand
                                                      T10</span></a>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport22">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Badminton</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport29">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Cycling</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport32">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Motorbikes</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport33">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Athletics</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport35">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Basketball 3X3</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport37">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Sumo</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport38">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Virtual
                                          sports</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport52">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Motor
                                          Sports</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport53">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Baseball</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport54">
                                       <i class='fas fa-baseball-ball'></i> <span class="sport-name ifTooltip">Rugby
                                          Union</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport57">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Darts</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport58">
                                       <i class='fas fa-baseball-ball'></i><span class="sport-name ifTooltip">American
                                          Football</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport62">
                                       <i class='fas fa-baseball-ball'></i> <span
                                          class="sport-name ifTooltip">Soccer</span>
                                    </a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="">
                                    <a href="javascript:void(0)" class="dropdown-item sport64">
                                       <i class='fas fa-baseball-ball'></i><span
                                          class="sport-name ifTooltip">Esports</span>
                                    </a>
                                 </li>
                              </ul>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- MObile Menu Pending -->
               <div class="center-container">
                  <div>
                     <div class="home-container">
                        <div class="point-middle">
                           <!-- Banner Slider -->
                           <div class="carousel slide banner-slider">
                              <div class="owl-carousel owl-theme" id="banner-slider">
                                 @foreach($images as $item)
                                 @if ($item->category == 'banner')
                                 <div class="item  carousel-item carousal-23">
                                    <img src="{{ asset('storage/Banners/' . $item->filename) }}">
                                 </div>
                                 @endif
                                 @endforeach
                              </div>
                           </div>

                           <div class="w-100">

                              <div class="modal-login-new" style="margin-top: 50px;">
                                 <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                       <div class="modal-header" style="justify-content: center;">
                                          <h5>Register</h5>
                                           <button type="button" class="close" data-dismiss="modal"><img src="{{asset('NewExchangeTheme/images/close.svg')}}"></button> 
                                       </div>
                                       <div class="modal-body">
                                          <form autocomplete="off" class="login-form mt-0" style="max-width: 100%;">
                                             <div class="register-fields">
                                                <div class="form-group regi-half">
                                                   <label class="user-email-text">Username *</label>
                                                   <input type="text" placeholder="Enter Username" class="form-control">
                                                </div>
                                                <div class="form-group regi-half">
                                                   <label class="user-email-text">Phone Number *</label>
                                                   <!-- <input type="number" placeholder="Phone Number *" class="form-control"> -->
                                                   <input id="countryphone" name="phone" placeholder="Phone Number *"
                                                      type="tel" class="form-control">
                                                </div>
                                                <div class="form-group regi-half">
                                                   <label class="user-email-text">New Password *</label>
                                                   <input type="password" placeholder="New Password"
                                                      class="form-control">
                                                </div>
                                                <div class="form-group regi-half">
                                                   <label class="user-email-text">Confirm Password *</label>
                                                   <input type="password" placeholder="Confirm Password"
                                                      class="form-control">
                                                </div>
                                                <div class="form-group regi-half">
                                                   <label class="user-email-text">Referrer Code</label>
                                                   <input type="text" placeholder="Enter Referrer Code"
                                                      class="form-control">
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div class="custom-control custom-checkbox d-inline-block">
                                                   <input type="checkbox" id="customCheck" name="example1"
                                                      class="custom-control-input">
                                                   <label for="customCheck" class="custom-control-label">I am at least
                                                      <a href="javascript:void(0)" class="text-danger" role="button">18
                                                         years</a> of age and I have read, accept and agree to
                                                      the <a href="#" class="" target="_blank">Terms and Conditions
                                                      </a>, <a href="#" class="" target="_blank">Responsible Gaming
                                                      </a>,
                                                      <a href="#" target="_blank">GamCare</a>, <a href="#"
                                                         target="_blank">Gambling Therapy</a>
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <button type="button" class="btn btn-primary btn-block"
                                                   disabled="disabled"> Register </button>
                                             </div>
                                             <small class="recaptchaTerms"> This site is protected by reCAPTCHA and the
                                                Google <a href="#">Privacy
                                                   Policy</a> and <a href="#">Terms of Service</a> apply. </small>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>

                           <footer class="footer">
                              <div class="support">
                                 <div>
                                    <div class="w-100 text-center"><b>24X7 Support</b></div>
                                    <div class="text-center w-100"><span>https://wa.me/0000000000</span></div>
                                 </div>
                                 <div class="footer-social">
                                    <a href="https://wa.me/0000000000" target="_blank"><img
                                          src="{{asset('NewExchangeTheme/images/whatsapp.png')}}"></a>
                                    <a href="https://www.facebook.com/" target="_blank"><img
                                          src="{{asset('NewExchangeTheme/images/facebookico.png')}}"></a>
                                    <a href="https://instagram.com/" target="_blank"><img
                                          src="{{asset('NewExchangeTheme/images/instagramico.png')}}"></a>
                                    <a href="https://t.me/" target="_blank"><img src="{{asset('NewExchangeTheme/images/telegram.png')}}"></a>
                                    <a href="https://twitter.com/" target="_blank"><img src="{{asset('NewExchangeTheme/images/twitter.png')}}"></a>
                                    <a href="https://www.youtube.com/" target="_blank"><img
                                          src="{{asset('NewExchangeTheme/images/youtubeico.png')}}"></a>
                                    <a href="#" target="_blank"><img src="{{asset('NewExchangeTheme/images/news.png')}}"></a>
                                 </div>
                              </div>
                              <div class="footer-menu">
                                 <ul>
                                    <li><a href="#" class="" target="_blank">About Us</a></li>
                                    <li><a href="#" class="" target="_blank">Terms and Conditions</a></li>
                                    <li><a href="#" class="" target="_blank">Responsible Gaming</a></li>
                                    <li><a href="#" class="" target="_blank">AML Policy</a></li>
                                    <li><a href="#" class="" target="_blank">KYC Policy</a></li>
                                 </ul>
                              </div>
                              <div class="footer-box">
                                 <div class="footer-top">
                                    <div class="secure-logo">
                                       <div>
                                          <img src="{{asset('NewExchangeTheme/images/ssl.png')}}">
                                       </div>
                                       <div class="ml-2">
                                          <b>100% SAFE</b>
                                          <div>Protected connection and encrypted data.</div>
                                       </div>
                                    </div>
                                    <div class="d-inline-block footer-other">
                                       <a href="javascript:void(0)" role="button" data-toggle="modal"
                                          data-target="#modal-18plusModal">
                                          <img src="{{asset('NewExchangeTheme/images/18plus.png')}}">
                                       </a>
                                       <a href="https://www.gamcare.org.uk/" target="_blank">
                                          <img src="{{asset('NewExchangeTheme/images/gamecare.png')}}">
                                       </a>
                                       <a href="#" target="_blank">
                                          <img src="{{asset('NewExchangeTheme/images/gt.png')}}">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="footer-bottom">
                                    <span class="ws-pre-wrap">This website is operated by Seven Investments America
                                       N.V.,
                                       registered in Curaçao under the number 152581, with the address at
                                       Zuikertuintjeweg Z/N
                                       (Zuikertuin Tower), Curaçao. The transactions are processed by Seven Investments
                                       LTD
                                       registered with the number 12391820, with head office at Kemp House 160 City
                                       Road, London,
                                       United Kingdom. For the purpose of processing payments via Paysafe Group
                                       including but not
                                       limited to Neteller and Skrill, the transaction processing entity shall be Seven
                                       Investments
                                       America N.V., registered in Curaçao under the number 152581, with the address at
                                       Zuikertuintjeweg Z/N (Zuikertuin Tower), Curaçao..</span>
                                 </div>
                              </div>
                              <div class="text-center mt-1 w-100 copyright"> © Copyright 2020. All Rights Reserved.
                              </div>
                           </footer>
                           <div class="point-apk-box d-none-desktop">
                              <a href="#" target="_blank" class="download-apk">
                                 <i class="fab fa-android mr-2"></i>Download APK </a>
                              <div class="close-apk">
                                 <i class="fas fa-times"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Right Sidebar -->
               <div class="right-sidebar">
                  <div class="top-results">
                     <div class="top-result-title"> Winner Announcement </div>
                     <div class="top-result-box-container">
                        <section tabindex="0" class="hooper is-vertical">
                           <div class="hooper-list">
                              <div class="hooper-track winner-slider">
                                 <li class="hooper-slide item">
                                    <div class="top-result-box">
                                       <div>
                                          <div>
                                             <b>MC****</b>
                                          </div>
                                          <div>6,670</div>
                                       </div>
                                       <div>
                                          <span> 30/04/2023 19:41 </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="top-result-box">
                                       <div>
                                          <div>
                                             <b>po****</b>
                                          </div>
                                          <div>65,900</div>
                                       </div>
                                       <div>
                                          <span> 25/04/2023 20:19 </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="top-result-box">
                                       <div>
                                          <div>
                                             <b>mo****</b>
                                          </div>
                                          <div>575</div>
                                       </div>
                                       <div>
                                          <span> 28/04/2023 04:44 </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="top-result-box">
                                       <div>
                                          <div>
                                             <b>ip****</b>
                                          </div>
                                          <div>31,675</div>
                                       </div>
                                       <div>
                                          <span> 29/04/2023 11:26 </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="top-result-box">
                                       <div>
                                          <div>
                                             <b>Sh****</b>
                                          </div>
                                          <div>61,654</div>
                                       </div>
                                       <div>
                                          <span> 30/04/2023 08:04 </span>
                                       </div>
                                    </div>
                                 </li>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="home-casiono-icons">
                     <h4><span>New Launched</span></h4>
                     <div class="home-casino-icon-item w-100">
                        <section class="hooper">
                           <div class="hooper-list">
                              <ul class="hooper-track new-launched">
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/roulette1.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/teen.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/teen20.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/teen9.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/roulette1.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/teen.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/teen20.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                                 <li class="hooper-slide item">
                                    <a href="javascript:void(0);" role="button">
                                       <img src="{{asset('NewExchangeTheme/images/teen9.jpg')}}" class="img-fluid">
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="home-casiono-icons casino">
                     <h4>Our Casino</h4>
                     <div class="home-casino-icon-item w-100">
                        <section class="hooper is-vertical">
                           <div class="hooper-list">
                              <ul class="hooper-track our-casino-slider">
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/roulette1.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen9.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen8.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/poker.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/poker20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/poker6.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/baccarat.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/baccarat2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dt20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dt6.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dtl20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dt202.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/card32.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/card32eu.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/ab20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/abj.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lucky7.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lucky7eu.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/3cardj.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/war.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/worli.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/worli2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/aaa.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/btable.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lottcard.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cricketv3.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cmatch20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cmeter.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen6.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/queen.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/race20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lucky7eu2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/superover.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/trap.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/patti2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teensin.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teenmuf.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/race17.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen20b.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/trio.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/notenum.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen2024.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/kbc.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen120.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen1.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/roulette.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/ab3.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/aaa2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/race2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen3.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dum10.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cmeter1.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/roulette1.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen9.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen8.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/baccarat.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/baccarat2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dt20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dt6.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dtl20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dt202.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/card32.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/card32eu.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/ab20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/abj.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lucky7.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lucky7eu.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/3cardj.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/war.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/worli.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/worli2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/aaa.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/btable.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lottcard.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cricketv3.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cmatch20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/cmeter.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen6.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/queen.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/race20.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/lucky7eu2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/superover.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/trap.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/patti2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teensin.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teenmuf.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/race17.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen20b.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/trio.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/notenum.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen2024.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/kbc.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen120.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen1.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/roulette.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/ab3.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide items">
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/aaa2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/race2.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/teen3.jpg')}}" class="img-fluid"></a>
                                    </div>
                                    <div class="login-hover"><a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/dum10.jpg')}}" class="img-fluid"></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="home-casiono-icons">
                     <h4>Our Virtual Casino</h4>
                     <div class="home-casino-icon-item w-100">
                        <section tabindex="0" class="hooper">
                           <div class="hooper-list">
                              <ul class="hooper-track virtual-casino-slider">
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vlucky7.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vtrio.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vdtl20.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vteenmuf.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vaaa.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vbtable.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vdt6.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vteen.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vteen20.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vlucky7.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vtrio.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vdtl20.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vteenmuf.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vaaa.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vbtable.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vdt6.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vteen.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                                 <li class="hooper-slide item">
                                    <div class="login-hover">
                                       <a href="javascript:void(0);" role="button">
                                          <img src="{{asset('NewExchangeTheme/images/vteen20.jpg')}}" class="img-fluid">
                                       </a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               <!-- End Right Sidebar -->
            </div>
         </div>
         <!-- End MAin -->
      </div>
   </div>
   <!-- 18plus Modal -->
   <div id="modal-18plusModal" class="modal fade modal-18plus" role="dialog">
      <div class="modal-dialog modal-md">
         <div class="modal-content">
            <div class="modal-header">
               <h5 id="eighteenPlusFooter___BV_modal_title_" class="modal-title">cricadda.com</h5>
               <button type="button" aria-label="Close" class="close">×</button>
            </div>
            <div class="modal-body">
               <div class="modal-18plus p-5">
                  <div><img src="{{asset('NewExchangeTheme/images/18plus.png')}}"></div>
                  <p><b>Over 18s only</b><br><br>
                     It is an offence for anyone under the age of 18 to open an account or to gamble on cricadda.
                     cricadda</p>
                  <p><b>Over 18s only</b><br><br>
                     It is an offence for anyone under the age of 18 to open an account or to gamble on cricadda.
                     cricadda
                     takes its age-verification responsibilities very seriously. We carry out age-verification checks on
                     all
                     customers who use payment mechanisms which are available to under 18s and additionally perform
                     random
                     age-verification checks on customers using other forms of funding mechanisms. We may ask for
                     information
                     to verify your age and could restrict or suspend your account until your age is confirmed.
                     <br><br>
                     PLEASE NOTE THAT ANYONE UNDER THE AGE OF 18 YEARS OLD FOUND TO BE USING THIS SITE WILL HAVE ANY
                     WINNINGS
                     FORFEITED AND MAY ALSO BE REPORTED TO THE POLICE.
                     <br><br>
                     <b>Filtering systems</b>
                     <br><br>cricadda advises and encourages its customers to prevent minors from accessing gambling
                     websites.
                     <br><br>Filtering solutions allow parents to regulate access to the internet, based on chosen
                     criteria.
                     Parents can use filters to prevent their children from accessing, amongst other things, gambling
                     websites.
                     Because our pages are 'labelled', filtering solutions being used to prevent gambling access are
                     able to
                     detect our site content, and block our pages. If you share your computer with friends or family who
                     are
                     under the legal age to register or bet with our site, please consider parental filtering solutions
                     such
                     as:
                     <br><br>Net Nanny™
                     <a href="#" target="_blank">www.netnanny.com</a>
                     <br><br>CyberPatrol
                     <a href="#" target="_blank">www.cyberpatrol.com</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Javascript files-->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <script src="{{asset('js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('js/slick.js')}}"></script>
</body>

</html>