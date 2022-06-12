@extends('layouts.frontbaselogin')

@section('title', 'User ShopCart ')

@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">User Profile</li>
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
                                                            <form>
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Books</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($data as $rs)
                                                                        <tr>
                                                                            <td><a class="aa-cart-title" href="#">{{$rs->book->title}}</a></td>
                                                                            <td><a href="#"><img src="{{Storage::url($rs->book->image)}}" alt="img"></a></td>
                                                                            <td>
                                                                                <a href="{{route('shopcart.destroy',['id'=>$rs->id])}}" class="fa fa-close"
                                                                                   onclick="return confirm('Are you sure to delete?')"></a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </form>
                                                            <!-- Cart Total view -->
                                                            <div class="cart-view-total">
                                                                <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
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
