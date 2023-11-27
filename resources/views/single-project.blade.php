@extends('layouts.master')
@section('content')
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{asset('storage/'.$project->image)}}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3><a href="{{$project->link}}" target="_blanck">{{ $project->{'title_'.app()->getLocale()} }}</a></h3>
                        <ul>
                            <li>{!!__('home.devweb')!!}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        {{ $project->{'description_'.app()->getLocale()} }}
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
