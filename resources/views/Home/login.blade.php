@extends('layouts.frontbaselogin')

@section('title', 'User Login')

@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">User Login</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section title">
                    <h3>User Login</h3>
                </div>
                @include('auth.login')
            </div>
        </div>
    </div>


@endsection
