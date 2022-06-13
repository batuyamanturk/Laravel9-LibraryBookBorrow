@extends('layouts.frontbaselogin')

@section('title', 'Order Complete' )


@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Order Complete</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>{{Session::get('succes')}}</p>
            </div>
        </div>
    </div>


@endsection
