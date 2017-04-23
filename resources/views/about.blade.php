@extends('layouts.app')

@section('title', 'About')

@section('navbar')
    @parent
@endsection

@section('content')
    <section id="page">
        <header class="page-header color1" style="background: #FFF">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>About Solution Builders</h1>

                    </div>
                </div>
            </div>
        </header>
    </section>

    <section class="pt40 pb40 color1">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img src="{{asset('img/home1.jpg')}}" alt="HIDEO website template" class="img-responsive"/>
                </div>
                <div class="col-md-4">
                    <h3>House Construction</h3>
                    <p>
                        Just at this moment Alice felt a very curious sensation, which puzzled her a good deal until she
                        made out what it was: she was beginning to grow larger again, and she thought at first she would
                        get up and leave the court; but on second thoughts she decided to remain where she was as long
                        as there was room for her.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Extension and Renovations</h3>
                    <p>
                        This did not seem to encourage the witness at all: he kept shifting from one foot to the other,
                        looking uneasily at the Queen, and in his confusion he bit a large piece out of his teacup
                        instead of the bread-and-butter.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection

