@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions|'.$settings->title)
@section('description',  $settings->description)
@section('keywords',  $settings->keywords)
@section('icon',Storage::url($settings->icon))
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Frequently Asked Questions</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section title">
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="accordion">
                    @foreach($datalist as $rs)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                {{$rs->question}}
                            </a>
                        </div>
                        <div id="#collapse{{$loop->iteration}}" class="collapse  show " data-parent="#accordion">
                            <div class="card-body">
                                {!! $rs->answer !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
