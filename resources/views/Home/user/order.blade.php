@extends('layouts.frontbaselogin')

@section('title', 'User Panel ')

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
                <form action="{{route("shopcart.storeorder")}}" method="post">
                    <p>{{Session::get('info')}}</p>
                    @csrf
                    <div class="col-md-12">
                        <div class="aa-myaccount-area">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Shipping Information</h4>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"  name="name" value="{{Auth::user()->name}}" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text"  name="email" value="{{Auth::user()->email}}"  placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text"  name="address"  placeholder="Address" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text"  name="phone"  placeholder="Phone" class="form-control" required>
                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="aa-myaccount-register">
                                        <h4>Borrow Information</h4>
                                        <div class="form-group">
                                            <label>The number of days you borrowed the book</label>
                                            <input type="text"  name="days" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Your return date of the book</label>
                                            <input type="date"  name="returndate" class="form-control" required>
                                        </div>
                                        <button type="submit" class="aa-cart-view-btn">Complete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- / Cart view section -->


@endsection
