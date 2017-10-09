@extends('layouts.layout')

@section('content')
    <div class="home-page main">
        <section class="grid-wrap" >
            <header class="grid col-full">
                <hr>
                <p class="fleft">Home</p>
                <a href="{{ url('/') }}" class="arrow fright">see more infos</a>
            </header>

            <div class="grid col-one-half mq2-col-full">
                <h1>{{$projects[0]->hContent}}</h1>
                <p>{{$projects[0]->pContent}}
                </p>
                <p>{{$projects[0]->p2Content}}
                </p>
            </div>


            <div class="slider grid col-one-half mq2-col-full">
                <div class="flexslider">
                    <div class="slides">
                        <div class="slide">
                            <figure >
                                <img src="/img/example.jpg" alt="">
                                <figcaption style="min-height: 0em; width: 40%;">
                                    <div>
                                        <h5>Good Human</h5>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="slide">
                            <figure>
                                <img src="/img/example2.jpg" alt="">
                                <figcaption style="min-height: 0em; width: 40%;">
                                    <div>
                                        <h5>Good Mother</h5>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="slide">
                            <figure>
                                <img src="/img/example3.jpg" alt="">
                                <figcaption style="min-height: 0em; width: 40%;">
                                    <div>
                                        <h5>Good Teacher</h5>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>


            <hr style="border-top-color: #999;">

    </div>



    @endsection