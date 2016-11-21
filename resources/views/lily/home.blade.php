@php
$path = "assets/lily"
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $data['title'] }}</title>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,500italic,700italic' rel='stylesheet' type='text/css'>
    
    <link href="/{{ $path }}/css/icon-font/font-awesome.css" rel="stylesheet">
    <link href="/{{ $path }}/css/icon-font/pe-icon-7.css" rel="stylesheet">

    <link href="/{{ $path }}/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="/{{ $path }}/css/animsition.css" rel="stylesheet">
    
    <link href="/{{ $path }}/css/style.css" rel="stylesheet">

    <script src="/{{ $path }}/js/modernizr.js"></script>

</head>

<body data-smooth-scroll="true" class="secondary-font">
        
    <div class="animsition">

        <header class="nav-wrap is-fixed is-shrink" data-is-fill="true">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-xs-6 col-md-3">

                            <div class="brand-wrap clearfix">

                                <a href="index.html" class="brand __headerContainer">
                                    <div class="__header">{{ $data['header'] }}</div>
                                    <div class="__header_sub">{{ $data['header_sub'] }}</div>
                                </a>
                            </div>

                        </div>
                        <!-- / col-xs-6 -->

                        <div class="col-md-9 carna-menu-wrap">

                            <ul class="carna-menu menu-smooth pull-right heighlight-menu">
                                <li>
                                    <a href="#intro" data-scroll class="scrollTo active">intro</a>

                                </li>
                                <li><a href="#about" data-scroll class="scrollTo">about</a>

                                </li>
                                <li><a href="#menu" data-scroll class="scrollTo">menu</a>

                                </li>
                                <li><a href="#contact" data-scroll class="scrollTo">contact</a>

                                </li>
                                <li><a href="#info" data-scroll class="scrollTo">info</a>

                                </li>

                            </ul>
                            <!-- end of menu -->

                        </div>
                        <!-- / col-md-9 -->

                        <div class="col-xs-6 col-md-9 text-right button-wrap">
                            <button class="button-trigger"><span></span>
                            </button>
                        </div>
                        <!-- / col-xs-6 -->

                        <div class="col-md-12 mobile-wrap" data-one-page="true" data-has-button="true">
                            <ul class="carna-menu-mobile mobile-smooth" data-scroll-header>
                                <li>
                                    <a href="#intro" data-scroll class="scrollToMini active">intro</a>

                                </li>
                                <li><a href="#about" data-scroll class="scrollToMini">about</a>

                                </li>
                                <li><a href="#menu" data-scroll class="scrollToMini">menu</a>

                                </li>
                                <li><a href="#contact" data-scroll class="scrollToMini">contact</a>

                                </li>
                                <li><a href="#info" data-scroll class="scrollToMini">info</a>

                                </li>
                            </ul>

                        </div>
                        <!-- / col-md-12 -->

                        <div class="clearfix"></div>

                    </div>
                    <!-- end row -->

                </div>
                <!-- end container -->

        </header>
        <!-- end header -->

        <div class="wrapper">

            <section id="intro" class="pages layer_z" data-zindex="-1">

                <div class="full_block" data-stellar-ratio=".5" data-video-width="560" data-video-height="282">

                <div class="color-bg __image-bg" style="background-image: url({{ $data['image_1'] }})"></div>
                    <div class="slider-text-band opacity-out">

                        <div class="centered">

                            <ul class="bx-slider slide-txt" data-bx-delay="1000" data-bx-speed="800" data-bx-mode="fade" data-bx-easing="easeOutQuint" data-bx-auto-play="true" data-bx-control="false" data-bx-auto-hover="true" data-bx-pager="false">

                                <li class="slide">
                                   <p class="__black">welcome to</p>
                                    <h1 class="__black">{{ $data['name'] }}</h1>
                                    <p class="__black">{{ $data['introMessage_1'] }}</p>
                                    <a href="#about" class="btn-main small transparent scrollTo __black __blackBorder __whiteHover">discover more</a>
                                </li>
                                <li class="slide">
                                    <h1 class="__black">Join us today</h1>
                                    <p class="__black">{{ $data['introMessage_2'] }}</p>
                                    <a href="#reserv" class="btn-main small transparent scrollTo __black __blackBorder __whiteHover">make a reservation</a>    
                                </li>

                            </ul>
                            <!-- end slide-txt-->

                        </div>
                        <!-- / centered -->

                    </div>
                    <!-- end slider text band -->

                </div>
                <!-- end hero-img -->

            </section>
            <!-- end home -->

            <section id="about" class="pages layer_z __whiteBackground" data-zindex="10">

                <div class="container-fluid-flat overlay-boxes highlighted-section-3">

                        <div class="col-sm-6">
                            
                            <div class="overlay-boxes__text with-bg-right">
                                
                                <div class="overlay-boxes__text-inside">

                                <h1 class="main-header">{{ $data['tile1_title'] }}</h1>

                                        <p class="deco-text remove-pb-t">{{ $data['tile1_text'] }}</p>
                                        
                                </div>
                                <!-- / overlay-boxes__text-inside -->        

                                
                            </div>
                            <!-- / item-description -->
                            
                        </div>
                        <!-- / col-md-6 -->

                        <div class="col-sm-6 add-rotat-header">
                        
                          <div class="overlay-boxes__img">
                              
                              <h4 class="add-rotat-header__rotatleft animatedIn" data-animation="fadeInDown">feel at home </h4>
                              <img src="{{ $data['image_2'] }}" alt="">
                              
                          </div>
                        
                        </div>
                        <!-- / col-md-12 -->
                    
                </div>
                <!-- / container -->
                
                <div class="container-fluid-flat overlay-boxes left">

                        <div class="col-sm-6 add-rotat-header">
                        
                          <div class="overlay-boxes__img">
                              <h4 class="add-rotat-header__rotatright animatedIn" data-animation="fadeInDown">always fresh</h4>
                              <img src="{{ $data['image_3'] }}" alt="">
                              
                          </div>
                        
                        </div>
                        <!-- / col-md-6 -->

                        <div class="col-sm-6">
                            
                            <div class="overlay-boxes__text">
                                
                                <div class="overlay-boxes__text-inside __whiteBackground">

                                <h1 class="main-header">{{ $data['tile2_title'] }}</h1>

                                        <p class="deco-text remove-pb-t">{{ $data['tile2_text'] }}</p>
                                        
                                </div>
                                 <!-- / overlay-boxes__text-inside -->         

                            </div>
                            <!-- / item-description -->
                            
                        </div>
                        <!-- / col-md-6 -->

                </div>
                <!-- / container -->
                <!-- end container fluid flat-->
                
                <div class="separator separator-deco" data-stellar-background-ratio=".5" data-stellar-vertical-offset="0" style="background-image: url({{ $data['image_4'] }})">

                        <div class="separator__inner">
                           
                            <h1 class="overlay-header">Always fresh</h1>
                            
                        </div>
                        <!-- / separator__inner -->
                    
                </div>
                <!-- / separator -->


            </section>
            <!-- end about -->

            <section id="menu" class="pages menu-content layer_z space-y highlighted-section-2" data-zindex="10">
              
              <div class="container">
                   
                    <div class="row">
                       
                        <div class="col-md-12 text-center">
                            
                            <h1 class="text-bold main-header">the menu</h1>
                            
                        </div>
                        <!-- / col-md-12 -->
                        
                    </div>
                    <!-- / row -->
                    
                </div>
                <!-- / container -->
               
               <main class="cd-main">
                   <ul class="cd-gallery">
                        <li class="cd-item">
                          <a href="/{{ $path }}/food-menu/example.html" class="layer-panr__link">
                                <div class="cd-item__img layer-panr">
                                    <img class="visible-xs" src="{{ $data['image_10'] }}" alt="">
                                    <img class="hidden-xs layer-panr__img" src="{{ $data['image_10'] }}" alt="">
                                    <div class="cd-item__img--text visible-xs">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__img -->
                                <div class="cd-item__text hidden-xs">
                                    <div class="cd-item__inner">
                                        <img src="/{{ $path }}/images/icons/102.png" alt="" class="icon-img">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__text -->
                            </a>
                        </li>
                        <!-- / cd item -->
                        
                        <li class="cd-item">
                          <a href="/{{ $path }}/food-menu/example.html" class="layer-panr__link">
                                <div class="cd-item__img layer-panr">
                                   <img class="visible-xs" src="{{ $data['image_11'] }}" alt="">
                                    <img class="hidden-xs layer-panr__img" src="{{ $data['image_11'] }}" alt="">
                                    <div class="cd-item__img--text visible-xs">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__img -->
                                <div class="cd-item__text hidden-xs">
                                    <div class="cd-item__inner">
                                        <img src="/{{ $path }}/images/icons/55.png" alt="" class="icon-img">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__text -->
                            </a>
                        </li>
                        <!-- / cd item -->
                        
                        <li class="cd-item">
                          <a href="/{{ $path }}/food-menu/example.html" class="layer-panr__link">
                               <div class="cd-item__text hidden-xs right-arrow">
                                    <div class="cd-item__inner">
                                        <img src="/{{ $path }}/images/icons/129.png" alt="" class="icon-img">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__text -->
                                <div class="cd-item__img layer-panr">
                                   <img class="visible-xs" src="{{ $data['image_12'] }}" alt="">
                                    <img class="hidden-xs layer-panr__img" src="{{ $data['image_12'] }}" alt="">
                                    <div class="cd-item__img--text visible-xs">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__img -->
                            </a>
                        </li>
                        <!-- / cd item -->
                        
                        <li class="cd-item">
                          <a href="/{{ $path }}/food-menu/example.html" class="layer-panr__link">
                               <div class="cd-item__text hidden-xs right-arrow">
                                    <div class="cd-item__inner">
                                        <img src="/{{ $path }}/images/icons/176.png" alt="" class="icon-img">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__text -->
                                <div class="cd-item__img layer-panr">
                                   <img class="visible-xs" src="{{ $data['image_13'] }}" alt="">
                                    <img class="hidden-xs layer-panr__img" src="{{ $data['image_13'] }}" alt="">
                                    <div class="cd-item__img--text visible-xs">
                                        <h2 class="overlay-header alternative">Click here</h2>
                                        <p>To open a sample menu</p>
                                        <i class="pe-7s-close"></i>
                                    </div>
                                </div>
                                <!-- / cd-item__img -->
                            </a>
                        </li>
                    </ul> <!-- .cd-gallery -->
                </main>    
                
                

            </section>
            <div class="cd-folding-panel">
        
                    <div class="fold-left"></div> <!-- this is the left fold -->

                    <div class="fold-right"></div> <!-- this is the right fold -->

                    <div class="cd-fold-content">
                        <!-- content will be loaded using javascript -->
                    </div>

                    <a class="cd-close" href="#0"></a>
                </div> <!-- .cd-folding-panel -->
            <!-- / menu -->

            <section id="contact" class="pages layer_z">
                
                <div class="container-fluid-flat overlay-boxes">

                    <div class="col-md-6 space-md-30 clearfix add-rotat-header">
                       
                        <h4 class="add-rotat-header__rotatright animatedIn" data-animation="fadeInDown">close to you </h4>

                        <img src="{{ $data['image_5'] }}" alt="">

                    </div>
                    <!-- / col-md-6 --> 

                    <div class="col-md-6 space-md-30 clearfix">            

                        <div class="overlay-boxes__text with-bg-left text-center">
                           
                           <h1 class="text-bold main-header">our address </h1>

                            <p>We hope to see you soon!</p>

                        <ul>
                            <li>{{ $data['address'] }}</li>
                            <li><a href="mailTo:{{ $data['email'] }}">{{ $data['email'] }}</a>
                            </li>
                        </ul>

                           <a href="#googleMap" class="btn-main medium transparent-2 scrollTo">
                               google map
                           </a>

                        </div>

                    </div>
                    <!-- / col-md-6 -->
                    
                </div>
                <!-- / container-fluid-flat -->   
                    
                <div class="container-fluid-flat overlay-boxes left">
                    
                    <div class="col-md-6 space-md-30 clearfix">            

                        <div class="overlay-boxes__text text-center">
                           
                           <h1 class="text-bold main-header">reservations</h1>

                            <p>We accept reservations. call us or complete the form below</p>

                        <ul>
                            <li>tel: {{ $data['phone'] }}</li>
                        </ul>

                           <a href="#reserv" class="btn-main medium transparent-2 scrollTo">
                               make a reservation
                           </a>

                        </div>

                    </div>
                    <!-- / col-md-6 -->

                    <div class="col-md-6 space-md-30 add-rotat-header clearfix">
                        
                        <h4 class="add-rotat-header__rotatleft animatedIn" data-animation="fadeInDown">give us a ring </h4>

                        <img src="{{ $data['image_6'] }}" alt="">

                    </div>
                    <!-- / col-md-6 --> 

                </div>
                <!--/ container -->
                    
                <div id="googleMap" class="map-container">
                    <a class="_mapLink" href="{{ $data['mapLink'] }}" target="_blank">
                        <div class="__mapImage __backgroundImage" style="background-image:url({{ $data['mapStaticURL'] }})">
                        </div>
                    </a>
                    <!-- / map-wrap -->
                    
                </div>
                <!-- / map-container -->
                
                <div id="reserv" class="space-y highlighted-section-2">
                   
                   <div class="container-fluid highlighted-section-3 add-marg">
                    
                    <div class="row">

                        <div class="col-md-12 text-center">
                            
                            <h1 class="text-bold main-header">Come Join Us</h1>

                            <div class="quform-outer">

                                <form class="quform quform-lines" action="quform/process-v2.php" method="post" enctype="multipart/form-data" onclick="">

                                    <div class="quform-inner">

                                        <div class="quform-elements">

                                            <div class="row">

                                                <!-- Begin Text input element -->
                                                <div class="quform-lines__element quform-element clearfix quform-element-text col-md-4">

                                                    <label for="name">Name <span class="quform-required">*</span>
                                                    </label>
                                                    <div class="quform-input">
                                                        <input id="name" type="text" name="name" placeholder="Eg. John Doe" />
                                                    </div>

                                                </div>
                                                <!-- End Text input element -->

                                                <!-- Begin Text input element -->
                                                <div class="quform-lines__element quform-element clearfix quform-element-text col-md-4">

                                                    <label for="email">Email address <span class="quform-required">*</span>
                                                    </label>
                                                    <div class="quform-input">
                                                        <input id="email" type="text" name="email" placeholder="Eg. john@info.com" />
                                                    </div>

                                                </div>
                                                <!-- End Text input element -->

                                                <div class="quform-lines__element quform-element clearfix quform-element-text col-md-4">

                                                    <label for="personal_phone">phone no. <span class="quform-required">*</span>
                                                    </label>
                                                    <div class="quform-input">
                                                        <input id="personal_phone" type="text" name="personal_phone" placeholder="Eg. 01 2214 4122" />
                                                    </div>

                                                </div>
                                                <!-- End Text input element -->

                                                <div class="quform-lines__element quform-element quform-element-select col-md-4">
                                                    <div class="quform-spacer">
                                                        <label for="time_select">time <span class="quform-required">*</span>
                                                        </label>
                                                        <div class="quform-input">
                                                            <input id="time_select" type="text" name="time_select" placeholder="Eg. 7:30 PM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / Single select element -->

                                                <div class="quform-lines__element quform-element quform-element-select col-md-4">
                                                    <div class="quform-spacer">
                                                        <label for="single_select-person">people <span class="quform-required">*</span>
                                                        </label>
                                                        <div class="quform-input">
                                                            <input id="single_select-person" type="text" name="single_select-person" placeholder="Eg. 6" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single select element -->

                                                <div class="quform-lines__element quform-element quform-element-date col-md-4">
                                                    <div class="quform-spacer">
                                                        <label for="datepicker">date <span class="quform-required">*</span>
                                                        </label>
                                                        <div class="quform-input">
                                                            <input id="datepicker" name="date" placeholder=" MM / DD / YYYY " />
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Begin Textarea element -->
                                                <div class="quform-lines__element quform-element clearfix quform-element-textarea quform-huge col-md-12">

                                                    <label for="message">Message</span>
                                                    </label>
                                                    <div class="quform-input">
                                                        <textarea id="message" name="message" style="height: 130px;" placeholder="Let us know about any allergies or special requests. Or just say hi!"></textarea>
                                                    </div>

                                                </div>
                                                <!-- / Textarea element -->

                                                <!-- Begin Submit button -->
                                                <div class="quform-lines__submit col-md-12 clearfix">
                                                    <div class="quform-submit-inner">
                                                        <button type="submit" value="Send" class="btn-main transparent-2 medium"><span>submit form</span>
                                                        </button>
                                                    </div>
                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span>
                                                    </div>

                                                </div>
                                                <!-- / Submit button -->
                                            </div>
                                            <!-- / row -->

                                        </div>
                                        <!-- / quform-elements -->

                                    </div>
                                    <!-- / quform-inner" -->

                                </form>
                                <!-- / quform -->

                            </div>
                            <!-- / quform-outer -->

                        </div>
                        <!-- / col-md-12 -->

                    </div>
                    <!-- / row -->
                    
                </div>
                <!-- / container -->

                </div>
                <!-- / reserv -->

            </section>
            <!-- end contact -->
            
             <section id="gallery" class="pages">
            
                <div class="scroller-carousel mag-popup" data-mts-type="hover-80" data-popup-gallery-enable="true" data-popup-main-class="mfp-slide-right" data-popup-removal-delay="800">
                  
                   <ul>
                        <li>
                              <div class="__backgroundImage" style="width: 33vw; height: 300px; background-image: url({{ $data['image_7'] }})"></div>
                        </li>
                        <li>
                              <div class="__backgroundImage" style="width: 33vw; height: 300px; background-image: url({{ $data['image_8'] }})"></div>
                        </li>
                        <li>
                              <div class="__backgroundImage" style="width: 34vw; height: 300px; background-image: url({{ $data['image_9'] }})"></div>
                        </li>
                    </ul>    

                </div>
                
            </section>
            <!-- / GALLERY --> 
            
            <section id="info" class="pages space-y-t highlighted-section-2">
        
            <!-- / container-->

            <footer class="footer-mini text-center space-y-b highlighted-section-2">

                <div class="container-fluid space-y-b highlighted-section-3 add-marg with-zic-right">

                    <div class="row">

                        <div class="col-md-4 block-info standard-boxes">

                            <h2 class="main-header">follow us</h2>
                            <i class="pe-7s-chat"></i>
                            <p class="standard-boxes__text">See what our friends are saying about us. Better yet, join the conversation yourself!</p>

                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>

                        </div>
                        <!-- / col-md-3 -->

                        <div class="col-md-4 block-info standard-boxes cover-box  with-bg-middle">

                            <h2 class="main-header">Our Hours</h2>
                               <i class="pe-7s-clock"></i>
                                
                                <div class="standard-boxes__text">
                                    @foreach ($data['hours'] as $day)
                                    <p class="text-uppercase"> <strong>{{ $day['days'] }}</strong></p>
                                    <p class="text-uppercase">{{ $day['time'] }}</p>
                                    @endforeach
                               </div>

                        </div>
                        <!-- / col-md-3 -->

                        <div class="col-md-4 block-info standard-boxes">
                            
                            <h2 class="main-header">Questions?</h2>
                            <i class="pe-7s-phone"></i>
                            <p class="standard-boxes__text">Have any questions for us? Feel free to give us a call: <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}<a/></p>
                            <!-- end subscribeForm -->

                        </div>
                        <!-- / col-md-3 -->

                    </div>
                    <!-- / row -->

                </div>
                <!-- / container -->

            </footer>
            <!-- / footer -->
            
            <div class="copy-right">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-8">
                                <div class="text-uppercase">
                                    © 2016 - Present {{ $data['name'] }}, {{ $data['address'] }}</a>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#" class="back-to-top">back to top</a>
                            </div>

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                </div>
                <!-- end copy right -->
            
            </section>
            <!-- / INFO -->

        </div>
        <!-- / wrapper -->
    
    </div>
    <!-- / animsation -->    


    <script src="/{{ $path }}/js/jquery-1.12.4.min.js"></script>
    <script src="/{{ $path }}/js/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="/{{ $path }}/js/bootstrap.js"></script>
    <script src="/{{ $path }}/js/bootstrap-tabcollapse.js"></script>

    <script src="/{{ $path }}/js/jquery.stellar.min.js"></script>
    <script src="/{{ $path }}/js/classie.js"></script>
    <script src="/{{ $path }}/js/selectFx.js"></script>
    <script src="/{{ $path }}/js/jquery.mThumbnailScroller.min.js"></script>
    <script src="/{{ $path }}/js/twitt.js"></script>
    <script src="/{{ $path }}/js/multi.level.menu.js"></script>
    <script src="/{{ $path }}/js/jquery.bxslider.min.js"></script>

    <script src="/{{ $path }}/js/jquery.magnific-popup.min.js"></script>
    <script src="/{{ $path }}/quform/js/plugins.js"></script>
    <script src="/{{ $path }}/quform/js/scripts.js"></script>
    <script src="/{{ $path }}/js/gridrotator.js"></script>

    <script src="/{{ $path }}/js/velocity.min.js"></script>
    <script src="/{{ $path }}/js/jquery.animsition.js"></script>

    <script src="/{{ $path }}/js/custom.js"></script>


</body>

</html>