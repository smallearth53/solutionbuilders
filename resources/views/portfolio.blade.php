@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')

<section id="page">
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Our Portfolio</h1>
                </div>
              
            </div>
        </div>
    </header>
    <section id="content">
        <section class="pt30 pb30"> 
            <div class="container clearfix">
                <div class="row">
                    <nav id="filter" class="span12 text-center">
                        <div class="btn-group">
                            <a href="#" class="btn btn-default" data-filter="*">All</a>
                            <a href="#" class="btn btn-default" data-filter=".Bathrooms">Bathrooms</a>
                            <a href="#" class="btn btn-default" data-filter=".Kitchen">Kitchens</a>
                            <a href="#" class="btn btn-default"  data-filter=".Renovation">Renovations</a>
                        </div>
                    </nav>
                    <div class="portfolio-items  isotopeWrapper clearfix imgHover neko-hover-1" id="3">

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Bathrooms">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/bathroom1.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture"></i></a>
                                        <a href="images/portfolio/zoom6.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>


                            <section class="boxContent">
                                <h3>Full width image</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br />
                                    <a href="portfolio-project-fullwidth-image.html" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->	
                        <article class="col-sm-4 isotopeItem Bathrooms">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/bathroom2.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-videocam"></i></a>
                                        <a href="http://www.youtube.com/watch?v=Cvds3cmJ9hI" class="image-iframe" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Video YouTube</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a> </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Bathrooms">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/bathroom3.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link" ><i class="icon-videocam"></i></a>
                                        <a href="http://player.vimeo.com/video/62198366" class="image-iframe" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Video Vimeo</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Bathrooms">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/bathroom4.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-camera"></i></a>
                                        <a href="images/portfolio/zoom3.jpg" data-gallery="images/portfolio/zoom1.jpg,images/portfolio/zoom2.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Gallery</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="portfolio-project-fullwidth-carousel.html" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->	
                        <article class="col-sm-4 isotopeItem Bathrooms">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/bathroom5.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom2.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Kitchen">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/kitchen1.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom4.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Kitchen">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/kitchen2.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom8.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.<br />
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Kitchen">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/kitchen3.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom5.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.<br />
                                    <a href="#" class="moreLink">&rarr; read more</a> </p>
                            </section>

                        </article>
                        <!-- portfolio item -->

                        <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Renovation">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/renovations1.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->
                        
                              <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Renovation">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/renovations2.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->
                              <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Renovation">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/renovations3.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->
                              <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Renovation">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/renovations4.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->
                              <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Renovation">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/renovations5.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->
                              <!-- portfolio item -->
                        <article class="col-sm-4 isotopeItem Renovation">

                            <figure>
                                <img alt="" src="{{asset('img/portfolio/renovations6.jpg')}}" class="img-responsive">

                                <figcaption>
                                    <ul class="pinInfo">
                                        <li><a href="#"><i class="icon-eye"></i>150</a></li>
                                        <li><a href="#"><i class="icon-comment-1"></i>4</a></li>
                                        <li><a href="#"><i class="icon-heart"></i>32</a></li>
                                    </ul>
                                    <div class="iconLinks">
                                        <a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
                                        <a href="images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <section class="boxContent">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat. <br>
                                    <a href="#" class="moreLink">&rarr; read more</a>
                                </p>
                            </section>

                        </article>
                        <!-- portfolio item -->
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<!-- content -->

<!-- end content -->
@endsection

