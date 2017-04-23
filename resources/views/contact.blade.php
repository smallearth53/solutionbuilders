@extends('layouts.app')

@section('title', 'About')

@section('navbar')
@parent
@endsection

@section('content')
<!-- ======================================= content ======================================= -->
<section id="page">
    <header class="page-header color1" style="background: #FFF">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Keep in touch with us</h1>
                </div>

            </div>
        </div>
    </header>
    <section id="content" class="mt30">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <h4>Address:</h4>
                    <address>
                        <p>
                            <i class="icon-location"></i>&nbsp;Solution Builders<br>
                            Kempton Park, Johannesburg<br>
                            <i class="icon-phone"></i>&nbsp;082 654 1234 <br>
                            <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:admin@chper.co.za">admin@chper.co.za</a>
                        </p>
                    </address>
                </div>
                <form method="post" action="/contact" id="contactfrm" role="form">
                    
                    {{ csrf_field() }}
                    
                    <div class="col-sm-4"> 
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter email phone" title="Please enter a valid phone number (at least 10 characters)">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
                        </div>
                        <fieldset class="clearfix securityCheck">
                            <h3>Security</h3>
                            <div class="form-group">
                                <img src="js-plugin/neko-contact-ajax-plugin/php/image.html" alt="Image verification"/>
                                <input class="required form-control"  id="verify" name="verify" type="text" >
                            </div>
                        </fieldset>
                    </div>                        
                    <div class="col-md-8 col-md-offset-4">
                        <div class="result"></div>
                        <button name="submit" type="submit" class="btn btn-lg" id="submit"> Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </section>
</section>
<br>
<!-- content -->
@endsection

