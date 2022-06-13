@extends('layouts.frontbaselogin')

@section('title', 'User Borrow Detail ')

@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">User Borrow Detail</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="aa-myaccount">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-myaccount-area">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="title">
                                    <h4>User Menu</h4>
                                </div>
                                @include('home.user.usermenu')
                            </div>
                            <div class="col-md-10">
                                <div class="aa-myaccount-register">
                                    <h4>User ShopCart</h4>
                                    <!-- Cart view section -->
                                    <section id="cart-view">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="cart-view-area">
                                                        <div class="cart-view-table">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Books</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($orderbooks as $rs)
                                                                            <tr>
                                                                                <td><a class="aa-cart-title" href="#">{{$rs->book->title}}</a></td>
                                                                                <td><a href="#"><img src="{{Storage::url($rs->book->image)}}" alt="img"></a></td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- / Cart view section -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


@endsection
