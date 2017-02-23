@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
<!-- ======================================= content ======================================= -->
<!-- slider -->
       <!-- slider -->
            <section id="rsDemoWrapper">

                <div class="tp-banner-container">
                    <div class="tp-banner" >
                        <ul>	<!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                                <!-- MAIN IMAGE -->
                                <img src="/slider/rs-slider/demo/videobg1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption lightgrey_divider skewfromrightshort customout"
                                     data-x="15"
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
                                     style="z-index: 3"><img src="/slider/rs-slider/demo/house.png" alt="">
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption large_bold_grey skewfromrightshort customout"
                                     data-x="10"
                                     data-y="80"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 4">Solution Builders
                                </div>




                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption medium_thin_grey skewfromleftshort customout"
                                     data-x="10"
                                     data-y="152"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="300"
                                     data-start="1100"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 7">Professional Construction
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption small_thin_grey customin customout"
                                     data-x="10"
                                     data-y="240"
                                     data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1300"
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 8">Solution Builders is a multi-disciplinary<br/> construction firm, specialising in<br />Kitchens, Bathrooms, Garages,<br /> and House Extensions.
                                </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption skewfromrightshort customout"
                                     data-x="950"
                                     data-y="205"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1750"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 9"><img src="/slider/rs-slider/demo/graph.png" alt="" data-ww="52" data-hh="44">
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption large_bold_darkblue skewfromleftshort customout"
                                     data-x="right" data-hoffset="50"
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
                                     data-x="right" data-hoffset="50"
                                     data-y="125"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1650"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 11">Of Projects Completed
                                </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption medium_bold_red skewfromrightshort customout"
                                     data-x="right" data-hoffset="50"
                                     data-y="200"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1800"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 12">Record Breaking
                                </div>

                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption medium_light_red skewfromrightshort customout"
                                     data-x="right" data-hoffset="50"
                                     data-y="center" data-voffset="-10"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="1850"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 13">Customer Satisfaction
                                </div>

                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption medium_bg_red skewfromrightshort customout"
                                     data-x="right" data-hoffset="50"
                                     data-y="bottom" data-voffset="-200"
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
                                <div class="tp-caption medium_bold_orange skewfromleftshort customout"
                                     data-x="right" data-hoffset="50"
                                     data-y="340"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="2000"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 15">4.7<span style="font-weight:300;">/5 Stars</span>
                                </div>

                                <!-- LAYER NR. 15 -->
                             

                                <!-- LAYER NR. 16 -->
                        

                                <!-- LAYER NR. 17 -->
                       

                                <!-- LAYER NR. 18 -->
                            
                                <!-- LAYER NR. 19 -->
                            

                                <!-- LAYER NR. 20 -->
                                <div class="tp-caption medium_bg_orange skewfromleftshort customout"
                                     data-x="right" data-hoffset="50"
                                     data-y="bottom" data-voffset="-90"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                     data-speed="500"
                                     data-start="2300"
                                     data-easing="Back.easeOut"
                                     data-endspeed="500"
                                     data-endeasing="Power4.easeIn"
                                     data-captionhidden="on"
                                     style="z-index: 21">Customer Rating
                                </div>
                            </li>
                            <!-- SLIDE  -->
                     
                            <!-- SLIDE  -->
                           
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>



            </section>
            <!-- slider -->
            <section id="content">

                <!-- services -->
                <section id="services">
                    <div class="col-md-12 text-center pt30 pb30">
                        <h1>Our Remote Services</h1>
                        <p>We are doing a couple of things you might be interested in</p>
                    </div>
                    <div class="container pb30 pt30 ">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="boxIconServices posLeft clearfix">
                                    <i class="icon-align-center iconBig iconRounded"></i>
                                    <div class="boxContent">
                                        <h2>Kitchens</h2>
                                        <p>Elegant layouts that help you organize<br/> your life in the best way possible.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="boxIconServices clearfix">
                                    <i class="icon-th-large iconBig iconRounded"></i>
                                    <div class="boxContent">
                                        <h2>Bathrooms</h2>
                                        <p>For those who believe in the ultimate in luxury.<br> And the ultimate price.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="boxIconServices posLeft clearfix">
                                    <i class="icon-female iconBig iconRounded"></i>
                                    <div class="boxContent">
                                        <h2>House Extensions</h2>
                                        <p>To meet the needs of your growing business<br> or family. Because we care.</p>
                                    </div> 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="boxIconServices clearfix">
                                    <i class="icon-cog iconBig iconRounded"></i>
                                    <div class="boxContent">
                                        <h2>Security Walls</h2>
                                        <p>Because it's a jungle out there. Keep thieves, <br> and criminals out.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- services -->





        


        

                  
                 

             

    
                <!-- parallax quote --> 
                <!-- contact -->
                <section id="contact">
                    <div class="col-md-12 text-center pt30 pb30">
                        <h1>Keep in touch</h1>
                    </div>
                   


                </section>



            </section>
            <!-- end content -->
@endsection

