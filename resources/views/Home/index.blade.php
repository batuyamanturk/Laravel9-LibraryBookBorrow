@extends('layouts.frontbase')

@section('title', 'Library Book Borrow')

@section('content')
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="aboutheading">
                        <h2>About <strong class="black">Us</strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="about-box">
                        <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{asset('assets')}}/images/about.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end about -->
    <!-- Library -->
    <div class="Library">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Our <strong class="black">Library </strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="Library-box">
                            <figure><img src="{{asset('assets')}}/images/Library-.jpg" alt="#"/></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="read-more">
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Library -->
    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2>Our <strong class="black">Books </strong></h2>
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row box">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{asset('assets')}}/images/book-1.jpg" alt="img"/></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{asset('assets')}}/images/book-2.jpg" alt="img"/></figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="book-box">
                        <figure><img src="{{asset('assets')}}/images/book-1.jpg" alt="img"/></figure>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="read-more">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Books -->
    <!-- Contact -->
    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage3">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Name" type="Name">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Phone Number" type="Phone Number">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <input class="form-control" placeholder="Email" type="Email">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <textarea class="textarea" placeholder="Message">Message</textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div>
@endsection