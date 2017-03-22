<html>
    <head>
        <title>Solution Builders - @yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />

        
        <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">

        <!-- Custom additions -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ URL::asset('js-plugin/magnific-popup/magnific-popup.css') }}">
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="{{ URL::asset('js-plugin/revolution-slider/rs-plugin/css/navstylechange.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('js-plugin/revolution-slider/rs-plugin/css/settings-hideo.css') }}">
        <!-- Owl carousel-->
        <link rel="stylesheet" href="{{ URL::asset('js-plugin/owl.carousel/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('js-plugin/owl.carousel/owl-carousel/owl.theme.css') }}">
        <!-- nekoAnim-->

        <link rel="stylesheet" href="{{ URL::asset('js-plugin/appear/nekoAnim.css') }}">
        <!-- isotope -->
        <link rel="stylesheet" href="{{ URL::asset('js-plugin/isotope/css/style.css') }}">
        <!-- icon fonts -->

        <link rel="stylesheet" href="{{ URL::asset('font-icons/custom-icons/css/custom-icons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('font-icons/custom-icons/css/custom-icons-ie7.css') }}">



        <!-- Custom css -->
        <link type="text/css" rel="stylesheet" href="css/layout.css">
        <link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">
        <link rel="stylesheet" href="{{ URL::asset('css/colors.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">

   <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!--        <script src="js/modernizr-2.6.1.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <!-- Favicons
                ================================================== -->


        <!-- End of custom additions -->

        <link rel="stylesheet" href="{{ URL::asset('/css/custom.css').'?v'.time() }}">
        <link href="https://fonts.googleapis.com/css?family=Audiowide|Fascinate+Inline|Roboto+Slab" rel="stylesheet">
    </head>
    <body class="activateAppearAnimation">
        @section('navbar')

        <!-- Static navbar -->
        <!-- globalWrapper -->
        <div id="globalWrapper">
            <header class="navbar-fixed-top">
                <!-- header -->
                <div id="mainHeader" role="banner">
                    <div class="container">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <!-- responsive navigation -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                             <!--   <a class="navbar-brand" href="index.html"><img src="images/main-logo.png" alt="HIDEO website template"/></a> -->
                            </div>
                            <div class="collapse navbar-collapse" id="mainMenu">
                                <!-- Main navigation -->
                                <ul class="nav navbar-nav pull-right">

                                    <li class="primary">
                                        <a href="{{url('/')}}" class="firstLevel active last" >Home</a>

                                    </li>

                                    <li class="sep"></li>

                                    <li class="primary"> 
                                        <a href="{{url('/about')}}" class="firstLevel last" >About Us</a>


                                    </li>
                                    <li class="sep"></li>
                                    <li class="primary"> 
                                        <a href="{{url('/portfolio')}}" class="firstLevel last" >Portfolio</a>


                                    </li>


                                    <li class="sep"></li>
                                    <li id="lastMenu" class="last"><a href="{{url('/contact')}}" class="firstLevel last">Contact</a></li>
                                </ul>
                                <!-- End main navigation -->
                            </div>
                        </nav>
                    </div>
                </div>
            </header>



            @show
            <div class="container">

                <div class="row">
                    <!--           // echo 'Route'.Request::path();  
                                @if (Route::current() === 'items')
                                I have one record!-->

                    @endif-->

                    @yield('content')


                </div>

            </div>

            <!--Footer -->
            <!-- footer -->
            <footer id="footerWrapper" class="footer2">
                <section id="mainFooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="footerWidget">
                                    <!--<img src="images/neko-logo.png" alt="latest Little Neko news" id="footerLogo"> -->
                                    <h3>The Designer</h3>
                                    <p><a href="http://www.redriverhog.co.za" title="Mystic Web Solutions">Mystic Web Solutions</a> is a web design and development studio. We build responsive desktop and mobile websites, integrating best web design practices and up-to-date web technologies to create great user experiences. We love what we do and we hope you do too! </p>
                                </div>
                            </div>






                            <div class="col-md-3 col-sm-6">
                                <div class="footerWidget">

                                    <h3>Latest news</h3>
                                    <ul class="list-unstyled iconList borderList">
                                        <li><a href="#">Solace of a lonely highway</a></li>
                                        <li><a href="#">Write with purpose</a></li>
                                        <li><a href="#">Tree on a lake</a></li>
                                        <li><a href="#">Don’t stop questioning</a></li>
                                        <li><a href="#">Overheard this morning</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footerWidget">

                                    <h3>Forthcoming Projects</h3>
                                    <ul class="list-unstyled iconList borderList">
                                        <li><a href="#">Solace of a lonely highway</a></li>
                                        <li><a href="#">Write with purpose</a></li>
                                        <li><a href="#">Tree on a lake</a></li>
                                        <li><a href="#">Don’t stop questioning</a></li>
                                        <li><a href="#">Overheard this morning</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footerWidget">

                                    <h3>Mystic Web Solutions</h3>
                                    <address>
                                        <p>
                                            <i class="icon-location"></i>&nbsp;24 Jones Road<br>
                                            Roodepoort, Gauteng, South Africa <br>
                                            <i class="icon-phone"></i>&nbsp;+27 71 877 8671<br>
                                            <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:admin@redriverhog.co.za">admin@redriverhog.co.za</a>
                                        </p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section  id="footerRights">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <ul class="socialNetwork">
                                    <li><a href="#" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                                    <li><a href="#" class="tips" title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
                                </ul>     
                            </div>


                            <div class="col-md-12">
                                <p>Copyright © 2017 <a href="http://redriverhog.co.za" target="blank">Mystic Web Solutions</a> / All rights reserved.</p>
                            </div>

                        </div>
                    </div>
                </section>
            </footer>
            <!--End of Footer -->




        </div>


        <!-- Placed at the end of the document so the pages load faster -->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->



        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

        <!-- Custom Hideo -->
        <script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
        <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.10.2.min.js"></script>
        <script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>

        <!-- third party plugins  -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js-plugin/easing/jquery.easing.1.3.js"></script>

        <!-- carousel -->
        <script type="text/javascript" src="js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js"></script>

        <!-- pop up -->
        <script type="text/javascript" src="js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Revolution slider -->
        <script type="text/javascript" src="js-plugin/revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js-plugin/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- isotope -->
        <script type="text/javascript" src="js-plugin/isotope/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js-plugin/isotope/jquery.isotope.sloppy-masonry.min.js"></script>

        <!-- form -->
        <script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.form.js"></script>
        <script type="text/javascript" src="js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>

        <!-- Paralax -->
        <script type="text/javascript" src="js-plugin/parallax/js/jquery.stellar.min.js"></script>

        <!-- appear -->
        <script type="text/javascript" src="js-plugin/appear/jquery.appear.js"></script>

        <!-- Custom  -->
        <script type="text/javascript" src="js/custom.js"></script>

        <!-- End of Custom Hideo -->

    </body>
</html>
