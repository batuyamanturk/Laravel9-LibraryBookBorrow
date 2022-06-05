@extends('layouts.frontbase')

@section('title', 'Contact |'.$settings->title)
@section('description',  $settings->description)
@section('keywords',  $settings->keywords)
@section('icon',Storage::url($settings->icon))



@section('content')
    <section id="aa-catg-head-banner">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Contact Us</li>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <div class="container">
        <div class="row">
            <section id="aa-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-contact-area">
                                <div class="aa-contact-top">
                                    <h2>We are wating to assist you..</h2>
                                </div>
                                <!-- contact map -->
                                <div class="aa-contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6251.370185308593!2d27.12518513202667!3d38.425641790341345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd91f894fd4fd%3A0x2b7d032ef09e422d!2zQXRhdMO8cmsgxLBsIEhhbGsgS8O8dMO8cGhhbmVzaQ!5e0!3m2!1str!2str!4v1654395100745!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <!-- Contact address -->
                                <div class="aa-contact-address">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="aa-contact-address-left">
                                                <div class="section title">
                                                    <h3>Contact Form</h3>
                                                </div>
                                                <p>{{Session::get('info')}}</p>
                                                <form role="form" action="{{route("storemessage")}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Your Name" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Your Phone" name="phone" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" placeholder="Email" name="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Subject" name="subject" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="3" name="message" placeholder="Message"></textarea>
                                                    </div>
                                                    <button class="aa-secondary-btn">Send</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="aa-contact-address-right">
                                                <address>
                                                    <h4>B&R</h4>
                                                    {!! $settings->contact !!}
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection
