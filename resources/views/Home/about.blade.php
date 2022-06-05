@extends('layouts.frontbase')

@section('title', 'About Us |'.$settings->title)
@section('description',  $settings->description)
@section('keywords',  $settings->keywords)
@section('icon',Storage::url($settings->icon))



@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">About Us</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $settings->aboutus !!}
            </div>
        </div>
    </div>


@endsection
