@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
<!-- ======================================= content ======================================= -->
<!-- slider -->
<section id="rsDemoWrapper">

    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>	<!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="slider/rs-slider/demo/videobg1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption lightgrey_divider skewfromrightshort customout"
                         data-x="85"
                         data-y="224"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 2">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin customout"
                         data-x="center" data-hoffset="100"
                         data-y="150" data-voffset="0"
                         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 3"><img src="slider/rs-slider/demo/dragon-png-15.png" alt="">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption large_bold_grey skewfromrightshort customout"
                         data-x="80"
                         data-y="80"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="800"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 4">Guild Wars 2
                    </div>




                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption medium_thin_grey skewfromleftshort customout"
                         data-x="80"
                         data-y="152"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="300"
                         data-start="1100"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 7">Item Database
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption small_thin_grey customin customout"
                         data-x="80"
                         data-y="240"
                         data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1300"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 8">Guild Wars 2 Item Database has everything<br> you need to trade profitably
                    </div>

                    <!-- LAYER NR. 8 -->


                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption large_bold_darkblue skewfromleftshort customout"
                         data-x="right" data-hoffset="100"
                         data-y="60"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1600"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 10">1000's
                    </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption medium_bg_darkblue skewfromleftshort customout"
                         data-x="right" data-hoffset="100"
                         data-y="125"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1650"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 11">Of Items
                    </div>

                    <!--                                 LAYER NR. 11 
                                                    <div class="tp-caption medium_bold_orange skewfromrightshort customout"
                                                         data-x="right" data-hoffset="100"
                                                         data-y="200"
                                                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                         data-speed="500"
                                                         data-start="1800"
                                                         data-easing="Back.easeOut"
                                                         data-endspeed="500"
                                                         data-endeasing="Power4.easeIn"
                                                         data-captionhidden="on"
                                                         style="z-index: 12">Powerful
                                                    </div>-->

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption medium_bold_orange skewfromrightshort customout"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-10"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1850"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 13">Powerful
                    </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption medium_bg_orange skewfromrightshort customout"
                         data-x="right" data-hoffset="100"
                         data-y="bottom" data-voffset="-205"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1900"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 14">A Professional Solution
                    </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption medium_bold_red skewfromleftshort customout"
                         data-x="right" data-hoffset="100"
                         data-y="340"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2000"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 15">Powered by
                    </div>

                    <!-- LAYER NR. 15 -->


                    <!-- LAYER NR. 16 -->


                    <!-- LAYER NR. 17 -->


                    <!-- LAYER NR. 18 -->

                    <!-- LAYER NR. 19 -->


                    <!-- LAYER NR. 20 -->
                    <div class="tp-caption medium_bg_red skewfromleftshort customout"
                         data-x="right" data-hoffset="100"
                         data-y="bottom" data-voffset="-90"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2300"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="on"
                         style="z-index: 21">Laravel 5.4
                    </div>
                </li>
                <!-- SLIDE  -->

                <!-- SLIDE  -->

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>



</section>
<section id="content">
    <br>
    <div class='row'>
        <div class="col-md-4 col-sm-12">
            <article class="boxIcon">
                <a href="#">
                    <div class="imgBorder">
                        <img class="img-circle img-responsive" src="{{URL::asset('img/crow.png') }}" alt="" />
                    </div>
                    <h2>What is this website for?</h2>
                    <p>Quisque id ligula nibh. Ut molestie rutrum gravida. Donec ultrices, ex eu aliquam consectetur, enim elit varius enim, at ornare tellus lectus vitae velit.</p>
           
                </a>
            </article>
        </div>

     
        <div class="col-md-4 col-sm-12">
            <article class="boxIcon">
                <a href="#">
                    <div class="imgBorder">
                        <img class="img-circle img-responsive" src="{{URL::asset('img/warriorangel.png') }}" alt="" />
                    </div>
                    <h2>What can we do for you?</h2>
                    <p>Quisque id ligula nibh. Ut molestie rutrum gravida. Donec ultrices, ex eu aliquam consectetur, enim elit varius enim, at ornare tellus lectus vitae velit.</p>
           
                </a>
            </article>
        </div>
        <div class="col-md-4 col-sm-12">
            <article class="boxIcon">
                <a href="#">
                    <div class="imgBorder">
                        <img class="img-circle img-responsive" src="{{URL::asset('img/castle.png') }}" alt="" />
                    </div>
                    <h2>How to use the site</h2>
                    <p>Quisque id ligula nibh. Ut molestie rutrum gravida. Donec ultrices, ex eu aliquam consectetur, enim elit varius enim, at ornare tellus lectus vitae velit.</p>
           
                </a>
            </article>
        </div>
    </div>
</div>
</section>

<!-- slider -->
@endsection

