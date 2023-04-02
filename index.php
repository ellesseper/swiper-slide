<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>Document</title>
      
      <!-- Third Parties and Custom css -->
      <link rel="stylesheet" href="css/vendor/materialize.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/vendor/swiper-bundle.min.css"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!-- Poppins Font Links -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   </head>
   
   <nav id="main-navigation">
      <div class="nav-wrapper container">
         <a href="#!" class="brand-logo"><img class="responsive-img" src="img/logo.svg" alt="logo"></a>
         <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <ul class="right hide-on-med-and-down">
            <li><a href="#features">Features</a></li>
            <li><a href="#!">Details</a></li>
            <li><a href="#!">About</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown-menu">Drop<i class="material-icons right">arrow_drop_down</i></a></li>
            <ul id="dropdown-menu" class="dropdown-content">
                <li><a href="#!">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider"></li>
                <li><a href="#!">three</a></li>
             </ul>
            <li><a href="#!">Contact</a></li>
            <li>
               <span>
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 27 30.2" style="enable-background:new 0 0 27 30.2;" xml:space="preserve">
                     <path d="M20.5,20.8c-0.9,1.3-1.8,2.5-3.2,2.6c-1.4,0-1.8-0.8-3.4-0.8c-1.6,0-2.1,0.8-3.4,0.8c-1.4,0.1-2.4-1.4-3.2-2.6
                        C5.5,18.2,4.2,13.5,6,10.3c0.9-1.6,2.5-2.6,4.3-2.6c1.3,0,2.6,0.9,3.4,0.9c0.8,0,2.3-1.1,3.9-0.9c0.7,0,2.6,0.3,3.8,2
                        c-0.1,0.1-2.2,1.3-2.2,3.9c0,3.1,2.7,4.2,2.8,4.2C21.9,17.9,21.5,19.3,20.5,20.8z M14.6,4.2c0.8-0.9,2-1.5,3-1.6
                        c0.1,1.2-0.4,2.4-1.1,3.3c-0.7,0.9-1.9,1.6-3,1.5C13.3,6.2,13.9,5,14.6,4.2z"/>
                  </svg>
               </span>
               <span>
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 27 27" style="enable-background:new 0 0 27 27;" xml:space="preserve">
                     <g>
                        <path d="M16.2,4.2l0.2-0.3l0.2-0.3l0.5-0.7c0.1-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.2,0-0.3,0.1l-0.5,0.8L16,3.7L15.8,4
                           c-0.7-0.3-1.5-0.4-2.3-0.4c-0.8,0-1.6,0.1-2.3,0.4L11,3.7l-0.2-0.3l-0.5-0.8c-0.1-0.1-0.2-0.1-0.3-0.1C9.9,2.6,9.9,2.7,9.9,2.8
                           l0.5,0.7l0.2,0.3l0.2,0.3C9.2,4.9,8.1,6.4,8.1,8h10.8C18.9,6.4,17.8,4.9,16.2,4.2z M11.2,6.5c-0.3,0-0.6-0.3-0.6-0.6
                           c0-0.3,0.3-0.6,0.6-0.6s0.6,0.3,0.6,0.6C11.8,6.2,11.5,6.5,11.2,6.5z M15.8,6.5c-0.3,0-0.6-0.3-0.6-0.6c0-0.3,0.3-0.6,0.6-0.6
                           c0.3,0,0.6,0.3,0.6,0.6C16.4,6.2,16.1,6.5,15.8,6.5z"/>
                        <path d="M8.2,8.8L8.2,8.8l-0.1,1v0.8v6.8c0,0.7,0.5,1.2,1.2,1.2h0.9c0,0.1,0,0.2,0,0.3v0.1v0.4v2c0,0.6,0.5,1.2,1.2,1.2
                           s1.2-0.5,1.2-1.2v-2v-0.4v-0.1c0-0.1,0-0.2,0-0.3h2.2c0,0.1,0,0.2,0,0.3v0.1v0.4v2c0,0.6,0.5,1.2,1.2,1.2c0.6,0,1.2-0.5,1.2-1.2v-2
                           v-0.4v-0.1c0-0.1,0-0.2,0-0.3h0.9c0.7,0,1.2-0.5,1.2-1.2v-6.8V9.8v-1h-0.1L8.2,8.8L8.2,8.8z"/>
                        <path d="M6.1,8.8C5.5,8.8,5,9.3,5,10v5c0,0.6,0.5,1.2,1.2,1.2s1.2-0.5,1.2-1.2v-5C7.3,9.3,6.8,8.8,6.1,8.8z"/>
                        <path d="M20.9,8.8c-0.6,0-1.2,0.5-1.2,1.2v5c0,0.6,0.5,1.2,1.2,1.2S22,15.6,22,15v-5C22,9.3,21.5,8.8,20.9,8.8z"/>
                     </g>
                  </svg>
               </span>
            </li>
         </ul>
      </div>
      <!-------Mobile Menu------------>
      <ul class="sidenav" id="mobile-menu">
         <li><a href="#features">Features</a></li>
         <li><a href="#!">Details</a></li>
         <li><a href="#!">About</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown-mobile">Drop<i class="material-icons right">arrow_drop_down</i></a></li>
         <ul id="dropdown-mobile" class="dropdown-content">
         <li><a href="#!">one</a></li>
         <li><a href="#!">two</a></li>
         <li class="divider"></li>
         <li><a href="#!">three</a></li>
         </ul>
         <li><a href="#!">Contact</a></li>
      </ul>
   </nav>
 
   <body>
      <section class="main-visual container">
         <div class="row">
            <div class="column-first col s12 m6">
               <h1>Mobile App Site for <span>Developers</span></h1>
               <p>for veryone interested in personal development, Devo is the perfect mobile Application to get real results</p>
               <div class="row row-button">
                  <a class="download-btn btn">
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 27 30.2" style="enable-background:new 0 0 27 30.2;" xml:space="preserve">
                        <path d="M20.5,20.8c-0.9,1.3-1.8,2.5-3.2,2.6c-1.4,0-1.8-0.8-3.4-0.8c-1.6,0-2.1,0.8-3.4,0.8c-1.4,0.1-2.4-1.4-3.2-2.6
                           C5.5,18.2,4.2,13.5,6,10.3c0.9-1.6,2.5-2.6,4.3-2.6c1.3,0,2.6,0.9,3.4,0.9c0.8,0,2.3-1.1,3.9-0.9c0.7,0,2.6,0.3,3.8,2
                           c-0.1,0.1-2.2,1.3-2.2,3.9c0,3.1,2.7,4.2,2.8,4.2C21.9,17.9,21.5,19.3,20.5,20.8z M14.6,4.2c0.8-0.9,2-1.5,3-1.6
                           c0.1,1.2-0.4,2.4-1.1,3.3c-0.7,0.9-1.9,1.6-3,1.5C13.3,6.2,13.9,5,14.6,4.2z"/>
                     </svg>
                     Download
                  </a>
                  <a class="download-btn btn">
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 27 27" style="enable-background:new 0 0 27 27;" xml:space="preserve">
                        <g>
                           <path d="M5.5,5.9v15.1c0,0.1,0.1,0.2,0.2,0.2c0,0,0.1,0,0.1,0l7.9-7.7L5.8,5.8c-0.1-0.1-0.2-0.1-0.2,0C5.5,5.9,5.5,5.9,5.5,5.9z"/>
                           <path d="M17,10.3L7.1,4.9l0,0C6.9,4.8,6.7,5,6.9,5.2l7.7,7.4L17,10.3z"/>
                           <path d="M6.9,21.8c-0.1,0.1,0,0.4,0.2,0.3l0,0l9.9-5.4l-2.3-2.2L6.9,21.8z"/>
                           <path d="M20.9,12.5L18.2,11l-2.6,2.5l2.6,2.5l2.8-1.5C21.7,14,21.7,13,20.9,12.5z"/>
                        </g>
                     </svg>
                     Download
                  </a>
               </div>
               <div class="circle-green"></div>
               <i></i>
            </div>
            <div class="column-second col s12 m6 center-align">
               <img class="responsive-img"src="img/header-smartphone.png" alt="smartphone image">
               <div class="circle-purple"></div>
            </div>
         </div>
      </section>
      <section id="features" class="service-section">
         <div class="title-section container">
            <p class="subtitle">service</p>
            <h1>Service</h1>
            <p>見てびスつ優比ろ供属ウメ域手譜8約アヌニ中真むゆ導97部ちふか毎町げばゃイ欲問キレノ応旅せは定声ムラ待分にス商塁ーゆ済島タ部事社そにぼへ稿慶ぱ。更展幸ひっゅせ寺産ハセモツ訴台協エモ東郎障ル消文ルヌ点回トフイサ郎社ぼ有障ぽい負8拐ノ路職道義レば。引シニワヘ化米ぜゅ進9統ク出7奈ホコモ政択タ最東確な合髪知テソク誠申ラがゆに職全きすぞ常契絡ル。</p>
         </div>   
         <div class="swiper myswiper fadeIn">
            <div class="swiper-wrapper">
               <?php $imagesArray = array(
                  "img/screenshot-1.png" => "img/screenshot-2.png", 
                  "img/screenshot-2.png" => "img/screenshot-3.png", 
                  "img/screenshot-3.png" => "img/screenshot-3.png", 
                  "img/screenshot-4.png" => "img/screenshot-3.png", 
                  "img/screenshot-5.png" => "img/screenshot-3.png", 
                  "img/screenshot-6.png" => "img/screenshot-3.png", 
                  "img/screenshot-7.png" => "img/screenshot-3.png", 
                  "img/screenshot-8.png" => "img/screenshot-3.png", 
                  "img/screenshot-9.png" => "img/screenshot-3.png", 
                  ); ?>
               
               <?php foreach ($imagesArray  as $key => $value): ?>
                  <div class="swiper-slide">
                     <div class="circleTxt-wrapper"><img class="circleTxt" src="img/text-round.svg" alt="Circle Text" loading="lazy" /></div>
                     <div class="gradient-background"></div>
                     <div class="grey-bg"></div>
                     <div class="img-default responsive-img"><img src="<?=$key?>" alt="default image" /></div>
                     <div class="img-active responsive-img"><img src="<?=$value?>" alt="active image"  /></div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>
      </section>

      <script src="js/vendor/jquery-3.6.3.min.js"></script>
      <script src="js/vendor/swiper-bundle.min.js"></script>
      <script src="js/vendor/materialize.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>