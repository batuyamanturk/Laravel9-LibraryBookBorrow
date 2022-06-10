@extends('layouts.frontbase')

@section('title', $settings->title)
@section('description',  'References |'.$settings->description)
@section('keywords',  $settings->keywords)
@section('icon',Storage::url($settings->icon))



@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">References </li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section title">
                    <h3>References</h3>
                </div>
                {!! $settings->references !!}
            </div>
        </div>
    </div>


@endsection
